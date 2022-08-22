@extends('layout.default')

@section('main')

    <section class="pt-8 pb-12 px-4">
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-pink-500 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <h1 class="text-2xl">دسته بندی #پاپ</h1>
            <p class="text-gray-500 text-sm mr-2">( 468 مورد یافت شد )</p>
        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-gray-600 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
            </svg>
            <span class="text-lg">فیلتر</span>
        </div>
        <div class="row mt-2">
            <div class="col-6 md:col-3 p-1">
                <div class="px-4 py-2 bg-gray-200 rounded-st">
                    <div class="text-md mb-2">ایرانی/خارجی</div>

                    <select name="country" class="w-full mr-1 py-1">
                        <option value="">----</option>
                        <option value="iran">ایرانی</option>
                        <option value="other">خارجی</option>
                    </select>
                </div>
            </div>
            <div class="col-6 md:col-3 p-1">
                <div class="px-4 py-2 bg-gray-200 rounded-st">
                    <div class="text-md mb-2">خواننده</div>

                    <select name="singer" class="w-full mr-1 py-1">
                        <option value="">----</option>
                        <option value="saab">علیرضا ظلیسچی</option>
                        <option value="opel">مهراد جم</option>
                        <option value="audi">عمو پورنگ</option>
                    </select>
                </div>
            </div>
            <div class="col-6 md:col-3 p-1">
                <div class="px-4 py-2 bg-gray-200 rounded-st">
                    <div class="text-md mb-2">سبک</div>

                    <select name="genre" class="w-full mr-1 py-1">
                        <option value="">----</option>
                        <option value="pop">پاپ</option>
                        <option value="rap">رپ</option>
                        <option value="hiphop">هیپ هاپ</option>
                    </select>
                </div>
            </div>
            <div class="col-6 md:col-3 p-1">
                <div class="px-4 py-2 flex flex-col h-full">
                    <div class="text-md mb-2 text-gray-600">اعمال فیلتر</div>
                    <button class="btn-secondary text-sm mt-auto w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-for-btn" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        اعمال فیلتر
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-8 pb-12 px-4 row">
        <x-music-inline
            title="قاف"
            subtitle="علیرضا طلیسچی"
            url="#"
            :image="asset('cover/gsgsfsd.jpg')"
            :audio="asset('files/Alireza Talischi - Ghaf (128).mp3')"
        />
        <x-music-inline
            title="قاف"
            subtitle="علیرضا طلیسچی"
            url="#"
            :image="asset('cover/gsgsfsd.jpg')"
            :audio="asset('files/Alireza Talischi - Ghaf (128).mp3')"
        />
        <x-music-inline
            title="قاف"
            subtitle="علیرضا طلیسچی"
            url="#"
            :image="asset('cover/gsgsfsd.jpg')"
            :audio="asset('files/Alireza Talischi - Ghaf (128).mp3')"
        />
    </section>
    
@endsection