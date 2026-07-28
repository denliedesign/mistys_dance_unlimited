<style>
    #cookie-consent {
        position: fixed;
        right: 20px;
        bottom: 20px;
        left: 20px;
        z-index: 2147483000;
        display: none;
        max-width: 760px;
        margin-left: auto;
        padding: 18px;
        color: #242424;
        background: rgba(255, 255, 255, 0.98);
        border: 1px solid rgba(0, 140, 192, 0.18);
        border-radius: 8px;
        box-shadow: 0 12px 34px rgba(0, 0, 0, 0.18);
        font-family: Arial, sans-serif;
    }

    #cookie-consent.cookie-consent-visible {
        display: block;
    }

    #cookie-consent p {
        margin: 0 0 12px;
        font-size: 15px;
        line-height: 1.45;
    }

    #cookie-consent a {
        color: #008CC0;
        text-decoration: underline;
    }

    .cookie-consent-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .cookie-consent-button {
        min-width: 110px;
        padding: 10px 16px;
        border: 1px solid #008CC0;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 700;
        line-height: 1;
        cursor: pointer;
    }

    .cookie-consent-accept {
        color: #fff;
        background: #008CC0;
    }

    .cookie-consent-decline {
        color: #008CC0;
        background: #fff;
    }

    @media (max-width: 600px) {
        #cookie-consent {
            right: 12px;
            bottom: 12px;
            left: 12px;
        }

        .cookie-consent-button {
            flex: 1 1 100%;
        }
    }
</style>

<div id="cookie-consent" role="dialog" aria-live="polite" aria-label="Cookie consent">
    <p>
        We use cookies and similar tools to understand site traffic, improve your experience, and support our advertising.
        You can accept these cookies or decline non-essential cookies. Learn more in our
        <a href="/privacy-policy">Privacy Policy</a>.
    </p>
    <div class="cookie-consent-actions">
        <button type="button" class="cookie-consent-button cookie-consent-accept" id="cookie-consent-accept">Accept</button>
        <button type="button" class="cookie-consent-button cookie-consent-decline" id="cookie-consent-decline">Decline</button>
    </div>
</div>

<script>
    (function () {
        var consentKey = 'mduCookieConsent';
        var banner = document.getElementById('cookie-consent');
        var acceptButton = document.getElementById('cookie-consent-accept');
        var declineButton = document.getElementById('cookie-consent-decline');

        function getConsent() {
            try {
                var storedConsent = localStorage.getItem(consentKey);
                if (storedConsent) {
                    return storedConsent;
                }
            } catch (error) {
            }

            var cookieMatch = document.cookie.match(new RegExp('(^| )' + consentKey + '=([^;]+)'));
            return cookieMatch ? cookieMatch[2] : null;
        }

        function setConsent(status) {
            try {
                localStorage.setItem(consentKey, status);
            } catch (error) {
                document.cookie = consentKey + '=' + status + '; path=/; max-age=31536000; SameSite=Lax';
            }
        }

        function updateGoogleConsent(status) {
            if (typeof gtag !== 'function') {
                return;
            }

            gtag('consent', 'update', {
                'ad_storage': status === 'accepted' ? 'granted' : 'denied',
                'analytics_storage': status === 'accepted' ? 'granted' : 'denied',
                'ad_user_data': status === 'accepted' ? 'granted' : 'denied',
                'ad_personalization': status === 'accepted' ? 'granted' : 'denied'
            });
        }

        function saveConsent(status) {
            setConsent(status);
            updateGoogleConsent(status);
            banner.classList.remove('cookie-consent-visible');
        }

        if (!getConsent()) {
            banner.classList.add('cookie-consent-visible');
        }

        acceptButton.addEventListener('click', function () {
            saveConsent('accepted');
        });

        declineButton.addEventListener('click', function () {
            saveConsent('declined');
        });
    })();
</script>
