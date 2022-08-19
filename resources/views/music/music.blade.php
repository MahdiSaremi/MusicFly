@extends('layout.default')

@section('head')
    <script src="{{ asset('js/music.js') }}" defer></script>
@endsection

@section('main')

    <section class="pt-8 pb-12 px-4 row">
        <div class="col-12 lg:col-4">
            <img src="{{ asset('cover/gsgsfsd.jpg') }}" alt="" class="w-full rounded-st">
        </div>
        <div class="col-12 lg:col-8 py-4 px-8 text-center lg:text-right flex flex-col h-auto">
            <h1 class="text-4xl mb-2">قاف</h1>
            <p class="text-gray-700">علیرضا طلیسچی</p>
            <audio controls class="w-full mt-6 lg:mt-auto">
                <source src="{{ asset('files/Alireza Talischi - Ghaf (128).mp3') }}" type="audio/mpeg">
            </audio>
            <div class="flex flex-wrap justify-center mt-2">
                <button class="btn-secondary w-48 mt-2 mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-for-btn" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                      </svg>
                    آهنگ های مشابه
                </button>
                <button class="btn-primary w-48 mt-2 mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-for-btn" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    دانلود
                </button>
            </div>
        </div>
    </section>
    
    <section class="pt-8 pb-12 px-4 text-center">
        <h2 class="text-2xl mb-4">متن آهنگ</h2>
        <div class="text-gray-800">
            <p>دوری و من دیگه ته دنیام</p>
            <p>قلبت نوک قله قافه</p>
            <p>من که تو زندگیم هیشکی نیست</p>
            <p>چه دروغی دارم بگم آخه</p>
            <p>این همه دوری نه واسه تو خوبه نه من</p>
            <p class="break-p">---------------------</p>
            <p>طرف تو بارون نمیاد</p>
            <p>نمیشی دلتنگ که زیاد</p>
            <p>میدونی چند وقته دلم</p>
            <p>تو رو می خواد؟</p>
        </div>
    </section>

    <section class="pt-8 pb-12 px-4 text-center">
        <h2 class="text-xl mb-4">به این آهنگ امتیاز دهید</h2>
        <div class="score">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 score-star fill" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 score-star fill" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 score-star fill" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 score-star" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 score-star" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
        </div>
        <p class="text-gray-600">امتیاز کل: 4.1 از 245 رای</p>
    </section>

@endsection