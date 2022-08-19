@extends('layout.master')

@section('body-class', 'flex flex-col')

@section('content')

    <main class="flex-items-center justify-center m-auto w-full md:w-auto">
        <div class="px-6 py-4 md:bg-white md:rounded-st md:w-[500px] md:shadow-lg w-full">
            @yield('main')
        </div>
    </main>

@endsection
