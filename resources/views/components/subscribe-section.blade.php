@props([
    'title' => 'Subscribe to our newsletter',
])

<section class="subscribe">
    <div class="container">
        <div class="subscribe__inner">
            <h2 class="subscribe__heading">{{ $title }}</h2>
            <form class="subscribe__input-box" action="/forms/newsletter" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your email address" required>
                <button type="submit" class="subscribe__btn global-btn">Subscribe</button>
            </form>
        </div>
    </div>
</section>
