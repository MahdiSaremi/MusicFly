@extends('layout.master')

@section('body-class', 'flex flex-col')

@section('content')

    <main class="flex-items-center justify-center m-auto w-full lg:w-auto py-4">
        <div class="px-6 py-4 lg:bg-white lg:rounded-st lg:w-[500px] lg:shadow-lg w-full">
            @yield('main')
        </div>
    </main>

@endsection
