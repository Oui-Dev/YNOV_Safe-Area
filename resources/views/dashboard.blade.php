<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Safe Area</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Matomo -->
        <script data-cookiecategory="analytics"> var _paq = window._paq = window._paq || []; /* tracker methods like "setCustomDimension" should be called before "trackPageView" */ _paq.push(["setDocumentTitle", document.domain + "/" + document.title]); _paq.push(["setCookieDomain", "*.safearea.ml"]); _paq.push(["setDomains", ["*.safearea.ml"]]); _paq.push(['trackPageView']); _paq.push(['enableLinkTracking']); (function() { var u="//matomo.safearea.ml/"; _paq.push(['setTrackerUrl', u+'matomo.php']); _paq.push(['setSiteId', '1']); var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s); })(); </script> <noscript><p><img src="//matomo.safearea.ml/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript> <!-- End Matomo Code -->

        <noscript>
            <img referrerpolicy="no-referrer-when-downgrade" src="http://matomo.safearea.ml/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
        </noscript>
        <!-- End Matomo -->

        <!-- Scripts -->
        @routes
        @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/js/inertia.js'])
        @inertiaHead
    </head>
    <body class="overflow-x-hidden antialiased">
        @inertia
    </body>
</html>
