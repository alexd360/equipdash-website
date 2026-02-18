@props([
    'title',
    'description',
    'cards' => [],
])

<section class="wwf_how-we-help audience">
    <div class="container">
        <div class="inner-audience">
            <p class="sub-title">HOW WE HELP</p>
            <h2 class="global-title">{{ $title }}</h2>
            <p class="sec-desc">{{ $description }}</p>
            <div class="how-we-help_list">
                @foreach($cards as $card)
                <div class="how-we-help_card">
                    <div class="how-we-help_card-icon">
                        <img src="{{ asset($card['icon']) }}" alt="{{ $card['title'] }}">
                    </div>
                    <h3 class="how-we-help_card-title">{{ $card['title'] }}</h3>
                    <p class="how-we-help_card-desc">{{ $card['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
