@props([
    'badge' => 'FREQUENTLY ASKED QUESTION',
    'title' => 'What would you like to know about EquipDash?',
    'description' => 'Find answers to your questions below. Contact us if you couldn\'t find what you\'re looking for.',
    'contactUrl' => null,
    'contactText' => 'Contact Us',
    'faqs' => [],
])

<section class="faq">
    <div class="container">
        <div class="inner-faq">
            <div class="faq-left">
                <p class="sub-title">{{ $badge }}</p>
                <h2 class="global-title">{{ $title }}</h2>
                <p class="desc">{{ $description }}</p>
                <a href="{{ $contactUrl ?? route('contact-us') }}" class="global-btn contact-btn">{{ $contactText }}</a>
            </div>
            <div class="faq-right">
                @foreach($faqs as $index => $faq)
                <div class="faq-item{{ $index === 0 ? ' active' : '' }}">
                    <div class="faq-header">
                        <h3>{{ $faq['question'] }}</h3>
                        <div class="icon-show">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 21V7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="icon-close">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content"{!! $index !== 0 ? ' style="display:none"' : '' !!}>
                        <p>{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
