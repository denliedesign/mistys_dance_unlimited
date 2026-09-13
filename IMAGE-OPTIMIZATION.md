# Image optimization — September 13, 2026

Image optimization and Drive archiving are complete. Production deployment has not been verified.

## Results

All sizes below use MiB (1,048,576 bytes).

| Scope | Before | After | Reduction |
| --- | ---: | ---: | ---: |
| Project images, including local CMS uploads | 733.03 MiB | 164.43 MiB | 77.6% |
| Images in the Git working tree, including new WebP exports | 707.08 MiB | 148.10 MiB | 79.1% |
| 359 archived files | 349.04 MiB | 62.71 MiB ZIP in Drive | 82.0% |
| Local Git object storage | 1,314.85 MiB | 1,239.34 MiB | 75.51 MiB recovered |

Audited 1,059 image-named files: retained 700, archived 359. Compressed 641 retained originals and added 171 WebP exports. Files already smaller than the proposed encoding were left unchanged. SVG and ICO assets stayed in their existing formats. One archived 210-byte file (`public/images/DancinDinos.jpg`) is a macOS resource-fork metadata file, not a decodable photograph; its bytes were preserved in the archive.

## Delivery and quality

- JPEG photos use optimized progressive encoding, quality 82. PNG fallbacks use lossless compression. WebP exports use quality 82–85.
- General oversized images fit within 1920 × 2400 pixels; staff portraits fit within 1000 × 1200. Aspect ratio, transparency and EXIF orientation are preserved. Color profiles are converted to sRGB where supported. No images are upscaled.
- The homepage hero has 480, 800, 1200 and 1575 pixel WebP versions (13–59 KiB). Its original JPEG was 300 KiB.
- The actual age-card originals in this checkout are 500 × 700, smaller than the older PageSpeed document describes. Their responsive WebP versions are 320 and 500 pixels wide. For example, age-3 fell from 143 KiB to 4.7 KiB at 320 pixels and 8.3 KiB at 500 pixels.
- Homepage illustrations, navigation logo, partners, testimonials and video poster have WebP exports. Forty source files now reference smaller WebP versions of larger PNGs. Existing optimized JPEG/PNG URLs remain available for CMS data and legacy callers.
- Preserved 59 local CMS uploads under `storage/app/public`; they are ignored by Git, so their optimizations must be transferred separately if wanted on the production server.

## Archive and restoration

[Open mdu archived web images](https://drive.google.com/drive/folders/1vnm9oIyC6P-IgbOAyIhjvjEzW0LCQILT) in customdenlie@gmail.com.

[Download the optimized archive](https://drive.google.com/file/d/1Q2ZBRtI_EphSmcrfE6lwQS1ZJyjBNDEU/view?usp=drivesdk). The ZIP preserves original folder paths, includes a detailed JSON manifest and restoration notes, and adds `.webp` to original filenames to avoid collisions. For example, `public/images/example.jpg` becomes `public/images/example.jpg.webp` inside the ZIP.

The upload succeeded and Drive metadata confirmed its parent folder and all 65,758,307 bytes. ZIP CRC and every archived image's SHA-256 were verified locally before removing the 359 originals; their original local hashes were also checked immediately before removal. A final reference scan confirmed they were still unreferenced. See [the complete index](docs/image-optimization/image-manifest.csv) and [Drive receipt](docs/image-optimization/drive-archive-receipt.json).

To reuse an archived image, download/extract the ZIP, copy the selected optimized file into `public`, and reference its new WebP filename. Full-resolution originals of archived files remain available in existing Git history. The Drive archive contains web-optimized versions, not full-resolution originals.

## Reference checks and validation

- Scanned all local templates, application code, styles, scripts, seed files and SQLite text content. Also read 119 public pages, including discovered article/blog content. Retained every referenced filename, dynamic staff/BW image family, favicon and CMS upload. This is conservative: images mentioned in old templates or comments are retained.
- The live scan encountered an expired-certificate validation error; a one-run public-only fetch was used, with no credentials or cookies. `calendar` and `dance-class-la-crosse-wi` returned HTTP 500, and `articles/9` returned HTTP 404. Local references on these pages were still checked. No complete production database export was available.
- Decoded 866 retained/generated raster files successfully; no new broken image references in changed source files. The [reference report](docs/image-optimization/reference-check.json) records 22 pre-existing missing references, including legacy/commented templates.
- Visually compared representative original/optimized hero, age card, portrait, large photo and transparent illustration exports.
- All five PHP tests pass (387 assertions), including WebP existence, actual responsive widths, hero priority and lazy loading. Blade templates compile, the production asset build succeeds, and the patch passes whitespace validation. Existing PHPUnit schema and Browserslist age warnings remain.

## GitHub size and deployment

The current image tree is approximately 79% smaller. Commit and push the image changes and WebP references together, then deploy and clear/rebuild compiled Blade views. Use a deployment that applies the tracked deletions so archived images are removed from the web server too. Recheck mobile/desktop loading after deployment; no new live PageSpeed score is claimed.

Local Git storage was repacked without rewriting commits. This saved about 75.5 MiB locally. Old image versions still occupy Git history, so a full GitHub clone will not shrink by the working-tree savings. Removing those historical images would require a separately coordinated history rewrite and force push; neither was performed. Approximate local space recovered from image cleanup plus Git repacking is 644.1 MiB, excluding small reports.

The image tools in `tools/` require Pillow and are maintenance utilities, not production dependencies. Temporary audits and archive staging are excluded via `/image-audit/` in `.gitignore`. Do not repeatedly run lossy compression on already optimized files; the optimizer refuses a repeat pass while its results file exists.
