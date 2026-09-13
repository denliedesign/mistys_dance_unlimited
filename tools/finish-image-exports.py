"""Complete shared component exports and remove generated companions not referenced."""
import io
import json
import re
import subprocess
from pathlib import Path
from PIL import Image
from importlib.util import spec_from_file_location, module_from_spec

ROOT = Path(__file__).resolve().parents[1]
WORK = ROOT / 'image-audit'
spec = spec_from_file_location('optimizer', ROOT / 'tools/optimize-images.py')
optimizer = module_from_spec(spec)
spec.loader.exec_module(optimizer)
results = json.loads((WORK / 'optimization-results.json').read_text())
sources = '\n'.join(p.read_text(encoding='utf-8', errors='replace') for p in (ROOT/'resources').rglob('*') if p.is_file() and p.suffix in ['.php', '.css', '.js'])
component_paths = set(re.findall(r'<x-site-image\b[^>]*src="/([^\"]+)"', sources))
# The poster's explicit fallback already discovers this same-basename WebP.
component_paths.add('images-mist/if-you-let-me-dance-poster.jpg')
for row in results:
    rel = row['path'].removeprefix('public/')
    if row['status'] != 'keep' or rel not in component_paths:
        continue
    p = ROOT / row['path']
    if p.parent.name == 'images-mist' and p.name.startswith('age-'):
        original_bytes = subprocess.check_output(['git', 'show', 'HEAD:' + row['path']], cwd=ROOT)
        with Image.open(io.BytesIO(original_bytes)) as original:
            if original.width == 500 and not p.with_name(p.stem + '-500.webp').exists():
                target = p.with_name(p.stem + '-500.webp')
                optimizer.normalized(original).save(target, 'WEBP', quality=82, method=6)
                row['outputs'].append({'path': target.relative_to(ROOT).as_posix(), 'bytes': target.stat().st_size, 'replace': False})
    if p.with_suffix('.webp').exists() or any(not o['replace'] for o in row['outputs']):
        continue
    original_bytes = subprocess.check_output(['git', 'show', 'HEAD:' + row['path']], cwd=ROOT)
    with Image.open(io.BytesIO(original_bytes)) as original:
        im = optimizer.normalized(original)
        im.thumbnail((322,100) if p.name == 'logo-mdu.png' else optimizer.bounds(row), Image.Resampling.LANCZOS)
        if im.mode == 'P':
            im = im.convert('RGBA')
        target = p.with_suffix('.webp')
        im.save(target, 'WEBP', quality=85, method=6)
    row['outputs'].append({'path': target.relative_to(ROOT).as_posix(), 'bytes': target.stat().st_size, 'replace': False})

corpus = sources + '\n'.join(p.read_text(encoding='utf-8', errors='replace') for folder in ['public/css','public/js'] for p in (ROOT/folder).rglob('*') if p.is_file() and p.suffix in ['.css','.js'])
removed = []
for row in results:
    for output in list(row['outputs']):
        if output['replace'] and output['path'].removeprefix('public/') not in corpus:
            target = (ROOT / output['path']).resolve()
            assert target.is_relative_to(ROOT / 'public') or target.is_relative_to(ROOT / 'storage/app/public')
            target.unlink()
            row['outputs'].remove(output)
            removed.append(output['path'])
(WORK / 'optimization-results.json').write_text(json.dumps(results, indent=2))
print(json.dumps({'unused_generated_companions_removed': len(removed), 'kept_MiB': sum(r['bytes']+sum(o['bytes'] for o in r['outputs']) for r in results if r['status']=='keep')/1048576}, indent=2))
