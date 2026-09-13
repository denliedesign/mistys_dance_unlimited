"""Validate the cloud receipt and both file copies before preparing local removal."""
import hashlib
import json
import zipfile
from pathlib import Path
from importlib.util import spec_from_file_location, module_from_spec

ROOT = Path(__file__).resolve().parents[1]
WORK = ROOT / 'image-audit'
receipt = json.loads((WORK / 'drive-receipt.json').read_text())
assert receipt['upload_success'] and receipt['metadata_verified']
archive = WORK / receipt['file_name']
assert archive.stat().st_size == receipt['verified_bytes']
results = json.loads((WORK / 'optimization-results.json').read_text())
spec = spec_from_file_location('audit', ROOT / 'tools/audit-images.py')
audit = module_from_spec(spec)
spec.loader.exec_module(audit)
current = {r['path']: r for r in audit.inventory()}
deletions = []
with zipfile.ZipFile(archive) as z:
    assert z.testzip() is None
    for row in results:
        if row['status'] != 'archive-candidate':
            continue
        p = (ROOT / row['path']).resolve()
        assert p.is_relative_to(ROOT / 'public')
        assert current[row['path']]['status'] == 'archive-candidate', row['path']
        assert hashlib.sha256(p.read_bytes()).hexdigest() == row['original_sha256'], row['path']
        assert hashlib.sha256(z.read(row['archive_path'])).hexdigest() == row['sha256'], row['path']
        deletions.append({'path': str(p), 'sha256': row['original_sha256']})
(WORK / 'verified-deletions.json').write_text(json.dumps(deletions, indent=2))
print(f'Confirmed {len(deletions)} unused originals have intact optimized copies in the verified Drive archive.')
