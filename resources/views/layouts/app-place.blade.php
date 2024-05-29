<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Dance Classes | Onalaska, La Crosse, WI">
    <meta property="og:description" content="More than just great dancing! At MDU, we offer one of the most complete dance instruction programs in the Midwest and work with students of all ages and abilities.">
    <meta property="og:image" content="https://mistysdance.com/images/mdu-home.jpg">
    <meta property="og:url" content="https://mistysdance.com/index.php">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="@yield('description', 'From your child’s first class to their graduation performance. MDU has a class for everyone!')">

    <title>@yield('title', 'Misty\'s Dance Unlimited | Onalaska, Holmen, & La Crosse, WI')</title>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>


    <!-- Styles -->
    <link rel="stylesheet" href="/css/style-place.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/script-lava.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <!-- other -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#30393e">
    <meta name="msapplication-TileColor" content="#30393e">
    <meta name="theme-color" content="#30393e">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F3Q8GM09JM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F3Q8GM09JM');
    </script>

    <meta name="google-site-verification" content="pEj8FQ1at3uraMLV77FgIB99LibvKtfCd2E3Jr8B2Hw" />
    <img src="https://servedby.ipromote.com/ad/?src=pixel_cid&nid=2482&cid=T7VJY1WDF8F&cat=11902" width="1" height="1" border="0" alt="" style="position: absolute; visibility: hidden;">

</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-success mb-0" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif

@yield('content')

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
