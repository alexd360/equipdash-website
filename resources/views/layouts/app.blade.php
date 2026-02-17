<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('seo')
        @yield('seo')
    @else
        <title>{{ $title ?? 'EquipDash - Equipment Rental Software' }}</title>
        <meta name="description" content="{{ $description ?? 'EquipDash helps equipment rental providers and experience operators manage bookings, inventory, and customers.' }}">
    @endif

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Preload critical fonts --}}
    <link rel="preload" href="{{ Vite::asset('resources/fonts/BRCandor-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ Vite::asset('resources/fonts/BRCandor-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ Vite::asset('resources/fonts/BRCandor-SemiBold.woff2') }}" as="font" type="font/woff2" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('styles')
</head>
<body class="min-h-screen bg-white">
    {{-- Header --}}
    @include('layouts.partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    @livewireScripts
    @stack('scripts')
</body>
</html>
