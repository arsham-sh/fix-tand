@extends('layouts.app')
@section('content')
    <main class="w-full max-w-xs bg-white rounded-xl p-6 mx-auto">
        <!-- Header -->
        <section class="text-center mb-6">
            <h1 class="text-xl font-DanaBlack text-black">حساب کاربری <span class="text-original-red">Fix</span><span
                    class="text-black">Tand</span></h1>
            <p class="text-gray-600 text-xs mt-1 font-DanaMedium">فرم زیر را برای ساخت اکانت پر کنید</p>
        </section>

        {{-- Display success/error messages --}}
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-50 border border-green-200 rounded-lg">
                <p class="text-green-700 text-xs font-DanaMedium flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    {{ session('success') }}
                </p>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                <p class="text-red-700 text-xs font-DanaMedium flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    {{ session('error') }}
                </p>
            </div>
        @endif

        <!-- Register Form -->
        <form id="registerForm" method="POST" action="{{ route('register.store') }}" class="space-y-4">
            @csrf
            <!-- Name -->
            <div>
                <div class="flex items-center px-3 h-10 w-full text-sm rounded-lg font-DanaMedium bg-gray-100 @error('name') border border-red-500 @enderror">
                    <input type="text" name="name" id="name" placeholder="نام و نام خانوادگی" value="{{ old('name') }}" class="text-gray-700 placeholder:text-gray-400 w-full h-full outline-none bg-transparent text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
                @error('name')
                    <span class="text-xs text-original-red font-DanaMedium mt-1 block text-right">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Username -->
            <div>
                <div class="flex items-center px-3 h-10 w-full text-sm rounded-lg font-DanaMedium bg-gray-100 @error('username') border border-red-500 @enderror">
                    <input type="text" name="username" id="username" placeholder="نام کاربری" value="{{ old('username') }}" class="text-gray-700 placeholder:text-gray-400 w-full h-full outline-none bg-transparent text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                    </svg>
                </div>
                @error('username')
                    <span class="text-xs text-original-red font-DanaMedium mt-1 block text-right">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <div class="flex items-center px-3 h-10 w-full text-sm rounded-lg font-DanaMedium bg-gray-100 @error('number') border border-red-500 @enderror">
                    <input type="text" name="number" id="phone" placeholder="شماره موبایل" value="{{ old('number') }}" class="text-gray-700 placeholder:text-gray-400 w-full h-full outline-none bg-transparent text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-400 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </div>
                @error('number')
                    <span class="text-xs text-original-red font-DanaMedium mt-1 block text-right">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Terms & Submit -->
            <div class="space-y-3">
                <div class="flex justify-center">
                    <a href="./terms.html" class="text-sm text-gray-700 font-DanaBold underline">
                        قوانین و مقررات <span class="text-original-red font-DanaBlack">Fix</span><span class="text-black font-DanaBlack">Tand</span>
                    </a>
                </div>

                <button type="submit"
                    class="h-10 w-full rounded-lg bg-original-red text-white font-DanaBold text-sm cursor-pointer transition hover:bg-red-700">
                    ایجاد حساب
                </button>
            </div>
        </form>

        <!-- Footer -->
        <p class="text-center text-gray-600 text-xs mt-6 font-DanaMedium">
            حساب کاربری داری؟
            <a href="{{ route('login') }}" class="text-original-red font-DanaBold hover:underline mr-1">ورود</a>
        </p>
    </main>
@endsection