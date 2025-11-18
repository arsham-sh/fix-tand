@extends('layouts.app')
@section('content')
    <svg class="hidden">
        <symbol id="phone" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
        </symbol>
        <symbol id="clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="bars" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </symbol>
        <symbol id="x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </symbol>
        <symbol id="arrow-left" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
        </symbol>
        <symbol id="search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </symbol>
    </svg>

    <!-- HEADER -->
    {{-- @extends('partials.header') --}}
    <!-- END HEADER -->

    <main class="max-w-4xl mx-auto p-6 font-DanaMediume">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-DanaBlack text-black mb-2">قوانین و مقررات <span
                    class="text-original-red font-DanaBlack">Fix</span><span class="text-black font-DanaBlack">Tand</span>
            </h1>
            <p class="text-sm text-gray-700">آخرین بروزرسانی: آبان ۱۴۰۴</p>
            <p class="text-sm text-gray-700 mt-2">
                مطالعه‌ی این قوانین به شما کمک می‌کند تا تجربه‌ای امن، سریع و شفاف از خرید در فروشگاه موبایل و لوازم جانبی
                FixTand داشته باشید.
            </p>
        </header>

        <!-- Section 1 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg mb-3 font-DanaBold">۱. تعاریف</h2>
            <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                <li><strong>FixTand</strong>: فروشگاه اینترنتی عرضه‌کننده‌ی موبایل، هدفون، هندزفری، هارد اکسترنال و سایر
                    محصولات دیجیتال.</li>
                <li><strong>کاربر / مشتری</strong>: هر شخصی که از وب‌سایت بازدید کرده یا خرید انجام دهد.</li>
                <li><strong>محصول</strong>: کالای فیزیکی قابل ارسال که در وب‌سایت عرضه می‌شود.</li>
            </ul>
        </section>

        <!-- Section 2 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۲. پذیرش قوانین</h2>
            <p class="text-sm text-gray-700">
                ثبت سفارش در FixTand به منزله‌ی پذیرش کامل قوانین حاضر است. چنانچه با هر بخشی از این شرایط موافق نیستید،
                لطفاً از ثبت سفارش خودداری نمایید.
            </p>
        </section>

        <!-- Section 3 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۳. نحوه ثبت سفارش و پرداخت</h2>
            <ol class="list-decimal list-inside text-sm text-gray-700 space-y-1">
                <li>مشتری پس از انتخاب کالا و افزودن به سبد خرید، فرآیند پرداخت را تکمیل می‌کند.</li>
                <li>سفارش پس از تایید پرداخت در سیستم، پردازش و آماده ارسال می‌شود.</li>
                <li>در صورت بروز مغایرت در موجودی یا اطلاعات کالا، FixTand مجاز است سفارش را لغو یا اصلاح کرده و مشتری را
                    مطلع نماید.</li>
            </ol>
        </section>

        <!-- Section 4 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۴. قیمت‌ها و مالیات</h2>
            <p class="text-sm text-gray-700">
                قیمت‌ها در سایت به‌صورت شفاف و به‌روز درج شده‌اند. مالیات بر ارزش افزوده و هزینه ارسال در فاکتور نهایی لحاظ
                می‌گردد.
            </p>
        </section>

        <!-- Section 5 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۵. ارسال و تحویل کالا</h2>
            <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                <li>ارسال سفارش‌ها از طریق پست یا پیک (بسته به شهر مقصد) انجام می‌شود.</li>
                <li>مدت زمان تحویل بر اساس مقصد و شرایط محصول تعیین و در صفحه محصول درج شده است.</li>
                <li>در صورت تأخیر غیرمنتظره، FixTand مشتری را مطلع خواهد کرد.</li>
                <li>مشتری موظف است هنگام تحویل، سلامت ظاهری بسته را بررسی و در صورت وجود آسیب، مراتب را در حضور مأمور ارسال
                    ثبت نماید.</li>
            </ul>
        </section>

        <!-- Section 6 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۶. انصراف از خرید و مرجوعی</h2>
            <p class="text-sm text-gray-700">
                مشتریان تا <strong>۷ روز کاری</strong> پس از دریافت کالا می‌توانند بدون ذکر دلیل، درخواست مرجوعی دهند؛ مشروط
                بر آنکه کالا در شرایط اولیه (پلمپ و سالم) باشد.
                در برخی محصولات مانند هندزفری، لوازم شخصی یا سفارشی، این حق ممکن است مستثنی شود.
            </p>
        </section>

        <!-- Section 7 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۷. گارانتی و خدمات پس از فروش</h2>
            <p class="text-sm text-gray-700">
                کالاهای دارای گارانتی طبق شرایط شرکت گارانتی‌کننده پوشش داده می‌شوند.
                در صورت نیاز به تعمیر، مشتری می‌تواند از طریق بخش «پشتیبانی FixTand» درخواست خود را ثبت کند.
            </p>
        </section>

        <!-- Section 8 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۸. حریم خصوصی و امنیت اطلاعات</h2>
            <p class="text-sm text-gray-700">
                FixTand متعهد به حفظ اطلاعات شخصی کاربران است.
                اطلاعات پرداخت فقط از طریق درگاه‌های بانکی معتبر انجام می‌شود و اطلاعات کارت بانکی ذخیره نمی‌گردد.
            </p>
        </section>

        <!-- Section 9 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۹. حقوق مالکیت فکری</h2>
            <p class="text-sm text-gray-700">
                تمامی محتوا، لوگو، طراحی و تصاویر موجود در سایت متعلق به FixTand است و استفاده تجاری از آن‌ها بدون مجوز کتبی
                ممنوع است.
            </p>
        </section>

        <!-- Section 10 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۱۰. محدودیت مسئولیت</h2>
            <p class="text-sm text-gray-700">
                مسئولیت FixTand در قبال هر سفارش، حداکثر تا مبلغ پرداخت‌شده‌ی همان سفارش است.
                FixTand نسبت به خسارات غیرمستقیم، از جمله از دست‌رفتن داده‌ها یا سود، مسئولیتی ندارد.
            </p>
        </section>

        <!-- Section 11 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۱۱. صلاحیت خرید</h2>
            <p class="text-sm text-gray-700">
                خرید از سایت منوط به داشتن سن قانونی (۱۸ سال تمام) یا اجازه‌ی ولی/قیم قانونی است.
            </p>
        </section>

        <!-- Section 12 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۱۲. حل اختلاف و قانون حاکم</h2>
            <p class="text-sm text-gray-700">
                در صورت بروز اختلاف، ابتدا از طریق پشتیبانی FixTand اقدام خواهد شد.
                در صورت نیاز، اختلاف طبق قوانین جمهوری اسلامی ایران و در مراجع صالح بررسی می‌گردد.
            </p>
        </section>

        <!-- Section 13 -->
        <section class="bg-white p-6 rounded-2xl shadow-sm mb-5">
            <h2 class="text-lg font-DanaBold mb-3">۱۳. تغییر در قوانین</h2>
            <p class="text-sm text-gray-700">
                FixTand حق دارد در هر زمان مفاد این قوانین را تغییر دهد. نسخه‌ی جدید پس از انتشار در این صفحه لازم‌الاجراست.
            </p>
        </section>
    </main>

    <!-- Footer -->
    @extends('partials.footer')
    <!-- End Footer -->

    <!-- Bottom Navigation -->
    {{-- @extends('partials.bottom-nav') --}}
    <!-- End Bottom Navigation -->
@endsection