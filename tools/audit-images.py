"""Inventory first-party images and conservatively identify reference candidates."""
import json
import sqlite3
from pathlib import Path
from collections import Counter
from PIL import Image

ROOT = Path(__file__).resolve().parents[1]
EXTENSIONS = {'.jpg', '.jpeg', '.png', '.gif', '.webp', '.svg', '.ico', '.bmp', '.tif', '.tiff', '.avif'}

def inventory():
    sources = []
    for folder in ['resources', 'app', 'routes', 'database', 'public/css', 'public/js', 'public/favicon']:
        for p in (ROOT / folder).rglob('*'):
            if p.is_file() and p.suffix.lower() in {'.php', '.css', '.js', '.json', '.xml', '.webmanifest', '.sql'}:
                sources.append((p.relative_to(ROOT).as_posix(), p.read_text(encoding='utf-8', errors='replace').lower()))
    rows = []
    db_path = ROOT / 'database/database.sqlite'
    if db_path.exists():
        with sqlite3.connect(db_path.as_uri() + '?mode=ro', uri=True) as db:
            # Only the reference scanner sees values; never write private database content to reports.
            for (table,) in db.execute("SELECT name FROM sqlite_master WHERE type='table'"):
                quoted = '"' + table.replace('"', '""') + '"'
                values = ' '.join(str(v) for row in db.execute('SELECT * FROM ' + quoted) for v in row if isinstance(v, str))
                sources.append(('database:' + table, values.lower()))
    for folder in ['public/images', 'public/images-lava', 'public/images-mist', 'public/favicon', 'storage/app/public', 'resources']:
        for p in sorted((ROOT / folder).rglob('*')):
            if not p.is_file() or p.suffix.lower() not in EXTENSIONS:
                continue
            rel = p.relative_to(ROOT).as_posix()
            refs = [name for name, text in sources if p.name.lower() in text]
            dynamic = (p.name.startswith('staff-') and folder == 'public/images-lava') or p.name.startswith('BW_') or folder in ['public/favicon', 'storage/app/public', 'resources']
            row = dict(path=rel, bytes=p.stat().st_size, references=refs, status='keep' if refs or dynamic else 'archive-candidate', dynamic=dynamic)
            try:
                with Image.open(p) as im:
                    row.update(width=im.width, height=im.height, format=im.format, frames=getattr(im, 'n_frames', 1), mode=im.mode)
            except Exception as e:
                row['metadata_note'] = str(e)
            rows.append(row)
    return rows

if __name__ == '__main__':
    rows = inventory()
    output = ROOT / 'image-audit'
    output.mkdir(exist_ok=True)
    (output / 'inventory.json').write_text(json.dumps(rows, indent=2), encoding='utf-8')
    print(json.dumps({s: {'count': sum(r['status'] == s for r in rows), 'MiB': round(sum(r['bytes'] for r in rows if r['status'] == s)/1048576, 2)} for s in ['keep', 'archive-candidate']}, indent=2))
    print('Largest images:', json.dumps(sorted(rows, key=lambda r: r['bytes'], reverse=True)[:15], indent=2))
