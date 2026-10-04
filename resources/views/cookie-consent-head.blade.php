<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('consent', 'default', {
        'ad_storage': 'denied',
        'analytics_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied'
    });

    try {
        var mduCookieConsent = localStorage.getItem('mduCookieConsent');
    } catch (error) {
        var mduCookieConsent = null;
    }

    if (mduCookieConsent === 'accepted') {
        gtag('consent', 'update', {
            'ad_storage': 'granted',
            'analytics_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted'
        });
    }
</script>
@if(session()->pull('verified_trial_submission', false))
    <script>
        // Conversion tags should listen to this server-confirmed event only.
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: 'mdu_trial_submitted', form_name: 'trial_class' });
    </script>
@endif
