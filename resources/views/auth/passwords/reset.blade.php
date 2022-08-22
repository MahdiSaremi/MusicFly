@extends('auth.layout')

@section('main')
    <h1 class="text-2xl mb-1">بازیابی رمز</h1>
    {{-- <p class="text-gray-400 text-sm mb-2">رمز خود را فراموش کرده اید؟ ایمیل خود را وارد کنید تا با کمک آن رمز جدید بسازید</p> --}}
    <hr>
    
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="text"
                name="email"
                id="email"
                class="form-input mt-2 text-left"
                placeholder="email@domain.com"
                value="{{ $email ?? old('email') }}">

            @error('email')
                <p class="text-red-400 text-sm">{{ $error }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="password"
                name="password"
                id="password"
                class="form-input mt-2 text-left"
                placeholder="******">

            @error('password')
                <p class="text-red-400 text-sm">{{ $error }}</p>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password-confirm">تکرار رمز عبور:</label>
            <input type="password"
                name="password_confirmation"
                id="password-confirm"
                class="form-input mt-2 text-left"
                placeholder="******">

            @error('password-confirm')
                <p class="text-red-400 text-sm">{{ $error }}</p>
            @enderror
        </div>

        <div class="text-center text-sm flex flex-col">
            <a href="{{ route('login') }}" class="link">بازگشت به صفحه ورود</a>
        </div>

        <div class="flex justify-center mt-4">
            <button class="btn-primary w-32 mx-1">
                بازیابی رمز عبور
            </button>
        </div>
    </form>
@endsection