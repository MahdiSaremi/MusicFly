{{-- image, title, subtitle, url --}}
<div class="swiper-slide music-swiper-box">
    <img src="{{ $image }}" alt="">
    <h3 class="text-lg">{{ $title }}</h3>
    @isset($subtitle)
    <p class="text-gray-600 text-sm">{{ $subtitle }}</p>
    @endisset

    <a href="{{ $url }}" class="btn-secondary mt-auto">بیشتر</a>
</div>