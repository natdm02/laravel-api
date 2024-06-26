<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>laravel api</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="/logo-small.png" type="png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/scss/appGuest.scss', 'resources/js/appGuest.js'])
    </head>
    <body>
        @include('guest.partials.header')
        @yield('content')
    </body>
</html>
