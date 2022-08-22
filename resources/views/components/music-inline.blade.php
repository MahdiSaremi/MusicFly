{{-- image, title, subtitle, url, audio --}}
<a href="#" target="_blank" class="w-full my-4">
    <div class="row bg-white shadow-lg w-full rounded-st">
        <div class="col-12 sm:col-4 md:col-3">
            <img src="{{ $image }}" alt="" class="rounded-t-st sm:rounded-r-st w-full">
        </div>
        <div class="col-12 sm:col-8 md:col-9 px-6 py-3 text-center flex flex-col">
            <h3 class="text-2xl">{{ $title }}</h3>
            <p class="text-gray-600 mb-6">{{ $subtitle }}</p>

            <audio controls class="w-full mt-auto">
                <source src="{{ $audio }}">
            </audio>
        </div>
    </div>
</a>