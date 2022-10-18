<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safe Area</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.safearea.ml">
    <meta property="og:description" content="">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link
        rel="shortcut icon"
        href="{{Vite::asset('resources/images/safe_area_logo.png')}}"
        type="image/x-icon"
    />
    <!-- Scripts -->

    @vite(['resources/scss/landing/app.scss', 'resources/js/app.js', 'resources/js/landing/alpine.min.js'])
</head>
<body class="overflow-x-hidden antialiased">

