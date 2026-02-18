@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$listing->title"
        :description="$listing->excerpt ?? 'View this listing in the EquipDash directory.'"
        :ogImage="$listing->getFirstMediaUrl('featured_image') ?: null"
    />
@endsection

@section('content')
    <div class="directory-post directory-page">
        <section class="directory-post-header">
            <div class="container">
                <div class="directory-post-banner">
                    {{-- Desktop Featured Image --}}
                    <div class="directory-thumb-group pc">
                        @php
                            $featuredImage = $listing->getFirstMediaUrl('featured_image') ?: asset('images/directory/default-listing.jpg');
                        @endphp
                        <div class="directory-post-thumb">
                            <img src="{{ $featuredImage }}" alt="{{ $listing->title }}" />
                        </div>
                        @if($listing->taxonomies && $listing->taxonomies->where('type', 'experience')->count())
                            <span class="directory-post-category">
                                <img src="{{ asset('images/directory/experiences-tours.svg') }}" alt="" />
                                <span>EXPERIENCES & TOURS</span>
                            </span>
                        @endif
                        @if($listing->taxonomies && $listing->taxonomies->where('type', 'rental')->count())
                            <span class="directory-post-category">
                                <img src="{{ asset('images/directory/rentals.svg') }}" alt="" />
                                <span>Rentals</span>
                            </span>
                        @endif
                        @if($listing->category && !($listing->taxonomies && $listing->taxonomies->count()))
                            <span class="directory-post-category">
                                <span>{{ $listing->category }}</span>
                            </span>
                        @endif
                    </div>

                    {{-- Info Group --}}
                    <div class="directory-post-info-group">
                        <div class="directory-post-info">
                            <div class="directory-post-info-left">
                                <h1>{{ $listing->title }}</h1>
                                @if($listing->address)
                                    @php
                                        $addressParts = array_map('trim', explode(',', $listing->address));
                                        if (count($addressParts) >= 3) {
                                            $stateZip = $addressParts[count($addressParts) - 1];
                                            $state = preg_replace('/\s*\d{5}(-\d{4})?$/', '', $stateZip);
                                            $city = $addressParts[count($addressParts) - 2];
                                            $displayAddress = $city . ', ' . $state;
                                        } else {
                                            $displayAddress = $listing->address;
                                        }
                                    @endphp
                                    <div class="directory-post-location">
                                        <img src="{{ asset('images/directory/filter-location-icon.svg') }}" alt="" />
                                        <span>{{ $displayAddress }}</span>
                                    </div>
                                @endif
                                @if($listing->website)
                                    @php
                                        $url = $listing->website;
                                        $parsed = parse_url($url);
                                        if (!isset($parsed['scheme'])) {
                                            $url = 'https://' . $url;
                                        }
                                    @endphp
                                    <div class="directory-post-website">
                                        <img src="{{ asset('images/directory/website.svg') }}" alt="" />
                                        <a href="{{ $url }}" target="_blank">{{ $listing->website }}</a>
                                    </div>
                                @endif
                            </div>
                            @if($listing->logo)
                                <div class="directory-post-venture">
                                    <img src="{{ $listing->logo }}" alt="" />
                                </div>
                            @endif
                        </div>

                        {{-- Mobile Featured Image --}}
                        <div class="directory-thumb-group mb">
                            <div class="directory-post-thumb">
                                <img src="{{ $featuredImage }}" alt="{{ $listing->title }}" />
                            </div>
                            @if($listing->taxonomies && $listing->taxonomies->where('type', 'experience')->count())
                                <span class="directory-post-category">
                                    <img src="{{ asset('images/directory/experiences-tours.svg') }}" alt="" />
                                    <span>EXPERIENCES & TOURS</span>
                                </span>
                            @endif
                            @if($listing->taxonomies && $listing->taxonomies->where('type', 'rental')->count())
                                <span class="directory-post-category">
                                    <img src="{{ asset('images/directory/rentals.svg') }}" alt="" />
                                    <span>Rentals</span>
                                </span>
                            @endif
                            @if($listing->category && !($listing->taxonomies && $listing->taxonomies->count()))
                                <span class="directory-post-category">
                                    <span>{{ $listing->category }}</span>
                                </span>
                            @endif
                        </div>

                        {{-- Rentals Offered --}}
                        @if($listing->rentals && $listing->rentals->count())
                            <div class="directory-post-activity">
                                <div class="directory-post-activity-title">Rentals Offered</div>
                                <div class="directory-post-activity-list">
                                    @foreach($listing->rentals as $rental)
                                        <div class="directory-post-activity-item">{{ $rental->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Activities Offered --}}
                        @if($listing->experiences && $listing->experiences->count())
                            <div class="directory-post-activity">
                                <div class="directory-post-activity-title">Activities Offered</div>
                                <div class="directory-post-activity-list">
                                    @foreach($listing->experiences as $experience)
                                        <div class="directory-post-activity-item">{{ $experience->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        {{-- Description Content --}}
        @if($listing->description)
            <article>
                <div class="container">
                    <a href="{{ route('directory.index') }}" class="backtodirectory">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M11.6028 8.79466L7.81335 4.96444C7.36582 4.51209 6.6335 4.51209 6.18597 4.96444L2.39648 8.79466" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back to directory
                    </a>
                    <h2>About {{ $listing->title }}</h2>
                    {!! $listing->description !!}
                </div>
            </article>
        @endif

        {{-- CTA Section --}}
        <section class="ready olbooking-ready">
            <div class="overlay-left"></div>
            <div class="container">
                <div class="inner-ready">
                    <div class="ready-content">
                        <h2 class="global-title">Ready to lead? Let's get started!</h2>
                        <p class="sec-desc">Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide.</p>
                        <div class="gr-btn">
                            <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                            <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                        </div>
                        <div class="banner-content">
                            <p class="credit">No credit card required, cancel anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-right"></div>
        </section>
    </div>
@endsection
