@extends($page->layout ?? 'layouts.app')

@section('seo')
    <x-seo
        :title="$page->title"
        :description="$page->meta_description ?? 'EquipDash — the modern platform for equipment rental businesses.'"
        :ogImage="$page->og_image ?? null"
    />
@endsection

@section('content')
    {{-- Custom Blade Template --}}
    @if($page->template_type === 'custom' && $page->custom_blade_view && view()->exists($page->custom_blade_view))
        @include($page->custom_blade_view, ['page' => $page])

    {{-- Block-Based Template --}}
    @elseif($page->template_type === 'block_based' && $page->blocks)
        @foreach($page->blocks as $block)
            @switch($block['type'] ?? '')

                {{-- Hero Block --}}
                @case('hero')
                    <section class="banner" style="{{ $block['background_image'] ?? false ? 'background-image:url(' . asset($block['background_image']) . ');background-size:cover;background-position:center;' : '' }}{{ $block['background_color'] ?? false ? 'background-color:' . $block['background_color'] . ';' : '' }}">
                        <div class="container">
                            <div class="inner-banner" style="text-align:{{ $block['align'] ?? 'center' }};">
                                @if(isset($block['badge']))
                                    <span class="sub-title">{{ $block['badge'] }}</span>
                                @endif
                                <div class="banner-content">
                                    <h1 class="hero-heading" style="{{ ($block['text_color'] ?? false) ? 'color:' . $block['text_color'] . ';' : '' }}">
                                        {{ $block['title'] ?? $page->title }}
                                    </h1>
                                    @if(isset($block['description']))
                                        <p class="hero-desc" style="{{ ($block['text_color'] ?? false) ? 'color:' . $block['text_color'] . ';' : '' }}">
                                            {{ $block['description'] }}
                                        </p>
                                    @endif
                                    @if(isset($block['button_text']))
                                        <div class="banner-btn" style="margin-top:30px;">
                                            <a href="{{ $block['button_url'] ?? route('book-a-demo') }}" class="global-btn">
                                                {{ $block['button_text'] }}
                                            </a>
                                            @if(isset($block['secondary_button_text']))
                                                <a href="{{ $block['secondary_button_url'] ?? '#' }}" class="global-btn-white">
                                                    {{ $block['secondary_button_text'] }}
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                @if(isset($block['image']))
                                    <div class="banner-thumb" style="margin-top:40px;">
                                        <img src="{{ asset($block['image']) }}" alt="{{ $block['title'] ?? '' }}">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                    @break

                {{-- Features Block --}}
                @case('features')
                    <section class="features" style="padding:100px 0;">
                        <div class="container">
                            <div class="inner-features">
                                @if(isset($block['badge']))
                                    <p class="sub-title">{{ $block['badge'] }}</p>
                                @endif
                                @if(isset($block['title']))
                                    <h2 class="global-title">{{ $block['title'] }}</h2>
                                @endif
                                @if(isset($block['description']))
                                    <p class="sec-desc">{{ $block['description'] }}</p>
                                @endif

                                @if(isset($block['items']) && is_array($block['items']))
                                    <div style="display:grid;grid-template-columns:repeat({{ $block['columns'] ?? 3 }}, 1fr);gap:30px;margin-top:60px;">
                                        @foreach($block['items'] as $item)
                                            <div style="background:#F8F9FB;border:1px solid #CDD2E4;border-radius:20px;padding:40px 30px;">
                                                @if(isset($item['icon']))
                                                    <div style="margin-bottom:20px;">
                                                        <img src="{{ asset($item['icon']) }}" alt="" style="width:48px;height:48px;">
                                                    </div>
                                                @endif
                                                @if(isset($item['title']))
                                                    <h3 style="font-size:22px;font-weight:700;line-height:28px;margin:0 0 12px;">{{ $item['title'] }}</h3>
                                                @endif
                                                @if(isset($item['description']))
                                                    <p style="font-size:16px;line-height:26px;color:#828B9C;margin:0;">{{ $item['description'] }}</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                    @break

                {{-- Image + Text Block --}}
                @case('image_text')
                    <section style="padding:100px 0;">
                        <div class="container">
                            <div style="display:flex;align-items:center;gap:60px;flex-direction:{{ ($block['image_position'] ?? 'left') === 'right' ? 'row-reverse' : 'row' }};">
                                @if(isset($block['image']))
                                    <div style="flex:1;">
                                        <img src="{{ asset($block['image']) }}" alt="{{ $block['title'] ?? '' }}" style="border-radius:20px;width:100%;">
                                    </div>
                                @endif
                                <div style="flex:1;">
                                    @if(isset($block['badge']))
                                        <span class="sub-title" style="margin-left:0;">{{ $block['badge'] }}</span>
                                    @endif
                                    @if(isset($block['title']))
                                        <h2 class="global-title" style="text-align:left;margin-bottom:16px;">{{ $block['title'] }}</h2>
                                    @endif
                                    @if(isset($block['description']))
                                        <p class="sec-desc" style="text-align:left;">{{ $block['description'] }}</p>
                                    @endif
                                    @if(isset($block['button_text']))
                                        <a href="{{ $block['button_url'] ?? '#' }}" class="global-btn" style="margin-top:20px;">
                                            {{ $block['button_text'] }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                {{-- CTA Block --}}
                @case('cta')
                    <x-cta-section
                        :badge="$block['badge'] ?? 'GET STARTED'"
                        :title="$block['title'] ?? 'Ready to Transform Your Rental Business?'"
                        :description="$block['description'] ?? 'Join hundreds of rental providers and experience operators who trust EquipDash.'"
                        :buttonText="$block['button_text'] ?? 'Book a Demo'"
                        :buttonUrl="$block['button_url'] ?? null"
                    />
                    @break

                {{-- FAQ Block --}}
                @case('faq')
                    <x-faq-section
                        :badge="$block['badge'] ?? 'FAQ'"
                        :title="$block['title'] ?? 'Frequently Asked Questions'"
                        :description="$block['description'] ?? 'Have more questions? We are here to help.'"
                        :faqs="$block['items'] ?? []"
                    />
                    @break

                {{-- Form Block --}}
                @case('form')
                    <section style="padding:100px 0;background:{{ $block['background_color'] ?? '#F8F9FB' }};">
                        <div class="container">
                            <div style="max-width:700px;margin:0 auto;">
                                @if(isset($block['title']))
                                    <h2 class="global-title" style="margin-bottom:16px;">{{ $block['title'] }}</h2>
                                @endif
                                @if(isset($block['description']))
                                    <p class="sec-desc" style="margin-bottom:40px;">{{ $block['description'] }}</p>
                                @endif

                                <div class="global-form">
                                    <form action="{{ $block['action_url'] ?? '/forms/contact' }}" method="POST">
                                        @csrf
                                        @if(isset($block['fields']) && is_array($block['fields']))
                                            @foreach($block['fields'] as $field)
                                                <div class="form_item{{ ($field['required'] ?? false) ? ' required' : '' }}" style="margin-bottom:20px;">
                                                    <label for="field-{{ $loop->index }}">{{ $field['label'] ?? '' }}</label>
                                                    @if(($field['type'] ?? 'text') === 'textarea')
                                                        <textarea
                                                            id="field-{{ $loop->index }}"
                                                            name="{{ $field['name'] ?? 'field_' . $loop->index }}"
                                                            placeholder="{{ $field['placeholder'] ?? '' }}"
                                                            rows="4"
                                                            {{ ($field['required'] ?? false) ? 'required' : '' }}
                                                            style="width:100%;border:1px solid #CDD2E4;border-radius:12px;padding:14px 16px;font-family:'BR Candor';font-size:16px;resize:vertical;"
                                                        ></textarea>
                                                    @elseif(($field['type'] ?? 'text') === 'select')
                                                        <select
                                                            id="field-{{ $loop->index }}"
                                                            name="{{ $field['name'] ?? 'field_' . $loop->index }}"
                                                            {{ ($field['required'] ?? false) ? 'required' : '' }}
                                                            style="width:100%;border:1px solid #CDD2E4;border-radius:12px;padding:14px 16px;font-family:'BR Candor';font-size:16px;background:#fff;"
                                                        >
                                                            <option value="">{{ $field['placeholder'] ?? 'Select...' }}</option>
                                                            @foreach(($field['options'] ?? []) as $option)
                                                                <option value="{{ $option }}">{{ $option }}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        <input
                                                            type="{{ $field['type'] ?? 'text' }}"
                                                            id="field-{{ $loop->index }}"
                                                            name="{{ $field['name'] ?? 'field_' . $loop->index }}"
                                                            placeholder="{{ $field['placeholder'] ?? '' }}"
                                                            {{ ($field['required'] ?? false) ? 'required' : '' }}
                                                            style="width:100%;border:1px solid #CDD2E4;border-radius:12px;padding:14px 16px;font-family:'BR Candor';font-size:16px;"
                                                        >
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif

                                        <button type="submit" class="global-btn" style="width:100%;border:none;cursor:pointer;margin-top:10px;">
                                            {{ $block['button_text'] ?? 'Submit' }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                {{-- Custom HTML Block --}}
                @case('custom_html')
                    {!! $block['html'] ?? '' !!}
                    @break

                @default
                    {{-- Unknown block type: {{ $block['type'] ?? 'none' }} --}}
                    @break

            @endswitch
        @endforeach

    {{-- Fallback: Display page title if no template matches --}}
    @else
        <section style="padding:120px 0 80px;text-align:center;">
            <div class="container">
                <h1 class="hero-heading">{{ $page->title }}</h1>
                @if($page->meta_description)
                    <p class="hero-desc" style="margin-top:20px;">{{ $page->meta_description }}</p>
                @endif
            </div>
        </section>
    @endif
@endsection
