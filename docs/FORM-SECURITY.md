# Form protection and CAPTCHA setup

The shared protection covers the site's local POST/PATCH/PUT/DELETE forms, including trial inquiries, Frozen Friends, account/password forms, the quiz, and content-management forms. Logout remains exempt from CAPTCHA so users can always sign out; Laravel CSRF protection still applies. Google Forms embeds and external registration links are controlled by their providers and cannot be protected by this site's server.

## Already implemented

- Hidden honeypot, encrypted session-bound form token, two-second minimum completion time, two-hour expiry, and atomic single-use submission tokens.
- Shared IP rate limit: 10 attempts/minute for guests, 60 for signed-in users, including rejected attempts. Existing CSRF protection stays enabled.
- Turnstile verification happens on the server before mail or other form effects. Enabled verification rejects missing keys, missing/invalid/expired tokens, provider outages, and unexpected hostname/action responses.
- Trial and Frozen Friends field type/length validation and birthdates that cannot be in the future.
- Content-management writes require the existing editor policy, and level imports require the existing administrator policy. Public content remains readable.
- October, November, and December community columns; September records are preserved.

## Activate Cloudflare Turnstile

Cloudflare setup completed on October 4, 2026: widget **Misty's Dance Unlimited — Website Forms**, Managed mode, hostnames `mistysdance.com` and `www.mistysdance.com`, pre-clearance disabled. The keys are available in the owner's Cloudflare Turnstile dashboard. Server installation and deployment are still pending; reuse this widget rather than creating another.

1. In the [Cloudflare dashboard](https://dash.cloudflare.com/), open **Turnstile → Add widget**. Choose **Managed** and allow `mistysdance.com` and `www.mistysdance.com`. Cloudflare does not need to host the site's DNS.
2. Put the generated values in the production server's environment settings or `.env` file. Keep the secret on the server, out of Git and chat:

   ```dotenv
   TURNSTILE_ENABLED=true
   TURNSTILE_SITE_KEY=your_public_site_key
   TURNSTILE_SECRET_KEY=your_private_secret_key
   TURNSTILE_HOSTNAMES=mistysdance.com,www.mistysdance.com
   ```

3. Deploy this code with those settings, then run `php artisan config:cache` and `php artisan view:clear`. If a content-security policy is set at the host, allow `https://challenges.cloudflare.com` for scripts and frames. Exclude form pages from shared HTML caching because their tokens are tied to each visitor's session.
4. Verify the widget loads on `/trialclass`, `/login`, `/register`, `/password/reset`, `/frozen-friends`, and an editor form. With the site owner's test details, submit one trial and confirm one email and the thank-you message. Confirm a missing CAPTCHA cannot send mail. Check the mobile layout and CAPTCHA retry after expiration.
5. Production must use a persistent cache (file cache on one server, or a shared Redis/database cache across servers). If hosted behind a reverse proxy, configure only the actual trusted proxies so IP limits use the visitor IP rather than a shared proxy address.

`TURNSTILE_ENABLED` defaults to `false` until real keys are installed; honeypot, timing, replay protection, CSRF, and rate limiting still run. Once enabled, missing or broken CAPTCHA configuration fails closed. Cloudflare has generated the widget keys, but they have not yet been installed on the server and the code has not been deployed.

Provider reference: [Turnstile server validation](https://developers.cloudflare.com/turnstile/get-started/server-side-validation/).

## Conversion tracking

After a verified trial passes validation and mail is sent, the thank-you page emits the data-layer event `mdu_trial_submitted` with `form_name: trial_class`. No personal information is included. The server consumes that success flag when rendering the page, so refreshing does not emit it again.

In Google Tag Manager / the ad account, use **Custom Event: `mdu_trial_submitted`** for the trial conversion. Replace submit-button clicks, generic form-submit triggers, or homepage-view triggers that count attempts as conversions. Avoid keeping both old and new triggers active. Existing cookie consent settings remain in place. Tag Manager and ad-account settings have not been changed from this repository; historical spam conversions are not removed.

## External forms

The alumni page embeds Google Forms. Other pages link to Google Forms for parties, absence reporting, lockers, performance requests, and other programs, as well as third-party registrations. Review each provider's available anti-abuse settings separately. If a custom CAPTCHA and honeypot are required on those forms too, migrate them to locally handled forms with their current fields, recipients, and storage workflow preserved; wrapping the existing external URL with a CAPTCHA would not protect its submission endpoint.

## Verification

Run `php vendor/phpunit/phpunit/phpunit`. Tests cover accepted trials, rejected bots, timing, session binding, replay prevention, field validation, CAPTCHA failure/outage/hostname/action checks, rate limits, public endpoint coverage, editor authorization, form-template coverage, and community month filtering. Provider responses and mail are faked; a production CAPTCHA smoke test is still required after activation.
