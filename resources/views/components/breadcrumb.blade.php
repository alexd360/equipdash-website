@props([
    'items' => [],
])

<div class="banner__breakcrumb">
    @foreach($items as $index => $item)
        @if($index > 0)
            <span>
                <svg width="8" height="8" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
        @endif
        <a href="{{ $item['url'] ?? '#' }}">
            @if(isset($item['icon']))
                {!! $item['icon'] !!}
            @endif
            <span>{{ $item['label'] }}</span>
        </a>
    @endforeach
</div>
