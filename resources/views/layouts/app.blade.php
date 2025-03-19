<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="description" content="Découvrez nos services et articles de blog sur le développement web et le marketing digital.">
        <meta name="keywords" content="SEO, Laravel, développement web, marketing digital">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="Découvrez nos services et nos derniers articles sur le web et le SEO.">
        <meta property="og:image" content="{{ asset('images/preview.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
           <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
