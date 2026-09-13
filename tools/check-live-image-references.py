"""Read public site pages to protect image names used by live CMS content."""
import concurrent.futures
import json
import re
import ssl
import sys
import urllib.request
from urllib.parse import urljoin, urlsplit, unquote
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
ORIGIN = 'https://mistysdance.com'
# Optional, invocation-scoped fallback for reading public pages with an expired certificate.
# No credentials, cookies, or private content are sent.
context = ssl._create_unverified_context() if '--allow-expired-certificate' in sys.argv else ssl.create_default_context()
rows = json.loads((ROOT / 'image-audit/inventory.json').read_text())
routes = (ROOT / 'routes/web.php').read_text()
urls = {ORIGIN + '/', ORIGIN + '/sitemap.xml'}
for route in re.findall(r"^Route::get\('([^'{]+)'", routes, re.M):
    if not any(x in route for x in ['logout', 'import', 'password', 'login', 'register', 'levels']):
        urls.add(ORIGIN + '/' + route.lstrip('/'))

def fetch(url):
    try:
        req = urllib.request.Request(url, headers={'User-Agent': 'MDU-image-audit/1.0'})
        with urllib.request.urlopen(req, timeout=25, context=context) as response:
            if 'text/' not in response.headers.get('Content-Type', '') and 'xml' not in response.headers.get('Content-Type', ''):
                return url, '', 'non-text'
            return url, unquote(response.read(4000000).decode('utf-8', errors='replace')), None
    except Exception as e:
        return url, '', str(e)

seen, results, references = set(), [], {}
for depth in range(3):
    batch = sorted(urls - seen)
    if not batch:
        break
    seen.update(batch)
    with concurrent.futures.ThreadPoolExecutor(max_workers=4) as pool:
        for url, text, error in pool.map(fetch, batch):
            results.append({'url': url, 'error': error})
            if error:
                continue
            low = text.lower()
            for row in rows:
                if Path(row['path']).name.lower() in low:
                    references.setdefault(row['path'], []).append(url)
            for href in re.findall(r'(?:href=["\x27]([^"\x27]+)|<loc>([^<]+)</loc>)', text):
                link = urljoin(url, href[0] or href[1]).split('#')[0]
                parsed = urlsplit(link)
                if parsed.netloc == 'mistysdance.com' and not parsed.query and re.match(r'^/(?:blogs|articles|events|promotions|communities)(?:/[^/]+)?/?$', parsed.path) and not re.search(r'/(create|edit|destroy)$', parsed.path):
                    urls.add(link)
    print(f'Round {depth+1}: checked {len(seen)} public URLs, found {len(references)} image references', flush=True)
(ROOT / 'image-audit/live-reference-check.json').write_text(json.dumps({'pages': results, 'references': references}, indent=2))
print(json.dumps({'successful': sum(x['error'] is None for x in results), 'failed': [x for x in results if x['error']], 'protected_candidates': [r['path'] for r in rows if r['status']=='archive-candidate' and r['path'] in references]}, indent=2))
