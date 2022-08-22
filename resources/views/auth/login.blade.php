@extends('auth.layout')

@section('main')
    <h1 class="text-2xl mb-1">ورود</h1>
    <p class="text-gray-400 text-sm mb-2">وارد حساب خود شوید تا از برخی امکانات سایت بهره مند شوید</p>
    <hr>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="text"
                name="email"
                id="email"
                class="form-input mt-2 text-left"
                placeholder="email@domain.com"
                value="{{ old('email') }}">
                
            @error('email')
                <p class="text-red-400 text-sm">{{ $error }}</p>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="text"
                name="password"
                id="password"
                class="form-input mt-2 text-left"
                placeholder="*******">
                
            @error('password')
                <p class="text-red-400 text-sm">{{ $error }}</p>
            @enderror
        </div>
        
        <div class="text-center text-sm flex flex-col">
            <a href="{{ route('password.request') }}" class="link">رمز عبور را فراموش کرده اید؟ بازیابی کنید</a>
            <a href="{{ route('register') }}" class="link mt-6">حساب کاربری ندارید؟ ثبت نام کنید</a>
        </div>
        
        <div class="flex justify-center mt-4">
            <a class="btn-secondary w-32 mx-1" href="{{ route('register') }}">
                ثبت نام
            </a>
            <button class="btn-primary w-32 mx-1">
                ورود
            </button>
        </div>
    </form>
@endsection