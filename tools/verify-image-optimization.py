"""Verify decode, dimensions, and newly introduced references after optimization."""
import io
import json
import re
import subprocess
from pathlib import Path
from PIL import Image, ImageOps, ImageDraw

ROOT = Path(__file__).resolve().parents[1]
WORK = ROOT / 'image-audit'

def main():
    results = json.loads((WORK / 'optimization-results.json').read_text())
    errors = []
    checked = 0
    for row in results:
        if row['status'] != 'keep':
            continue
        for rel in [row['path']] + [o['path'] for o in row['outputs']]:
            p = ROOT / rel
            if not p.exists():
                errors.append(f'Missing kept file: {rel}')
                continue
            if p.suffix.lower() in ['.svg', '.ico'] or 'metadata_note' in row:
                continue
            with Image.open(p) as im:
                im.load()
                checked += 1
                if rel == row['path'] and im.size != (row['width'], row['height']):
                    errors.append(f'Dimension mismatch: {rel}')
    changes = json.loads((WORK / 'changed-sources.json').read_text())
    pattern = r'(?:/)?((?:images|images-lava|images-mist)/[^\s\x22\x27()<>?]+\.(?:jpg|jpeg|png|webp|gif|svg))'
    baseline_missing, new_missing = set(), set()
    for rel in changes:
        before = subprocess.check_output(['git', 'show', 'HEAD:' + rel], cwd=ROOT).decode('utf-8', errors='replace')
        after = (ROOT / rel).read_text(encoding='utf-8')
        old_refs, new_refs = set(re.findall(pattern, before)), set(re.findall(pattern, after))
        for ref in new_refs:
            if not (ROOT / 'public' / ref).exists():
                (baseline_missing if ref in old_refs else new_missing).add((rel, ref))
    errors += [f'New missing reference: {item}' for item in sorted(new_missing)]
    samples = ['public/images-mist/header.jpg', 'public/images-mist/age-3.jpg', 'public/images/staff-rubie.jpeg', 'public/images/ballet-studios-la-crosse.jpg', 'public/images/first-hug.png', 'public/images-mist/logo-safe.png']
    sheet = Image.new('RGB', (1000, 350 * len(samples)), 'white')
    draw = ImageDraw.Draw(sheet)
    for i, rel in enumerate(samples):
        before = subprocess.check_output(['git', 'show', 'HEAD:' + rel], cwd=ROOT)
        with Image.open(io.BytesIO(before)) as original:
            original = ImageOps.exif_transpose(original).convert('RGBA')
            original.thumbnail((480, 315), Image.Resampling.LANCZOS)
            sheet.paste(original, ((500-original.width)//2, i*350+25), original)
        target = ROOT / rel
        if target.with_name(target.name + '.webp').exists():
            target = target.with_name(target.name + '.webp')
        elif target.name == 'header.jpg':
            target = target.with_name('header-1200.webp')
        elif target.name == 'age-3.jpg':
            target = target.with_name('age-3-500.webp')
        with Image.open(target) as optimized:
            optimized = optimized.convert('RGBA')
            optimized.thumbnail((480, 315), Image.Resampling.LANCZOS)
            sheet.paste(optimized, (500+(500-optimized.width)//2, i*350+25), optimized)
        draw.text((10, i*350+5), Path(rel).name + ' — original', fill='black')
        draw.text((510, i*350+5), 'Optimized', fill='black')
    sheet.save(WORK / 'visual-comparison.jpg', quality=90)
    report = {'decoded_images': checked, 'changed_source_files': len(changes), 'new_missing_references': sorted(new_missing), 'preexisting_missing_references': sorted(baseline_missing), 'errors': errors}
    (WORK / 'verification.json').write_text(json.dumps(report, indent=2))
    print(json.dumps(report, indent=2))
    if errors:
        raise SystemExit(1)

if __name__ == '__main__':
    main()
