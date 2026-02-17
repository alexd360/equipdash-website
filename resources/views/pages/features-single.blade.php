@extends('layouts.app')

@section('seo')
    <x-seo :title="$page->title" :description="$page->meta_description ?? 'Learn more about this EquipDash feature.'" />
@endsection

@section('content')
    <section class="section-padding">
        <div class="container-main text-center">
            <h1>{{ $page->title }}</h1>
            <p class="mt-4 text-body-lg text-gray-600">Feature details and information.</p>
            <p class="mt-8 text-gray-400 text-sm">Features single page will be built in Phase 3</p>
        </div>
    </section>
@endsection
