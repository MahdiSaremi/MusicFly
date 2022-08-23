@extends('layout.master')

@section('content')

    <div class="row">

        <!-- Aside bar -->
        <aside class="col-12 md:col-3 px-4 py-6">
            <div class="bg-white rounded-st shadow-lg px-4 py-4">
                <section class="flex flex-col">
                    <a href="" class="border-l-4 border-pink-500 my-2 py-1 flex items-center text-gray-600 hover:text-gray-800 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 stroke-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                        داشبورد
                    </a>
                    <a href="" class="border-l-4 border-gray-200 my-2 py-1 flex items-center text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        اعلان ها
                    </a>
                    <a href="" class="border-l-4 border-gray-200 my-2 py-1 flex items-center text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                          </svg>
                        درخواست آهنگ
                    </a>
                    <a href="" class="border-l-4 border-gray-200 my-2 py-1 flex items-center text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        حساب کاربری
                    </a>
                </section>
            </div>
        </aside>
        
        <!-- Main -->
        <main class="col-12 md:col-9">
            @yield('main')
        </main>

    </div>

@endsection
