@extends('layouts.app')
@section('content')
<main class="w-full max-w-sm bg-white rounded-2xl p-8 md:p-10">
    <!-- Header -->
    <section class="text-center mb-10">
        <h1 class="text-2xl font-DanaBlack text-black">وارد شدن به <span
                class="font-DanaBlack text-original-red">Fix</span><span class="font-DanaBlack text-black">Tand</span>
        </h1>
        <p class="text-gray-700 text-sm mt-2 font-DanaBold">لطفا شماره موبایل خود را جهت دریافت کد تایید وارد نمایید.</p>
    </section>

    <!-- Display Success/Error Messages -->
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg text-sm font-DanaBold">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg text-sm font-DanaBold">
            {{ session('error') }}
        </div>
    @endif

    <!-- Login Form -->
    <form id="loginForm" method="POST" action="{{ route('send.otp') }}" class="space-y-6">
        @csrf
        <!-- Username -->
        <div class="flex flex-col space-y-1">
            <div class="flex items-center justify-between px-3 h-11 w-full text-sm rounded-lg font-DanaMediume bg-gray-100">
                <input id="username" type="text" name="username" placeholder="نام کاربری"  value="{{ old('username') }}"
                    class="text-gray-700 placeholder:text-gray-400 w-full h-full outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            @error('username')
                <span class="text-xs text-original-red font-DanaBold mt-2 block">{{ $message }}</span>
            @else
                <span id="usernameError" class="text-xs text-original-red font-DanaBold mt-2 block hidden"></span>
            @enderror
        </div>
        <!-- /username -->

        <!-- Phone -->
        <div class="flex flex-col space-y-1">
            <div class="flex items-center justify-between px-3 h-11 w-full text-sm rounded-lg font-DanaMediume bg-gray-100">
                <input id="phone" type="text" name="number" placeholder="شماره موبایل"
                    class="text-gray-700 placeholder:text-gray-400 w-full h-full outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
            </div>
            @error('number')
                <span class="text-xs text-original-red font-DanaBold mt-2 block">{{ $message }}</span>
            @else
                <span id="phoneError" class="text-xs text-original-red font-DanaBold mt-2 block hidden"></span>
            @enderror
        </div>
        <!-- /Phone -->

        <!-- Terms -->
        <div class="flex items-center space-x-2 space-x-reverse gap-2">
            <a href="./terms.html" class="text-sm text-gray-700 font-DanaBold underline">
                قوانین و مقررات <span class="text-original-red font-DanaBlack">Fix</span><span class="text-black font-DanaBlack">Tand</span>
            </a>
        </div>
        <!-- /Terms -->
        <!-- Submit Button -->
        <button type="submit"
            class="h-11 w-full rounded-lg bg-original-red text-white font-DanaBold cursor-pointer transition">
            ورود به حساب
        </button>
    </form>
    <!-- /Login Form -->
    <!-- Footer -->
    <p class="text-center text-gray-700 text-sm mt-8 font-DanaMediume">
        حساب کاربری نداری؟
        <a href="{{ route('register') }}" class="text-original-red font-DanaBold hover:underline">ایجاد حساب</a>
    </p>
</main>
@endsection