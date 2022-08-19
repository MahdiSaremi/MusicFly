<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Music Fly | موزیک فلای')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('head', '')
</head>
<body class="bg-gray-100 min-h-screen @yield('body-class', '')">
    
    <!-- Header navbar -->
    <nav class="bg-white px-2 py-2 flex shadow-md items-center">
        <a href="" class="py-3 mx-4 flex">
            {{-- <img src="{{ asset('images/BeatFly-Small.png') }}" alt="" class=""> --}}
            موزیک فلای
        </a>
        <form action="" method=""
            class="search flex h-full md:mx-4 mx-auto">
                <input type="text" class="" placeholder="دنبال چی میگردی؟">
                <button type="submit" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
        </form>

        <button class="md:hidden mx-4" id="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
        </button>
        <div class="mx-4 text-sm mr-auto flex opacity-0 invisible md:opacity-100 md:visible md:static absolute left-5 top-5 flex-col md:flex-row items-center bg-white md:bg-none rounded-st shadow-lg md:shadow-none py-3 transition-all z-10" id="menu">
            <a class="mx-3 text-gray-500 hover:text-black transition-colors py-3" href="">صفحه اصلی</a>
            <a class="mx-3 text-gray-500 hover:text-black transition-colors py-3" href="">برترین ها</a>
            <a class="mx-3 btn-primary" href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-for-btn" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                ورود/ثبت نام
            </a>
        </div>
        
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-white px-6 py-4 row items-center">
        <div class="col-12 lg:col-6 py-4 px-2 flex flex-col">
            <span class="mb-4 text-pink-600">لینک های سایت</span>
            <a class="font-sm my-1 text-gray-500 hover:text-gray-700 transition-colors" href="#">صفحه اصلی</a>
            <a class="font-sm my-1 text-gray-500 hover:text-gray-700 transition-colors" href="#">برترین ها</a>
        </div>

        <div class="col-12 md:col-6 lg:col-3 py-4 px-2 flex flex-col">
            <span class="mb-4 text-pink-600">درباره ما</span>
            <a class="font-sm my-1 text-gray-500 hover:text-gray-700 transition-colors" href="#">ارتباط با ما</a>
            <a class="font-sm my-1 text-gray-500 hover:text-gray-700 transition-colors" href="#">درباره ما</a>
        </div>

        <div class="col-12 md:col-6 lg:col-3 py-4 px-2 flex flex-col">
            <span class="mb-4 text-pink-600">ویرایش سایت</span>
            <a class="font-sm my-1 text-gray-500 hover:text-gray-700 transition-colors" href="https://github.com/MahdiSaremi/MusicFly">کمک در برنامه نویسی سایت - گیتهاب</a>
        </div>

        <div class="col-12 py-4 px-2 flex flex-col text-center text-sm text-pink-400">
            Copyright © 2022 MusicFly
        </div>
    </footer>

</body>
</html>