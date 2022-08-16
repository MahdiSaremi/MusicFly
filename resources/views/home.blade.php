@extends('layout.default')

@section('head')
@endsection

@section('main')

    <!-- News -->
    <section class="pt-8 pb-12 px-4">
        <h1 class="text-2xl mb-4">جدیدترین ها</h1>

        <x-music-scroll>
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-scroll>
    </section>

    <!-- Best -->
    <section class="pt-8 pb-12 px-4 bg-gray-200">
        <h1 class="text-2xl mb-4">پر طرفدار ترین ها</h1>
        
        <x-music-scroll>
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-scroll-box
                title="عمو زنجیر باف"
                subtitle="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-scroll>
    </section>

    <!-- Singers -->
    <section class="pt-8 pb-12 px-4">
        <h1 class="text-2xl mb-4">خواننده ها</h1>
        
        <x-music-scroll>
            <x-music-scroll-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
                
            <x-music-scroll-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
            
            <x-music-scroll-box
                title="عمو پورنگ"
                url="#"
                :image="asset('cover/Evan-Band-Binazire-Eshgh.jpg')"
            />
        </x-music-scroll>
    </section>

@endsection