"""Optimize audited images while preserving URLs; stage unused images for Drive.

Requires Pillow. Run audit-images.py and check-live-image-references.py first.
This deliberately does not remove archive candidates. Removal requires verified upload.
"""
import concurrent.futures
import hashlib
import io
import json
import re
import zipfile
from pathlib import Path
from PIL import Image, ImageOps, ImageCms

ROOT = Path(__file__).resolve().parents[1]
WORK = ROOT / 'image-audit'

def digest(data):
    return hashlib.sha256(data).hexdigest()

def normalized(original):
    im = ImageOps.exif_transpose(original)
    if original.info.get('icc_profile'):
        try:
            im = ImageCms.profileToProfile(im, ImageCms.ImageCmsProfile(io.BytesIO(original.info['icc_profile'])), ImageCms.createProfile('sRGB'), outputMode='RGBA' if 'A' in im.getbands() else 'RGB')
        except (ValueError, OSError):
            # Keep the original color profile when conversion is not supported.
            pass
    return im

def bounds(row):
    name = Path(row['path']).name.lower()
    if '/favicon/' in row['path']:
        return row['width'], row['height']
    if name.startswith('staff-'):
        return 1000, 1200
    if row['path'].startswith('public/images-mist/age-'):
        return 960, 1344
    if 'poster' in name and 'dance' in name:
        return 1280, 1280
    return 1920, 2400

def optimize(row):
    p = ROOT / row['path']
    before = p.read_bytes()
    result = {**row, 'original_sha256': digest(before), 'original_bytes': len(before), 'outputs': []}
    if row.get('frames', 1) > 1 or row.get('format') not in ['JPEG', 'PNG', 'WEBP', 'BMP', 'TIFF']:
        result.update(bytes=len(before), sha256=digest(before), action='kept existing vector, icon, animation, or unsupported image')
        if row['status'] == 'archive-candidate':
            target = WORK / 'archive' / row['path']
            target.parent.mkdir(parents=True, exist_ok=True)
            target.write_bytes(before)
            result['archive_path'] = target.relative_to(WORK / 'archive').as_posix()
        return result
    with Image.open(io.BytesIO(before)) as original:
        im = normalized(original)
        im.thumbnail(bounds(row), Image.Resampling.LANCZOS)
        if im.mode == 'P':
            im = im.convert('RGBA' if 'transparency' in original.info else 'RGB')
        if im.mode not in ['RGB', 'RGBA', 'L', 'LA']:
            im = im.convert('RGB')
        # Generate WebP from the original decode, before recompressing legacy formats.
        if row['status'] == 'archive-candidate':
            target = WORK / 'archive' / (row['path'] + '.webp')
            target.parent.mkdir(parents=True, exist_ok=True)
            im.save(target, 'WEBP', quality=85, method=6)
            with Image.open(target) as check:
                check.load()
            result.update(archive_path=target.relative_to(WORK / 'archive').as_posix(), bytes=target.stat().st_size, sha256=digest(target.read_bytes()), width=im.width, height=im.height, action='archive as resized WebP')
            return result
        fmt = row['format']
        data = io.BytesIO()
        if fmt == 'JPEG':
            im.convert('RGB').save(data, 'JPEG', quality=82, optimize=True, progressive=True, icc_profile=im.info.get('icc_profile'))
        elif fmt == 'PNG':
            im.save(data, 'PNG', optimize=True, icc_profile=im.info.get('icc_profile'))
        elif fmt == 'WEBP':
            im.save(data, 'WEBP', quality=85, method=6)
        else:
            im.save(data, fmt)
        optimized = data.getvalue()
        # Never replace a file with a larger encoding.
        if len(optimized) < len(before):
            with Image.open(io.BytesIO(optimized)) as check:
                check.load()
            p.write_bytes(optimized)
            result['action'] = 'resized and/or compressed in place'
        else:
            optimized = before
            result['action'] = 'existing encoding already smaller'
        result.update(bytes=len(optimized), sha256=digest(optimized))
        with Image.open(io.BytesIO(optimized)) as check:
            result.update(width=check.width, height=check.height)
        # Larger PNGs gain modern delivery while existing URLs stay usable by CMS data.
        if fmt == 'PNG' and len(optimized) > 30000 and row['path'].startswith('public/images'):
            webp = p.with_name(p.name + '.webp')
            im.save(webp, 'WEBP', quality=85, method=6)
            if webp.stat().st_size < len(optimized) * 0.85:
                result['outputs'].append({'path': webp.relative_to(ROOT).as_posix(), 'bytes': webp.stat().st_size, 'replace': True})
            else:
                webp.unlink()
        # These existing components discover same-basename WebP and responsive widths.
        if p.parent.name == 'images-mist':
            all_views = (ROOT / 'resources/views/welcome-mist.blade.php').read_text(encoding='utf-8')
            component = re.search(r'<x-site-image\b[^>]*src="/' + re.escape(row['path'][7:]) + '"', all_views)
            if component:
                widths = [480, 800, 1200, 1575] if p.name == 'header.jpg' else ([320, 640, 960] if p.name.startswith('age-') else [])
                if p.name.startswith('age-') and original.width == 500:
                    widths = [320, 500]
                exports = widths or [None]
                for width in exports:
                    export = normalized(original)
                    if width:
                        if width > export.width:
                            continue
                        export = export.resize((width, round(export.height * width / export.width)), Image.Resampling.LANCZOS)
                    elif p.name in ['logo-mtjgd.png', 'logo-safe.png', 'logo-ypad.png']:
                        export.thumbnail({'logo-mtjgd.png': (500,404), 'logo-safe.png': (630,351), 'logo-ypad.png': (528,200)}[p.name], Image.Resampling.LANCZOS)
                    if export.mode == 'P':
                        export = export.convert('RGBA')
                    webp = p.with_suffix('.webp') if width is None else p.with_name(f'{p.stem}-{width}.webp')
                    if webp.exists():
                        raise RuntimeError(f'Refusing to overwrite preexisting export: {webp}')
                    export.save(webp, 'WEBP', quality=82, method=6)
                    result['outputs'].append({'path': webp.relative_to(ROOT).as_posix(), 'bytes': webp.stat().st_size, 'replace': False})
        return result

def main():
    if (WORK / 'optimization-results.json').exists():
        raise SystemExit('Results already exist; refusing another lossy pass.')
    rows = json.loads((WORK / 'inventory.json').read_text())
    live = json.loads((WORK / 'live-reference-check.json').read_text())
    if sum(p['error'] is None for p in live['pages']) == 0:
        raise SystemExit('Complete the live reference check first.')
    for row in rows:
        if row['path'] in live['references']:
            row['status'] = 'keep'
            row['references'] += live['references'][row['path']]
    results = []
    with concurrent.futures.ThreadPoolExecutor(max_workers=4) as pool:
        for i, result in enumerate(pool.map(optimize, rows), 1):
            results.append(result)
            if i % 50 == 0:
                print(f'Optimized {i}/{len(rows)} images', flush=True)
    (WORK / 'optimization-results.json').write_text(json.dumps(results, indent=2), encoding='utf-8')
    mapping = {r['path'][7:]: o['path'][7:] for r in results if r['path'].startswith('public/') for o in r['outputs'] if o['replace']}
    changes = []
    for folder in ['resources', 'public/css', 'public/js']:
        for p in (ROOT / folder).rglob('*'):
            if not p.is_file() or p.suffix not in ['.php', '.css', '.js']:
                continue
            source = p.read_bytes()
            updated = source
            for old, new in mapping.items():
                # Literal full paths only. Leave dynamic paths and existing component fallbacks alone.
                lines = updated.splitlines(keepends=True)
                updated = b''.join(line if b'<x-site-image' in line or b'is_file(public_path' in line else re.sub(re.escape(old.encode()) + rb'(?=[\x22\x27\x29\x3f\x20])', new.encode(), line) for line in lines)
            if updated != source:
                p.write_bytes(updated)
                changes.append(p.relative_to(ROOT).as_posix())
    (WORK / 'changed-sources.json').write_text(json.dumps(changes, indent=2))
    archived = [r for r in results if r['status'] == 'archive-candidate']
    (WORK / 'archive/manifest.json').write_text(json.dumps(archived, indent=2), encoding='utf-8')
    (WORK / 'archive/README.txt').write_text('MDU archived web images\nOptimized September 13, 2026.\n\nPaths preserve original project folders. Static images are WebP (quality 85), capped at 1920 x 2400 without upscaling; staff images are capped at 1000 x 1200. Aspect ratios and transparency are preserved. Original dimensions, original filenames, reference checks, and SHA-256 hashes are in manifest.json. To reuse, copy an image into public and reference its .webp filename.\n\nNo references were found in local templates, styles, scripts, SQLite content, or successfully fetched live pages. Dynamically selected images, favicon assets and CMS uploads were retained. The live check read 119 public pages; calendar and dance-class-la-crosse-wi returned HTTP 500, and articles/9 returned HTTP 404. Original full-resolution versions remain in Git history for tracked files.\n', encoding='utf-8')
    archive = WORK / 'mdu-archived-web-images-2026-09-13.zip'
    with zipfile.ZipFile(archive, 'w', compression=zipfile.ZIP_DEFLATED, compresslevel=6) as z:
        for p in sorted((WORK / 'archive').rglob('*')):
            if p.is_file():
                z.write(p, p.relative_to(WORK / 'archive'))
    with zipfile.ZipFile(archive) as z:
        assert z.testzip() is None
    print(json.dumps({'original_MiB': sum(r['original_bytes'] for r in results)/1048576, 'kept_MiB': sum(r['bytes'] + sum(o['bytes'] for o in r['outputs']) for r in results if r['status']=='keep')/1048576, 'archive_count': len(archived), 'archive_MiB': archive.stat().st_size/1048576, 'changed_source_files': len(changes)}, indent=2))

if __name__ == '__main__':
    main()
