@extends('layout.default')

@section('head')
@endsection

@section('main')

    <!-- News -->
    <section class="pt-8 pb-12 px-4">
        <h1 class="text-2xl mb-4">جدیدترین ها</h1>

        <x-music-swiper>
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-swiper>
    </section>

    <!-- Best -->
    <section class="pt-8 pb-12 px-4 bg-gray-200">
        <h1 class="text-2xl mb-4">پر طرفدار ترین ها</h1>
        
        <x-music-swiper>
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-swiper-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-swiper>
    </section>

    <!-- Singers -->
    <section class="pt-8 pb-12 px-4">
        <h1 class="text-2xl mb-4">خواننده ها</h1>
        
        <x-music-swiper>
            <x-music-swiper-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-swiper-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-swiper-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-swiper>
    </section>


    <x-load-music-swiper/>

@endsection