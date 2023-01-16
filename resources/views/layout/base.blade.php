<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         @vite('resources/css/app.css')

         @yield('styles')
    </head>
    <body class="antialiased">

        @include('front._partials.header')

        @yield('page')

        @include('front._partials.footer')

        <!-- Scripts -->
        @yield('scripts')
    </body>
</html>
