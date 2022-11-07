<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.no.head')
    </head>
    <body class="antialiased">
        @yield('body')
    </body>
</html>
