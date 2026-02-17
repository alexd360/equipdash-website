@extends('layouts.app')

@section('seo')
    <x-seo :title="$page->title" :description="$page->meta_description ?? 'Discover who EquipDash is built for.'" />
@endsection

@section('content')
    <section class="section-padding">
        <div class="container-main text-center">
            <h1>{{ $page->title }}</h1>
            <p class="mt-4 text-body-lg text-gray-600">Discover who EquipDash is built for.</p>
            <p class="mt-8 text-gray-400 text-sm">Who we are for page will be built in Phase 3</p>
        </div>
    </section>
@endsection
