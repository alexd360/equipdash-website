@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$listing->title"
        :description="$listing->excerpt ?? 'View this listing in the EquipDash directory.'"
        :ogImage="$listing->getFirstMediaUrl('featured_image') ?: null"
    />
@endsection

@section('content')
    <div class="directory-page">
        <div class="directory-post">
            <div class="container">
                {{-- Breadcrumb --}}
                <x-breadcrumb :items="[
                    ['label' => 'Home', 'url' => url('/')],
                    ['label' => 'Directory', 'url' => route('directory.index')],
                    ['label' => $listing->title],
                ]" />

                {{-- Back Link --}}
                <a href="{{ route('directory.index') }}" class="backtodirectory">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Back to Directory
                </a>

                {{-- Featured Image --}}
                <div class="directory-post-banner">
                    @php
                        $featuredImage = $listing->getFirstMediaUrl('featured_image');
                    @endphp
                    @if($featuredImage)
                        <div class="directory-thumb-group pc">
                            <img class="directory-post-thumb" src="{{ $featuredImage }}" alt="{{ $listing->title }}">
                            @if($listing->category)
                                <span class="directory-post-category">
                                    @if($listing->category_icon)
                                        <img src="{{ $listing->category_icon }}" alt="" style="width:14px;height:14px;">
                                    @endif
                                    {{ $listing->category }}
                                </span>
                            @endif
                        </div>
                    @endif
                </div>

                {{-- Mobile Featured Image --}}
                @if($featuredImage)
                    <div class="directory-thumb-group mb">
                        <img class="directory-post-thumb" src="{{ $featuredImage }}" alt="{{ $listing->title }}">
                        @if($listing->category)
                            <span class="directory-post-category">
                                @if($listing->category_icon)
                                    <img src="{{ $listing->category_icon }}" alt="" style="width:14px;height:14px;">
                                @endif
                                {{ $listing->category }}
                            </span>
                        @endif
                    </div>
                @endif

                {{-- Info Section --}}
                <div class="directory-post-info">
                    <div class="directory-post-info-group">
                        <div class="directory-post-info-left">
                            <h1>{{ $listing->title }}</h1>

                            @if($listing->address)
                                <div class="directory-post-location">
                                    <img src="{{ asset('images/directory/filter-location-icon.svg') }}" alt="Location">
                                    <span>{{ $listing->address }}</span>
                                </div>
                            @endif

                            @if($listing->website)
                                <div class="directory-post-website">
                                    <img src="{{ asset('images/directory/website-icon.svg') }}" alt="Website">
                                    <a href="{{ $listing->website }}" target="_blank" rel="noopener noreferrer">
                                        {{ parse_url($listing->website, PHP_URL_HOST) ?? $listing->website }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if($listing->logo)
                        <div class="directory-post-venture">
                            <img src="{{ $listing->logo }}" alt="{{ $listing->title }} logo">
                        </div>
                    @endif
                </div>

                {{-- Activity Lists --}}
                @if($listing->rentals && count($listing->rentals))
                    <div class="directory-post-activity">
                        <p class="directory-post-activity-title">Rentals Offered</p>
                        <div class="directory-post-activity-list">
                            @foreach($listing->rentals as $rental)
                                <span class="directory-post-activity-item">{{ $rental }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($listing->activities && count($listing->activities))
                    <div class="directory-post-activity">
                        <p class="directory-post-activity-title">Activities Offered</p>
                        <div class="directory-post-activity-list">
                            @foreach($listing->activities as $activity)
                                <span class="directory-post-activity-item">{{ $activity }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Description Content --}}
                @if($listing->description)
                    <article>
                        {!! $listing->description !!}
                    </article>
                @endif
            </div>
        </div>

        {{-- CTA Section --}}
        <x-cta-section
            title="Ready to Transform Your Rental Business?"
            description="Join hundreds of rental providers and experience operators who trust EquipDash to run their business."
            buttonText="Book a Demo"
        />
    </div>
@endsection
