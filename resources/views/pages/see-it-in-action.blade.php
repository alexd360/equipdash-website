@extends('layouts.app')

@section('seo')
    <x-seo
        title="See It In Action | EquipDash"
        description="Watch how EquipDash helps rental shops and tour operators manage bookings, inventory, customers, and operations from one dashboard."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'See It In Action - EquipDash',
            'description' => 'Watch how EquipDash helps rental shops and tour operators manage bookings, inventory, customers, and operations from one dashboard.',
        ]"
    />
@endsection

@section('content')
    {{-- Hero --}}
    <section class="see-action-hero">
        <div class="container">
            <div class="see-action-hero-inner">
                <h1 class="hero-heading">See It In Action</h1>
                <p class="hero-desc">Watch how EquipDash helps rental shops and tour operators manage their business.</p>
            </div>
        </div>
    </section>

    {{-- Video Gallery --}}
    <section class="see-action-section" x-data="videoGallery()">
        <div class="container">
            <div class="see-action-gallery">
                {{-- Sidebar --}}
                <div class="see-action-sidebar">
                    <template x-for="(category, catIndex) in categories" :key="catIndex">
                        <div class="see-action-category-group">
                            <div class="see-action-category" x-text="category.name"></div>
                            <template x-for="(video, vidIndex) in category.videos" :key="video.id">
                                <div class="see-action-item"
                                     :class="{ 'active': activeVideo === video.id }"
                                     @click="selectVideo(video)">
                                    <div class="see-action-number" x-text="video.number"></div>
                                    <div class="see-action-item-text">
                                        <div class="see-action-item-title" x-text="video.title"></div>
                                        <div class="see-action-item-desc" x-text="video.description"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>

                {{-- Video Player --}}
                <div class="see-action-player">
                    <div class="see-action-player-inner">
                        <img :src="currentPoster" :alt="currentTitle" class="see-action-poster">
                        <div class="see-action-play-btn">
                            <img src="{{ asset('images/icons/icon-play.png') }}" alt="Play">
                        </div>
                        <div class="see-action-player-label">
                            <span x-text="currentTitle"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section
        title="Start your free 21-day trial"
        description="Plans start at $29/mo after your trial. No credit card required, no surprise commissions, and you can cancel anytime."
        buttonText="Start Your Free Trial"
        secondButtonText="Book a Demo"
        secondButtonUrl="/book-a-demo"
    />

    <script>
        function videoGallery() {
            let counter = 1;
            const categories = [
                {
                    name: 'Overview',
                    videos: [
                        { id: counter++, title: 'Dashboard Overview', description: 'See how the main dashboard gives you a snapshot of your business.' },
                        { id: counter++, title: 'Getting Started', description: 'Learn how to set up your account and configure your first location.' },
                    ]
                },
                {
                    name: 'Bookings',
                    videos: [
                        { id: counter++, title: 'Online Booking Widget', description: 'How customers book and pay through your website.' },
                        { id: counter++, title: 'POS & Walk-ins', description: 'Process in-store bookings and walk-in customers in seconds.' },
                        { id: counter++, title: 'Managing Reservations', description: 'View, edit, and manage all your bookings from one place.' },
                    ]
                },
                {
                    name: 'Rentals',
                    videos: [
                        { id: counter++, title: 'Inventory Setup', description: 'Add products, set availability windows, and manage stock levels.' },
                        { id: counter++, title: 'Check-in & Check-out', description: 'Streamline the rental process with barcode scanning and digital signatures.' },
                    ]
                },
                {
                    name: 'Experiences',
                    videos: [
                        { id: counter++, title: 'Creating Experiences', description: 'Build tours and activities with schedules, pricing tiers, and capacity limits.' },
                        { id: counter++, title: 'Guide Assignment', description: 'Assign guides, manage manifests, and track group sizes.' },
                    ]
                },
                {
                    name: 'Customers',
                    videos: [
                        { id: counter++, title: 'Customer Profiles', description: 'View booking history, preferences, and communication logs.' },
                        { id: counter++, title: 'Digital Waivers', description: 'Send and collect waivers before guests arrive.' },
                    ]
                },
                {
                    name: 'Staff',
                    videos: [
                        { id: counter++, title: 'Team Management', description: 'Add staff, set roles and permissions, and track activity.' },
                        { id: counter++, title: 'Staff Rostering', description: 'Build shift schedules and assign staff to bookings or locations.' },
                    ]
                },
                {
                    name: 'Operations',
                    videos: [
                        { id: counter++, title: 'Reports & Insights', description: 'Track revenue, bookings, and performance with real-time reports.' },
                        { id: counter++, title: 'Asset Maintenance', description: 'Schedule maintenance tasks and track equipment condition.' },
                    ]
                },
            ];

            // Add number to each video
            let num = 1;
            categories.forEach(cat => {
                cat.videos.forEach(v => {
                    v.number = num++;
                });
            });

            const firstVideo = categories[0].videos[0];

            return {
                categories,
                activeVideo: firstVideo.id,
                currentTitle: firstVideo.title,
                currentPoster: '{{ asset("images/dashboard-hero.jpeg") }}',
                selectVideo(video) {
                    this.activeVideo = video.id;
                    this.currentTitle = video.title;
                    // Poster stays the same for placeholder — will be swapped when real videos are added
                }
            };
        }
    </script>
@endsection
