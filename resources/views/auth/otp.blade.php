@extends('layouts.app')
@section('content')
<main class="otp-container w-full max-w-sm bg-white rounded-2xl p-8 md:p-10" data-digits="5">
    <section class="text-center mb-8">
        <h1 class="text-2xl font-DanaBlack text-black">تایید شماره موبایل</h1>
        <p class="text-gray-700 text-sm mt-2 font-DanaBold">کد تایید برای 09114146057 ارسال شد.</p>
    </section>

    <form class="otp-form space-y-6">
        <div class="flex items-center justify-between rtl:flex-row-reverse">
            <!-- ورودی‌ها به صورت داینامیک ساخته می‌شن -->
        </div>

        <!-- Terms -->
        <div class="flex items-center space-x-2 space-x-reverse gap-2">
            <a href="/terms" class="text-sm text-gray-700 font-DanaBold underline">قوانین و مقررات <span
                    class="text-original-red font-DanaBlack">Fix</span><span
                    class="text-black font-DanaBlack">Tand</span></a>
        </div>

        <button type="submit"
            class="otp-submit w-full h-11 rounded-lg bg-original-red text-white font-DanaBold transition cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed">
            تایید
        </button>
    </form>

    <div class="text-center text-gray-700 text-sm mt-8 font-DanaMediume">
        کد را دریافت نکردید؟
        <a href="#" class="text-original-red font-DanaBold hover:underline">ارسال مجدد</a>
    </div>
</main>
@endsection