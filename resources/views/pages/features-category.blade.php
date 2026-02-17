@extends('layouts.app')

@section('seo')
    <x-seo :title="$page->title" :description="$page->meta_description ?? 'Explore EquipDash features for equipment rental businesses.'" />
@endsection

@section('content')
    <section class="section-padding">
        <div class="container-main text-center">
            <h1>{{ $page->title }}</h1>
            <p class="mt-4 text-body-lg text-gray-600">Explore the features in this category.</p>
            <p class="mt-8 text-gray-400 text-sm">Features category page will be built in Phase 3</p>
        </div>
    </section>
@endsection
