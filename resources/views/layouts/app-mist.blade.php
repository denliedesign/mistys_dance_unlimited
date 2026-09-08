@php($isHomepage = request()->is('/'))
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Dance Classes | Onalaska, La Crosse, WI">
    <meta property="og:description" content="More than just great dancing! At MDU, we offer one of the most complete dance instruction programs in the Midwest and work with students of all ages and abilities.">
    <meta property="og:image" content="https://mistysdance.com/images/schoolyr1.jpg">
    <meta property="og:url" content="https://mistysdance.com/index.php">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="@yield('description', 'From your child’s first class to their graduation performance. MDU has a class for everyone!')">


    @unless($isHomepage)
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @endunless

    <title>@yield('title', 'Misty\'s Dance Unlimited | Onalaska, WI')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#30393e">
    <meta name="msapplication-TileColor" content="#30393e">
    <meta name="theme-color" content="#30393e">
    <meta name="google-site-verification" content="pEj8FQ1at3uraMLV77FgIB99LibvKtfCd2E3Jr8B2Hw" />

    @include('cookie-consent-head')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F3Q8GM09JM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F3Q8GM09JM');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NLRPC4K3');</script>
    <!-- End Google Tag Manager -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @if($isHomepage)
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    @else
    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
    @endif
    <link rel="stylesheet" href="/css/style-mist.css?v={{ filemtime(public_path('css/style-mist.css')) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Scripts -->
    @if($isHomepage)
        <link rel="stylesheet" href="/css/home-performance.css?v={{ filemtime(public_path('css/home-performance.css')) }}">
        <script defer src="/js/home-navigation.js?v={{ filemtime(public_path('js/home-navigation.js')) }}"></script>
    @else
        <script type="module" src="/js/script-all-mist.js?v={{ filemtime(public_path('js/script-all-mist.js')) }}"></script>
        <script type="module" src="/js/script-welcome-mist.js?v={{ filemtime(public_path('js/script-welcome-mist.js')) }}"></script>
    @endif
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="{{ $isHomepage ? 'home-page' : '' }}">
    <img src="https://servedby.ipromote.com/ad/?src=pixel_cid&nid=2482&cid=T7VJY1WDF8F&cat=11902" width="1" height="1" border="0" alt="" style="position: absolute; visibility: hidden;"/>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLRPC4K3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@if(session()->has('message'))
    <div class="alert alert-success mb-0" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif
@include('_nav-mist')
@yield('content')
@include('_footer-mist')
@include('cookie-consent')

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@unless($isHomepage)
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
<!-- The following plugin is only available for Club GSAP members.-->
<script src="/js/InertiaPlugin.min.js"></script>
@endunless
<script>
    // Start chat after the page has loaded so it does not compete with the hero.
    window.addEventListener('load', function () {
        var loadChat = function () {
            var script = document.createElement('script');
            script.src = 'https://code.tidio.co/m9pttpymc43qy4pzxkvap1bfkrsjkzbw.js';
            script.async = true;
            document.body.appendChild(script);
        };
        if ('requestIdleCallback' in window) requestIdleCallback(loadChat, { timeout: 3000 });
        else setTimeout(loadChat, 0);
    }, { once: true });
</script>

@include('editor-mist')

</body>
</html>
