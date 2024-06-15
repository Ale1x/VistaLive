<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/30e373c1f6.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100">
<div class="min-h-screen">
    <!-- Include the Header Component -->
    @include('components.header')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>
<x-footer />
</body>
</html>
