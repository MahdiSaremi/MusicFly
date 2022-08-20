@extends('auth.layout')

@section('main')
    <h1 class="text-2xl mb-1">ثبت نام</h1>
    <p class="text-gray-400 text-sm mb-2">در سایت ثبت نام کنید تا از برخی امکانات سایت بهره مند شوید</p>
    <hr>
    <form action="">
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
            <label for="name">نام شما:</label>
            <input type="text"
                name="name"
                id="name"
                class="form-input mt-2"
                placeholder="نام شما"
                value="{{ old('name') }}">
                
            @error('name')
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
        
        <div class="form-group">
            <label for="passwordConfirm">تکرار رمز عبور:</label>
            <input type="text"
                name="password_confirmation"
                id="passwordConfirm"
                class="form-input mt-2 text-left"
                placeholder="*******">
        </div>
        
        <div class="text-center text-sm flex flex-col">
            <a href="#" class="link">رمز عبور را فراموش کرده اید؟ بازیابی کنید</a>
            <a href="#" class="link mt-6">حساب کاربری دارید؟ وارد شوید</a>
        </div>
        
        <div class="flex justify-center mt-4">
            <a class="btn-secondary w-32 mx-1" href="#">
                ورود
            </a>
            <button class="btn-primary w-32 mx-1">
                ثبت نام
            </button>
        </div>
    </form>
@endsection