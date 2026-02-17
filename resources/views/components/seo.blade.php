@props([
    'title' => null,
    'description' => null,
    'ogImage' => null,
    'canonicalUrl' => null,
    'robots' => 'index, follow',
    'structuredData' => null,
    'type' => 'website',
])

@php
    $seoTitle = $title ? (str_contains($title, 'EquipDash') ? $title : $title . ' | EquipDash') : 'EquipDash - Equipment Rental Software';
    $seoDescription = $description ?? 'EquipDash helps equipment rental providers and experience operators manage bookings, inventory, and customers.';
    $seoOgImage = $ogImage ?? asset('images/og-default.png');
    $seoCanonical = $canonicalUrl ?? url()->current();
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $seoCanonical }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:image" content="{{ $seoOgImage }}">
<meta property="og:url" content="{{ $seoCanonical }}">
<meta property="og:type" content="{{ $type }}">
<meta property="og:site_name" content="EquipDash">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoOgImage }}">

{{-- Structured Data --}}
@if($structuredData)
<script type="application/ld+json">
{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif
