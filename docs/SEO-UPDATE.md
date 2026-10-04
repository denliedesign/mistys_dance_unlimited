# SEO update

## Changes

- Narrowed `/dance` and `/team` exclusions to exact paths and removed exclusions for public class, summer, and blog pages. Robots rules are crawl controls, not access controls.
- Rebuilt the public sitemap with 26 canonical marketing URLs, excluding old COVID updates, administrative routes, and old city-keyword variants. To maintain it, edit `config/seo.php` and run `php artisan seo:sitemap`. No fabricated last-modified dates are generated.
- Added page-specific canonical and social metadata to the four layouts used by these pages.
- Changed homepage section headings and paragraph labels. At the owner’s request, removed the added homepage H1 and the new program/community exploration sections. Desktop and mobile visual variants remain in place.
- Reworked the five community pages with visit information, directions, existing photos, class links, and trial calls to action. Removed the keyword lists and the broken Tomah link from the dance team page.
- Added hip hop, tap/jazz, preschool, and occasional adult-session guides. Improved the existing ballet, tumbling/acro, Guys Only, summer, and birthday-party pages.
- Added homepage LocalBusiness/EducationalOrganization JSON-LD with both teaching locations, shared contact information, service areas, and confirmed Onalaska office hours. Holmen is a Place inside the Boys & Girls Club, not a separate office with the Club's operating hours.
- Added both addresses and expandable office hours to the current footers; copyright years update automatically. Holmen has a matching location icon and inherits the address text color without an underline. Removed the two explanatory footer notes at the owner’s request.

## Content sources and limits

The owner confirmed Holmen classes meet at the Holmen Boys & Girls Club, 600 Holmen Dr N, Holmen, WI 54636. All phone and office inquiries are handled at Onalaska. Confirmed contact hours (Central): Monday/Thursday noon–9 PM; Tuesday/Wednesday 9 AM–9 PM; Friday 3–6 PM; Saturday 9 AM–1 PM; Sunday closed. Adult sessions occur occasionally throughout the year.

Program descriptions use the checked-in 2026–2027 program guide, especially page 12 (`public/images/7-20-26-fall-schedule-12.jpg`). Existing photos were reused. No hometowns were assigned to existing testimonials, and no school affiliations, fixed travel times, or parking instructions were invented. Approved town-specific reviews and additional local details can improve these pages further. Existing ballet production claims were preserved, not independently reverified.

Technical references: [Google robots.txt rules](https://developers.google.com/crawling/docs/robots-txt/robots-txt-spec) and [Schema.org LocalBusiness](https://schema.org/LocalBusiness).

## Release and Search Console

These are source changes; they do not publish themselves. Deploy through the site's normal release process, including `public/robots.txt`, `public/sitemap.xml`, views, routes, and config. Refresh any production config/route/view caches through the normal deployment process.

After deployment:

1. Check the live robots file, sitemap, homepage, and new service URLs.
2. In the verified Search Console property, submit `https://mistysdance.com/sitemap.xml`.
3. Inspect `https://mistysdance.com/dance-la-crosse`, run **Test live URL**, and confirm crawling is allowed. Request indexing after the test passes. Repeat for important program pages as appropriate.
4. Monitor indexing and search performance. Crawl access and improved content do not guarantee indexing or rankings.

Town-specific testimonials still need the owner's approved text and confirmed hometowns. No Search Console submission or live deployment was performed as part of this local implementation.
