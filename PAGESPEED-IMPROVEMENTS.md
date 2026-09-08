# PageSpeed improvements — September 8, 2026

## Baseline supplied reports

| Category | [Mobile](https://pagespeed.web.dev/analysis/https-mistysdance-com/uefti6tr23?form_factor=mobile) | [Desktop](https://pagespeed.web.dev/analysis/https-mistysdance-com/uefti6tr23?form_factor=desktop) |
| --- | ---: | ---: |
| Performance | 48 | 86 |
| Accessibility | 96 | 96 |
| Best Practices | 96 | 92 |
| SEO | 100 | 100 |
| Lab largest contentful paint | 37.9 s | 2.1 s |
| Lab total blocking time | 510 ms | 80 ms |

The mobile lab run transferred about 11.1 MiB. Estimated image savings were 5,205 KiB mobile and 5,603 KiB desktop. These are baseline estimates, not measured savings from the changes.

Real-user data covers the origin over 28 days: mobile passed Core Web Vitals; desktop failed with cumulative layout shift of 0.13. Field results will take time to reflect a deployment and cover more than just the homepage.

## Implemented

- Restrict seven global database collection queries to the specific views that use them. Previously every included partial repeated the queries; the public homepage now renders without querying these tables.
- Remove the homepage's GSAP, ScrollTrigger, Draggable and Inertia downloads. Content appears immediately; class cards use native horizontal scrolling and buttons retain a lightweight hover effect. Other pages retain their animation dependencies, with a guard against missing slider elements.
- Load TinyMCE only where editor textareas exist. Defer Bootstrap JavaScript and initialize chat after page load during an idle period.
- Use one homepage font request for Poppins 400/600/700 with font-display swap and connection hints. Remove the redundant Bootstrap 4 stylesheet on the homepage while keeping Bootstrap 5.
- Give every homepage image explicit dimensions, prioritize the hero, and lazy-load secondary images. Add optional WebP and responsive-image support while retaining original fallbacks.
- Prevent the two video players from preloading the 56.6 MiB video. Load their poster only near the visible player. Use one shared video URL.
- Correct yellow text, footer links, and cookie banner contrast; preserve partner logo proportions.
- Add Apache text compression and static-asset cache lifetimes, without caching dynamic pages. Changed homepage CSS/JS URLs include modification-time versions.
- Make the mobile menu a labeled button with expanded state and Escape handling. Respect reduced-motion preferences on the homepage.

## Images for you to optimize

All originals are under `public/images-mist/`. No original image files were changed. Sizes below are local original sizes, rounded to KiB. Preserve the aspect ratio and transparency where present. File-size targets are practical starting points; inspect the export for visible artifacts.

**Save new WebP files beside the originals, using the exact names below.** The updated templates automatically use them once deployed. Keep the originals as fallbacks. Do not merely rename a PNG/JPEG to `.webp`; export/convert it.

### Highest priority

| Original | Current size / dimensions | Export names and sizes | Suggested target |
| --- | --- | --- | --- |
| `header.jpg` | 300 KiB; 1575×777 | `header-480.webp` (480×237), `header-800.webp` (800×395), `header-1200.webp` (1200×592), `header-1575.webp` (1575×777) | 25–50 KiB small; 100–180 KiB largest |
| `age-1.jpg` | 811 KiB; 1500×2100 | For **each** age image, export `age-N-320.webp` (320×448), `age-N-640.webp` (640×896), `age-N-960.webp` (960×1344) | 15–30 / 35–70 / 60–110 KiB |
| `age-2.jpg` | 634 KiB; 1500×2100 | Same three sizes; replace N with 2 | Same |
| `age-3.jpg` | 914 KiB; 1500×2100 | Same three sizes; replace N with 3 | Same |
| `age-4.jpg` | 524 KiB; 1500×2100 | Same three sizes; replace N with 4 | Same |
| `age-5.jpg` | 664 KiB; 1500×2100 | Same three sizes; replace N with 5 | Same |
| `age-6.jpg` | 678 KiB; 1500×2100 | Same three sizes; replace N with 6 | Same |
| `age-7.jpg` | 645 KiB; 1500×2100 | Same three sizes; replace N with 7 | Same |
| `if-you-let-me-dance-poster.png` | 2,320 KiB; 2560×1440 | `if-you-let-me-dance-poster.webp`, 1280×720 | 60–120 KiB |
| `partner8.jpg` | 581 KiB; 359×129 | `partner8.webp`, retain 359×129; strip unnecessary metadata | 5–15 KiB |

The seven age images alone total approximately 4.76 MiB. If producing three sizes per card is inconvenient, one `age-N.webp` at 640×896 is also supported. Responsive exports are preferable on larger screens.

### Next priority

| Original | Current size / dimensions | Export | Suggested target |
| --- | --- | --- | --- |
| `know.png` | 350 KiB; 1100×879 | `know.webp`, retain 1100×879 | 70–150 KiB |
| `parents-love-mistys.png` | 287 KiB; 700×1072 | `parents-love-mistys.webp`, retain 700×1072 | 60–120 KiB |
| `logo-mtjgd.png` | 243 KiB; 1000×808 | `logo-mtjgd.webp`, 500×404 | 20–45 KiB |
| `cta-bottom.png` | 215 KiB; 914×562 | `cta-bottom.webp`, retain 914×562 | 50–100 KiB |
| `numbers.png` | 187 KiB; 673×747 | `numbers.webp`, retain 673×747 | 40–80 KiB |
| `logo-safe.png` | 90 KiB; 1606×894 | `logo-safe.webp`, 630×351 | 15–35 KiB |
| `logo-ypad.png` | 77 KiB; 1878×712 | `logo-ypad.webp`, 528×200 | 10–25 KiB |
| `logo-guarantee.png` | 61 KiB; 418×315 | `logo-guarantee.webp`, retain 418×315 | 10–25 KiB |
| `logo-mdu.png` | 47 KiB; 1275×397 | `logo-mdu.webp`, 322×100 | 5–12 KiB |

Retaining the dancer illustration dimensions supports sharper displays; their biggest opportunity is compression and format rather than aggressive resizing. Do not upscale the originals.

### Smaller opportunities

- `review-alex-leuck.png`, `review-jamie-dahl.png`, `review-latesha.png`, `review-mindy-cadd.png`: retain 75×75, export the same basename with `.webp`; aim for 2–5 KiB each (currently 11–14 KiB).
- `partner1.jpeg` (320×219), `partner2.png` (150×133), `partner3.png` (400×67), `partner4.png` (300×67), `partner5.png` (407×106), `partner6.jpg` (300×106), `partner7.png` (282×73), `partner9.png` (800×96): retain original dimensions and export the same basename with `.webp`. Aim for 5–15 KiB each where quality allows. These currently range from 9 to 45 KiB. Their stretching has been addressed in code.

## Validation and remaining work

- All four automated tests pass, including checks for zero homepage database queries, eager/high-priority hero loading, lazy secondary media, image dimensions, and retained animation dependencies on the About page.
- Blade template compilation and JavaScript syntax checks pass.
- Browser checks at desktop and 412-pixel mobile widths confirm the layout, no mobile horizontal page overflow, mobile menu open/Escape close, horizontal class overflow, and on-demand video posters. No errors were logged during the initial local desktop check.
- This is a **local code update**, not a production deployment or a new PageSpeed score. Deploy the changed files and new component/CSS/JS files, refresh Laravel's compiled views, and rerun both PageSpeed reports after your image exports are uploaded.
- Apache cache/compression rules require `mod_expires`/`mod_deflate` and an applicable `.htaccess` configuration. The PHP development server cannot verify those production headers. If production uses Nginx or a CDN, configure equivalent rules there. Existing original image URLs can remain cached for one week; the new WebP filenames avoid stale replacements.
- The video audit still needs accurate timed captions. No transcript/caption source was supplied, and no placeholder captions were invented. The video is also unusually large (56.6 MiB); a smaller properly encoded export would improve playback after a visitor presses Play. Live video delivery should be retested because the baseline reported connection failures for both old URLs, although the file exists locally.
- TinyMCE's existing `no-api-key` configuration remains an admin-editor issue; it no longer loads for ordinary visitors. External chat/advertising scripts can still contribute work or vendor connection errors. Their account-side configuration was not changed.
