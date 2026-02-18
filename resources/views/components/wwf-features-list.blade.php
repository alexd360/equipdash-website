@props([
    'sectionClass' => '',
    'title' => 'All-in-one solution that runs your entire business',
    'description' => 'Unlock the full power of EquipDash features designed for equipment rental success.',
    'items' => [],
])

<section class="audience wwf-ski_features {{ $sectionClass }}">
    <div class="container">
        <div class="inner-audience">
            <p class="sub-title">FEATURES</p>
            <h2 class="global-title wwf-ski_features-title">{{ $title }}</h2>
            <p class="sec-desc txt-default">{{ $description }}</p>

            <div class="features_list">
                @foreach($items as $item)
                <div class="features_item">
                    <div class="features_item-thumb">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="features_item-content">
                        <h3 class="features_item-title">{{ $item['title'] }}</h3>
                        <div class="features_item-desc txt-default">
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
