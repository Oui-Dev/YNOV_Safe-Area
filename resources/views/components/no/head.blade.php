<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Safe Area @yield('title')</title>
<meta name="description" content="Safe Area, votre application entreprise SAAS sans compromis, pour gérer la sécurité de l'environnement de vos collaborateurs, en respect avec vos données">
<meta name="author" content="Maxime LARROZE-FRANCEZAT (Chef de projet), Kévin BLAISE (Développeur superviseur), Léo CORRE (Développeur), Petru OLTEAN (Développeur), Evan MARCEL (Développeur), Jules BESSON (Développeur)">
<link rel="shortcut icon" href="{{Vite::asset('resources/images/logo.webp')}}">

<meta property="og:title" content="Safe Area @yield('title')">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.safearea.ml">
<meta property="og:description" content="Safe Area, votre application entreprise SAAS sans compromis, pour gérer la sécurité de l'environnement de vos collaborateurs, en respect avec vos données">
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta property="og:image" content="{{Vite::asset('resources/images/logo.webp')}}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="safearea.ml">
<meta name="twitter:title" content="Safe Area @yield('title')">
<meta name="twitter:description" content="Safe Area, votre application entreprise SAAS sans compromis, pour gérer la sécurité de l'environnement de vos collaborateurs, en respect avec vos données">
<meta name="twitter:creator" content="@SafeAreaOff">
<meta name="twitter:image" content="{{Vite::asset('resources/images/logo.webp')}}">

<!-- Fonts -->
<link rel="preconnect" href="{{Vite::asset('resources/scss/app.scss')}}">
<link rel="preconnect" href="{{Vite::asset('resources/js/app.js')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<link rel="alternate" href="http://safearea.ml/" hreflang="x-default" />
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<script src="https://flowbite.com/docs/flowbite.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QKQ1BXLE78"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QKQ1BXLE78');
</script>

<!-- Matomo --> <script> var _paq = window._paq = window._paq || []; /* tracker methods like "setCustomDimension" should be called before "trackPageView" */ _paq.push(["setDocumentTitle", document.domain + "/" + document.title]); _paq.push(["setCookieDomain", "*.safearea.ml"]); _paq.push(["setDomains", ["*.safearea.ml"]]); _paq.push(['trackPageView']); _paq.push(['enableLinkTracking']); (function() { var u="//matomo.safearea.ml/"; _paq.push(['setTrackerUrl', u+'matomo.php']); _paq.push(['setSiteId', '1']); var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s); })(); </script> <noscript><p><img src="//matomo.safearea.ml/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript> <!-- End Matomo Code -->

<noscript>
<img referrerpolicy="no-referrer-when-downgrade" src="http://matomo.safearea.ml/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
<!-- End Matomo -->
</noscript>

<!-- Scripts -->
@vite(['resources/scss/app.scss', 'resources/js/app.js'])