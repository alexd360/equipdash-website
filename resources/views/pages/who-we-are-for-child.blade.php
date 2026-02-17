@extends('layouts.app')

@section('seo')
    <x-seo :title="$page->title" :description="$page->meta_description ?? 'Learn how EquipDash serves your specific industry.'" />
@endsection

@section('content')
    <section class="section-padding">
        <div class="container-main text-center">
            <h1>{{ $page->title }}</h1>
            <p class="mt-4 text-body-lg text-gray-600">Learn how EquipDash serves your specific industry.</p>
            <p class="mt-8 text-gray-400 text-sm">Who we are for child page will be built in Phase 3</p>
        </div>
    </section>
@endsection
