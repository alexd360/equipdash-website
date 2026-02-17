@props([
    'badge' => null,
    'title',
    'description' => null,
    'align' => 'center',
    'maxWidth' => null,
])

<div class="{{ $align === 'center' ? 'text-center' : '' }}">
    @if($badge)
        <span class="sub-title" style="{{ $align === 'left' ? 'margin-left:0;' : '' }}">{{ $badge }}</span>
    @endif
    <h2 class="global-title" style="{{ $align === 'left' ? 'text-align:left;' : '' }}{{ $maxWidth ? 'max-width:'.$maxWidth.';margin-left:auto;margin-right:auto;' : '' }}">{{ $title }}</h2>
    @if($description)
        <p class="sec-desc" style="{{ $align === 'left' ? 'text-align:left;' : '' }}">{{ $description }}</p>
    @endif
</div>
