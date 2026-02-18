@props([
    'title',
    'description',
    'threeColumn' => [],
    'twoColumn' => [],
])

<section class="wwf_industries">
    <div class="container">
        <div class="inner-audience">
            <p class="sub-title">INDUSTRIES</p>
            <h2 class="global-title">{{ $title }}</h2>
            <p class="sec-desc">{{ $description }}</p>

            @if(count($threeColumn))
            <div class="industries_list three-column">
                @foreach($threeColumn as $item)
                <div class="industries_card">
                    <a href="{{ $item['url'] }}" class="industries_card_link" aria-label="{{ $item['title'] }}"></a>
                    <div class="industries_content">
                        <h3 class="industries_title">{{ $item['title'] }}</h3>
                        <p class="industries_desc">{{ $item['description'] }}</p>
                    </div>
                    <div class="industries_thumb-wrapper">
                        <img class="industries_thumb" src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            @if(count($twoColumn))
            <div class="industries_list two-column">
                @foreach($twoColumn as $item)
                <div class="industries_card">
                    <a href="{{ $item['url'] }}" class="industries_card_link" aria-label="{{ $item['title'] }}"></a>
                    <div class="industries_content">
                        <h3 class="industries_title">{{ $item['title'] }}</h3>
                        <p class="industries_desc">{{ $item['description'] }}</p>
                    </div>
                    <div class="industries_thumb-wrapper">
                        <img class="industries_thumb" src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
