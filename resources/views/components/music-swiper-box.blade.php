{{-- image, title, subtitle, url --}}
<a class="block swiper-slide music-swiper-box" href="{{ $url }}">
    <img src="{{ $image }}" alt="">
    <h3 class="text-lg">{{ $title }}</h3>
    @isset($subtitle)
    <p class="text-gray-600 text-sm">{{ $subtitle }}</p>
    @endisset

    <button class="btn-secondary mt-auto">بیشتر</button>
</a>