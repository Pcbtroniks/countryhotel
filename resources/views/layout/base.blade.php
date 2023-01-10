<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->

        <!-- Styles -->
         @vite('resources/css/app.css')

         @yield('styles')
    </head>
    <body class="antialiased">

        @yield('content')

        <!-- Scripts -->
        @yield('scripts')
    </body>
</html>
