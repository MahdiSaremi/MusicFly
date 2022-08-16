@extends('layout.master')

@section('content')

    <div class="row">

        <!-- Main -->
        <main class="col-12 md:col-9">
            @yield('main')
        </main>

        <!-- Aside bar -->
        <aside class="col-12 md:col-3 bg-gray-300 px-4 py-6">
            <section class="flex flex-col">
                <p class="text-pink-500 mb-2">آهنگ های جدید</p>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">عشق یعنی تو - حسن کچل</a>
                </span>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">بهشت - بابا طاهر</a>
                </span>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">باعث - پویا مظفریان</a>
                </span>
            </section>

            <hr class="border-gray-400 my-6">

            <section class="flex flex-col">
                <p class="text-pink-500 mb-2">خواننده های برتر</p>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">حسن کچل</a>
                </span>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">بابا طاهر</a>
                </span>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 stroke-gray-600 fill-pink-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                    <a href="#" class="text-gray-600 hover:text-gray-700 text-sm mb-1">پوریا مظفریان</a>
                </span>
            </section>
        </aside>
        
    </div>

@endsection