@extends('layouts.app')

@section('seo')
    <x-seo title="Page Not Found | EquipDash" description="The page you are looking for could not be found." />
@endsection

@section('content')
    <section style="padding:180px 0 120px;text-align:center;">
        <div class="container">
            <p style="font-size:120px;font-weight:800;color:#F7581F;line-height:1;margin-bottom:10px;">404</p>
            <h1 class="hero-heading" style="font-size:40px;line-height:48px;margin-bottom:16px;">Page Not Found</h1>
            <p class="hero-desc" style="max-width:500px;margin:0 auto 40px;">Sorry, the page you're looking for doesn't exist or has been moved.</p>
            <a href="{{ route('home') }}" class="global-btn">Back to Home</a>
        </div>
    </section>
@endsection
