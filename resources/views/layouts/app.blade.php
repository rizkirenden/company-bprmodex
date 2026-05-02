<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Landing Page')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Landing page profesional untuk bisnis Anda')">
    <meta name="keywords" content="@yield('meta_keywords', 'landing page, bisnis, profesional')">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- Vite / CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-['Inter'] antialiased overflow-x-hidden">
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    @stack('scripts')
</body>

</html>
