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

    <!-- Hero Section -->
    @extends('partials.header')
    <!-- End Hero Section -->

    <!-- Products -->
    <section class="bg-white py-8 antialiased px-4 2xl:px-0">
        <div class="mx-auto max-w-screen-xl">

            <!-- Header -->
            <div class="flex sm:items-end justify-between flex-col sm:flex-row mb-8">
                <div class="flex items-center gap-x-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                    </svg>
                    <p class="font-DanaBold text-xl md:text-xl text-original-red">محصولات ویژه فیکستند</p>
                </div>

                <a href="./products.html"
                    class="flex items-center gap-x-1.5 py-1 text-gray-700 hover:text-original-red self-end transition-all">
                    <span class="text-sm font-DanaMediume">همه محصولات</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <!-- End Header -->

            <!-- Swiper -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide rounded-lg border border-gray-300 bg-white p-6">
                        <div class="h-56 w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-full" src="{{ asset('images/small_product-TLP-23818_85951b91-2f5d-433a-b983-9aeadfa285ba.webp') }}"/>
                            </a>
                        </div>
                        <div class="pt-6">

                            <a href="./single-product.html"
                                class="text-lg font-DanaBold leading-tight text-gray-700 line-clamp-3">گوشی موبایل اپل
                                iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6 گیگابایت</a>

                            <!-- Reviews -->
                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="text-sm font-DanaMediume text-gray-700">5.0</p>
                                <p class="text-sm font-DanaMediume text-gray-700">(455)</p>
                            </div>
                            <!-- End Reviews -->

                            <!-- Status -->
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-1 text-original-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <p class="text-sm font-DanaMediume">1 عدد مانده</p>
                                </li>
                            </ul>
                            <!-- End Status -->

                            <!-- Price -->
                            <div class="mt-2 flex flex-col gap-2">
                                <!-- Main row: Discounted price + discount percentage -->
                                <div class="flex items-center justify-between gap-4">
                                    <p class="flex items-center gap-1 text-lg font-DanaBlack leading-tight text-gray-700">
                                        134,960,000<span class="font-DanaBold text-xs">تومان</span>
                                    </p>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-DanaBold text-white bg-original-red rounded">۲۰٪</span>
                                </div>
                                <!-- End Main row: Discounted price + discount percentage -->

                                <!-- Original price (strikethrough and faded) -->
                                <p class="text-sm font-DanaMediume text-gray-500 line-through">
                                    168,700,000 <span class="text-xs">تومان</span>
                                </p>
                                <!-- End Original price (strikethrough and faded) -->
                            </div>
                            <!-- End Price -->

                        </div>
                    </div>
                    <div class="swiper-slide rounded-lg border border-gray-300 bg-white p-6">
                        <div class="h-56 w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-full" src="{{ asset('images/small_product-TLP-23818_85951b91-2f5d-433a-b983-9aeadfa285ba.webp') }}"/>
                            </a>
                        </div>
                        <div class="pt-6">

                            <a href="./single-product.html"
                                class="text-lg font-DanaBold leading-tight text-gray-700 line-clamp-3">گوشی موبایل اپل
                                iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6 گیگابایت</a>

                            <!-- Reviews -->
                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="text-sm font-DanaMediume text-gray-700">5.0</p>
                                <p class="text-sm font-DanaMediume text-gray-700">(455)</p>
                            </div>
                            <!-- End Reviews -->

                            <!-- Status -->
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-1 text-original-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <p class="text-sm font-DanaMediume">1 عدد مانده</p>
                                </li>
                            </ul>
                            <!-- End Status -->

                            <!-- Price -->
                            <div class="mt-2 flex flex-col gap-2">
                                <!-- Main row: Discounted price + discount percentage -->
                                <div class="flex items-center justify-between gap-4">
                                    <p class="flex items-center gap-1 text-lg font-DanaBlack leading-tight text-gray-700">
                                        134,960,000<span class="font-DanaBold text-xs">تومان</span>
                                    </p>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-DanaBold text-white bg-original-red rounded">۲۰٪</span>
                                </div>
                                <!-- End Main row: Discounted price + discount percentage -->

                                <!-- Original price (strikethrough and faded) -->
                                <p class="text-sm font-DanaMediume text-gray-500 line-through">
                                    168,700,000 <span class="text-xs">تومان</span>
                                </p>
                                <!-- End Original price (strikethrough and faded) -->
                            </div>
                            <!-- End Price -->

                        </div>
                    </div>
                    <div class="swiper-slide rounded-lg border border-gray-300 bg-white p-6">
                        <div class="h-56 w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-full" src="{{ asset('images/small_product-TLP-23818_85951b91-2f5d-433a-b983-9aeadfa285ba.webp') }}"/>
                            </a>
                        </div>
                        <div class="pt-6">

                            <a href="./single-product.html"
                                class="text-lg font-DanaBold leading-tight text-gray-700 line-clamp-3">گوشی موبایل اپل
                                iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6 گیگابایت</a>

                            <!-- Reviews -->
                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="text-sm font-DanaMediume text-gray-700">5.0</p>
                                <p class="text-sm font-DanaMediume text-gray-700">(455)</p>
                            </div>
                            <!-- End Reviews -->

                            <!-- Status -->
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-1 text-original-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <p class="text-sm font-DanaMediume">1 عدد مانده</p>
                                </li>
                            </ul>
                            <!-- End Status -->

                            <!-- Price -->
                            <div class="mt-2 flex flex-col gap-2">
                                <!-- Main row: Discounted price + discount percentage -->
                                <div class="flex items-center justify-between gap-4">
                                    <p class="flex items-center gap-1 text-lg font-DanaBlack leading-tight text-gray-700">
                                        134,960,000<span class="font-DanaBold text-xs">تومان</span>
                                    </p>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-DanaBold text-white bg-original-red rounded">۲۰٪</span>
                                </div>
                                <!-- End Main row: Discounted price + discount percentage -->

                                <!-- Original price (strikethrough and faded) -->
                                <p class="text-sm font-DanaMediume text-gray-500 line-through">
                                    168,700,000 <span class="text-xs">تومان</span>
                                </p>
                                <!-- End Original price (strikethrough and faded) -->
                            </div>
                            <!-- End Price -->

                        </div>
                    </div>
                    <div class="swiper-slide rounded-lg border border-gray-300 bg-white p-6">
                        <div class="h-56 w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-full" src="{{ asset('images/small_product-TLP-23818_85951b91-2f5d-433a-b983-9aeadfa285ba.webp') }}"/>
                            </a>
                        </div>
                        <div class="pt-6">

                            <a href="./single-product.html"
                                class="text-lg font-DanaBold leading-tight text-gray-700 line-clamp-3">گوشی موبایل اپل
                                iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6 گیگابایت</a>

                            <!-- Reviews -->
                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="text-sm font-DanaMediume text-gray-700">5.0</p>
                                <p class="text-sm font-DanaMediume text-gray-700">(455)</p>
                            </div>
                            <!-- End Reviews -->

                            <!-- Status -->
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-1 text-original-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <p class="text-sm font-DanaMediume">1 عدد مانده</p>
                                </li>
                            </ul>
                            <!-- End Status -->

                            <!-- Price -->
                            <div class="mt-2 flex flex-col gap-2">
                                <!-- Main row: Discounted price + discount percentage -->
                                <div class="flex items-center justify-between gap-4">
                                    <p class="flex items-center gap-1 text-lg font-DanaBlack leading-tight text-gray-700">
                                        134,960,000<span class="font-DanaBold text-xs">تومان</span>
                                    </p>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-DanaBold text-white bg-original-red rounded">۲۰٪</span>
                                </div>
                                <!-- End Main row: Discounted price + discount percentage -->

                                <!-- Original price (strikethrough and faded) -->
                                <p class="text-sm font-DanaMediume text-gray-500 line-through">
                                    168,700,000 <span class="text-xs">تومان</span>
                                </p>
                                <!-- End Original price (strikethrough and faded) -->
                            </div>
                            <!-- End Price -->

                        </div>
                    </div>
                    <div class="swiper-slide rounded-lg border border-gray-300 bg-white p-6">
                        <div class="h-56 w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-full" src="{{ asset('images/small_product-TLP-23818_85951b91-2f5d-433a-b983-9aeadfa285ba.webp') }}"/>
                            </a>
                        </div>
                        <div class="pt-6">

                            <a href="./single-product.html"
                                class="text-lg font-DanaBold leading-tight text-gray-700 line-clamp-3">گوشی موبایل اپل
                                iPhone 13 Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6 گیگابایت</a>

                            <!-- Reviews -->
                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-yellow-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <p class="text-sm font-DanaMediume text-gray-700">5.0</p>
                                <p class="text-sm font-DanaMediume text-gray-700">(455)</p>
                            </div>
                            <!-- End Reviews -->

                            <!-- Status -->
                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-1 text-original-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                    <p class="text-sm font-DanaMediume">1 عدد مانده</p>
                                </li>
                            </ul>
                            <!-- End Status -->

                            <!-- Price -->
                            <div class="mt-2 flex flex-col gap-2">
                                <!-- Main row: Discounted price + discount percentage -->
                                <div class="flex items-center justify-between gap-4">
                                    <p class="flex items-center gap-1 text-lg font-DanaBlack leading-tight text-gray-700">
                                        134,960,000<span class="font-DanaBold text-xs">تومان</span>
                                    </p>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-DanaBold text-white bg-original-red rounded">۲۰٪</span>
                                </div>
                                <!-- End Main row: Discounted price + discount percentage -->

                                <!-- Original price (strikethrough and faded) -->
                                <p class="text-sm font-DanaMediume text-gray-500 line-through">
                                    168,700,000 <span class="text-xs">تومان</span>
                                </p>
                                <!-- End Original price (strikethrough and faded) -->
                            </div>
                            <!-- End Price -->

                        </div>
                    </div>
                </div>

                <!-- Controll -->
                <div class="swiper-button-prev bg-original-red rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="swiper-button-next bg-original-red rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

            </div>
            <!-- End Swiper -->

        </div>
    </section>
    <!-- End Products -->

    <!-- Category -->
    <section class="bg-white py-8 antialiased px-4 2xl:px-0">
        <div class="flex flex-wrap items-center max-w-7xl mx-auto gap-y-10 justify-between">

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/products-tablet.png') }}" alt="موبایل"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    موبایل
                </h3>
            </a>

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/xiaomi-pad-6-black-66b77da1dc4961c56dd1d43e-removebg-preview (1).png') }}"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    تبلت
                </h3>
            </a>

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/7in1-ultra-smartwatch-removebg-preview.png') }}" alt="ساعت هوشمند"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    ساعت هوشمند
                </h3>
            </a>

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/359f734b35ea9b516c786e310a262bd1-removebg-preview.png') }}" alt="گیمینگ"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    گیمینگ
                </h3>
            </a>

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/fXppLhf9sT7CzyD9-removebg-preview.png') }}" alt="اسپیکر و بلندگو"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    اسپیکر و بلندگو
                </h3>
            </a>

            <a href="#"
                class="group flex flex-col items-center justify-center rounded-2xl sm:rounded-3xl border border-gray-200 bg-white w-28 h-40 sm:w-36 sm:h-52 transition-all duration-300 hover:-translate-y-2 hover:border-gray-300">
                <div
                    class="mb-5 flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gray-100 transition-all duration-300 group-hover:bg-gray-200">
                    <img src="{{ asset('images/b224e5a195d808fb68ae1755bb24a4afa1007fa2_1606111836-removebg-preview.png') }}"
                        alt="هدفون و هندزفری"
                        class="w-12 h-12 sm:w-24 sm:h-24 object-contain transition-transform duration-300 group-hover:scale-110" />
                </div>
                <h3
                    class="font-DanaBold text-sm sm:text-lg text-gray-700 transition-colors duration-300 group-hover:text-original-red">
                    هدفون و هندزفری
                </h3>
            </a>

        </div>
    </section>
    <!-- End Category -->

    <!-- The most popular brands -->
    <section class="bg-white py-8 antialiased px-4 2xl:px-0">
        <div class="mx-auto max-w-screen-xl">

            <!-- Header -->
            <div class="flex sm:items-end justify-between flex-col sm:flex-row mb-8">
                <div class="flex items-center gap-x-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                    </svg>
                    <p class="font-DanaBold text-xl md:text-xl text-original-red">محبوب ترین برندها</p>
                </div>
            </div>
            <!-- End Header -->

            <!-- Swiper -->
            <div class="swiper products-swiper rounded-lg border border-gray-300 bg-white">
                <div class="swiper-wrapper p-4">
                    <div class="swiper-slide lg:border-l border-gray-300">
                        <div class="h-auto w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-28" src="{{ asset('images/banner_BrandBanners_yqE3hH_1a75ca9e-c20c-4ec2-9557-5e55e803138f.webp') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide lg:border-l border-gray-300">
                        <div class="h-auto w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-28" src="{{ asset('images/banner_BrandBanners_XD52NM_0029eb0f-05e7-4f45-83b5-4bdd9317ce6d.webp') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide lg:border-l border-gray-300">
                        <div class="h-auto w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-28" src="{{ asset('images/banner_BrandBanners_GoWKQ2_de5baecb-e4fc-4b4b-a83d-d9ef67e493a8.webp') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide lg:border-l border-gray-300">
                        <div class="h-auto w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-28"src="{{ asset('images/banner_BrandBanners_9Qpb1k_541f8b8f-dfd3-488a-b02e-0960593c7860.webp') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide lg:border-l border-gray-300">
                        <div class="h-auto w-full">
                            <a href="./single-product.html">
                                <img class="mx-auto h-28" src="{{ asset('images/banner_BrandBanners_BBs0PS_6bf4becd-f428-4326-9808-be3434837c83.webp') }}"/>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Controll -->
                <div class="swiper-button-prev bg-original-red rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="swiper-button-next bg-original-red rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

            </div>
            <!-- End Swiper -->

        </div>
    </section>
    <!-- End The most popular brands -->

    <!-- Footer -->
    @extends('partials.footer')
    <!-- End Footer -->

    <!-- Bottom Navigation -->
    @extends('partials.bottom-nav')
    <!-- End Bottom Navigation -->
@endsection