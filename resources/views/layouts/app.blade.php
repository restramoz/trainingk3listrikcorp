<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white text-dark-mahogany antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title')@yield('title') — @endif{{ config('app.name', 'Training Alat Berat') }}</title>
    <meta name="description" content="@yield('meta_description', 'Portal resmi Training Alat Berat. Informasi sertifikasi SIO operator alat berat, pembinaan K3, dan jasa konsultansi SMK3 PP 50/2012.')">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Meta -->
    <meta property="og:title" content="@hasSection('title')@yield('title') — @endif{{ config('app.name', 'Training Alat Berat') }}">
    <meta property="og:description" content="@yield('meta_description', 'Layanan sertifikasi SIO operator alat berat, pembinaan kompetensi K3, dan jasa konsultansi Sistem Manajemen K3 (SMK3) di Indonesia.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#0C0C0C">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @hasSection('robots')
    <meta name="robots" content="@yield('robots')">
    @endif

    @stack('schema')
    @stack('styles')
</head>
<body class="min-h-full flex flex-col bg-white text-dark-mahogany antialiased selection:bg-safety-orange selection:text-industry-black">
    <!-- Accessible Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 z-50 bg-safety-orange text-industry-black font-bold px-4 py-2 rounded-md shadow-lg outline-none ring-2 ring-industry-black">
        Lewati ke konten utama
    </a>

    <!-- Site Header -->
    <x-header />

    <!-- Main Content Landmark -->
    <main id="main-content" class="flex-grow focus:outline-none" tabindex="-1">
        @if (isset($slot))
            {{ $slot }}
        @else
            @yield('content')
        @endif
    </main>

    <!-- Site Footer -->
    <x-footer />

    <!-- Floating WhatsApp CTA -->
    <x-wa-float :message="View::hasSection('wa_message') ? View::getSection('wa_message') : null" />
</body>
</html>