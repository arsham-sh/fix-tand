<!-- Hero Section -->
<header class="relative px-4 2xl:px-0 h-[820px] lg:h-[700px] overflow-hidden flex flex-col">
    <!-- NAVBAR -->
    <section class="top-0 py-4 z-50">
        <!-- MAIN NAVBAR -->
        <div class="max-w-7xl  mx-auto flex items-center justify-between">

            <!-- Mobile menu button -->
            <button id="mobileMenuBtn" class="lg:hidden p-2 transition-all duration-300 cursor-pointer">
                <svg class="w-6 h-6 text-white">
                    <use href="#bars"></use>
                </svg>
            </button>
            <!-- End Mobile menu button -->
            <!-- MOBILE MENU PANEL -->
            <div id="mobileMenu"
                class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden z-60 transition-opacity duration-300 opacity-0">
                <!-- Sliding menu -->
                <div
                    class="absolute left-0 top-0 h-full w-80 bg-white transform -translate-x-full transition-transform duration-300 ease-out flex flex-col rounded-r-2xl">

                    <!-- Header -->
                    <div class="px-6 py-4 flex items-center justify-between">
                        <button id="closeMobileMenu" class="text-2xl text-gray-700 cursor-pointer">
                            <svg class="w-6 h-6 text-gray-700">
                                <use href="#x-mark"></use>
                            </svg>
                        </button>
                        <h3 class="text-base font-DanaBlack text-original-red">
                            Fix <span class="text-black">Tand</span>
                        </h3>
                    </div>
                    <!-- End Header -->

                    <!-- Mobile Login & Register -->
                    <div class="px-6 py-4 flex bg-original-red/10 justify-center gap-6">
                        <a href="#"
                            class="relative flex items-center justify-center rounded-lg cursor-pointer transition-all duration-300 text-original-red gap-1 font-DanaMediume text-sm">
                            <svg class="w-6 h-6">
                                <use href="#arrow-left"></use>
                            </svg>
                            ورود|عضویت
                        </a>
                    </div>
                    <!-- End Mobile Login & Register -->

                    <!-- Search box -->
                    <div class="px-6 py-4">
                        <div class="relative">
                            <input type="text" placeholder="جستجو بین محصولات..."
                                class="w-full bg-gray-100 rounded-xl py-3 pl-10 pr-4 outline-none font-DanaMediume text-sm text-gray-700 placeholder:text-gray-500" />
                            <svg class="w-6 h-6 absolute left-3 top-2.5 text-gray-500">
                                <use href="#search"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- End Search box -->

                </div>
                <!-- End Sliding menu -->
            </div>
            <!-- END MOBILE MENU PANEL -->

            <!-- LOGO -->
            <div class="select-none">
                <h2 class="text-2xl font-DanaBlack text-white">
                    <span class="text-original-red">Fix</span>Tand
                </h2>
            </div>
            <!-- END LOGO -->

            <!-- MENU -->
            <nav class="hidden lg:flex items-center gap-7 text-white">
                <div class="relative group/sub-menu">
                    <div class="text-md font-DanaMediume cursor-pointer">
                        محصولات
                    </div>
                    <!-- SHOW SUBMENU -->
                    <div
                        class="invisible opacity-0 group-hover/sub-menu:visible group-hover/sub-menu:opacity-100 absolute right-0 top-full pt-7 transition-all z-50">
                        <div
                            class="relative w-44 bg-gray-100 text-gray-700 text-sm font-DanaMediume rounded-l hover:rounded-l-none rounded-r shadow">
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    آیفون
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">آیفون 13</a>
                                    <a class="hover:text-original-red" href="#">آیفون 14</a>
                                    <a class="hover:text-original-red" href="#">آیفون 15</a>
                                    <a class="hover:text-original-red" href="#">آیفون 16</a>
                                    <a class="hover:text-original-red" href="#">آیفون 17</a>
                                    <a class="hover:text-original-red" href="#">آیفون 18</a>
                                </div>
                            </div>
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    سامسونگ
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">گوشی سامسونگ s25</a>
                                    <a class="hover:text-original-red" href="#">ساموسنگ سری a</a>
                                    <a class="hover:text-original-red" href="#">سامسونگ سری s</a>
                                </div>
                            </div>
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    شیائومی
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">پوکو X4 Pro 5G</a>
                                    <a class="hover:text-original-red" href="#">ردمی نوت 13 پرو</a>
                                    <a class="hover:text-original-red" href="#">شیائومی ردمی 13</a>
                                </div>
                            </div>
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    هدفون بیتس
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">بیتس مدل Solo3</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                    <a class="hover:text-original-red" href="#">پرووان مدل PHB3575</a>
                                </div>
                            </div>
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    داغ ترین ها
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">آیفون ۱۷</a>
                                    <a class="hover:text-original-red" href="#">گوشی S25 سامسونگ</a>
                                    <a class="hover:text-original-red" href="#">شیائومی ردمی 13</a>
                                </div>
                            </div>
                            <div class="group">
                                <a href="#"
                                    class="flex items-center justify-between py-2.5 pr-3 pl-2.5 border-l-2 border-l-transparent group-hover:bg-original-red/10 group-hover:text-original-red  group-hover:border-l-original-red transition-all">
                                    لوازم جانبی موبایل
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div
                                    class="group-hover:flex items-start absolute right-full top-0 bottom-0 hidden flex-col gap-y-3 w-56 pr-4 pl-2 border-y-[10px] border-l-8 border-transparent overflow-y-auto bg-white font-DanaMediume child:transition-colors hover:child:text-sky-500 rounded-l shadow app-scrollbar">
                                    <a class="hover:text-original-red" href="#">شارژر گوشی</a>
                                    <a class="hover:text-original-red" href="#">شارژر وایرلس</a>
                                    <a class="hover:text-original-red" href="#">شارژر تایپ سی</a>
                                    <a class="hover:text-original-red" href="#">کابل شارژ تایپ سی</a>
                                    <a class="hover:text-original-red" href="#">قاب گوشی</a>
                                    <a class="hover:text-original-red" href="#">گلس گوشی</a>
                                    <a class="hover:text-original-red" href="#">شارژر فندکی</a>
                                    <a class="hover:text-original-red" href="#">هولدر گوشی موبایل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SHOW SUBMENU -->
                </div>

                <a href="#about"
                    class="relative group text-md font-medium hover:text-original-red transition font-DanaMediume cursor-pointer">
                    تعمیرات
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-original-red transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#about"
                    class="relative group text-md font-medium hover:text-original-red transition font-DanaMediume cursor-pointer">
                    درباره ما
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-original-red transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#about"
                    class="relative group text-md font-medium hover:text-original-red transition font-DanaMediume cursor-pointer">
                    تماس با ما
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-original-red transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>
            <!-- END MENU -->

            <!-- CART -->
            <div class="flex items-center gap-8">

                <!-- Overlay -->
                <div id="cartOverlay"
                    class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-40">
                </div>
                <!-- End Overlay -->

                <!-- CART BUTTON & MOBILE MENU BUTTON -->
                <div class="flex items-center gap-3">
                    <!-- CART BUTTON -->
                    <div class="relative inline-block">
                        <!-- BUTTON -->
                        <button id="cartBtn"
                            class="relative p-2 cursor-pointer transition-all duration-300 z-50 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-1 bg-original-red text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-DanaMediume">
                                7
                            </span>
                        </button>
                        <!-- END BUTTON -->

                        <!-- CART -->
                        <div id="cartDrawer"
                            class="absolute top-full left-0 mt-2 w-96 max-w-[90vw] bg-white shadow-2xl rounded-2xl opacity-0 scale-95 pointer-events-none transition-all duration-300 z-50">
                            <div class="px-5 py-5 border-b border-gray-100 flex items-center justify-between">
                                <h3 class="text-base text-gray-700 font-DanaBold">سبد خرید</h3>
                                <button id="closeCart" class="text-2xl text-gray-700 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-5">
                                <div
                                    class="max-h-62 overflow-y-auto space-y-5 [direction:ltr] [&>*]:[direction:rtl] app-scrollbar">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/0a0fbbdbedcb7be1e4cfe35e2776ef07a26d17c4_1759666568.webp') }}"
                                            class="w-16 h-16 object-cover rounded-md" />
                                        <div class="flex-1">
                                            <div class="flex gap-3 justify-between text-sm">
                                                <span class="font-DanaMediume line-clamp-1">گوشی موبایل اپل iPhone 13
                                                    Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6
                                                    گیگابایت</span>
                                                <span class="flex items-center gap-3 text-gray-700 font-DanaMediume">
                                                    ۱۲,۵۰۰,۰۰۰
                                                    <button class="text-original-red cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="size-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 font-DanaMediume">تعداد: 1</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/0a0fbbdbedcb7be1e4cfe35e2776ef07a26d17c4_1759666568.webp') }}"
                                            class="w-16 h-16 object-cover rounded-md" />
                                        <div class="flex-1">
                                            <div class="flex gap-3 justify-between text-sm">
                                                <span class="font-DanaMediume line-clamp-1">گوشی موبایل اپل iPhone 13
                                                    Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6
                                                    گیگابایت</span>
                                                <span class="flex items-center gap-3 text-gray-700 font-DanaMediume">
                                                    ۱۲,۵۰۰,۰۰۰
                                                    <button class="text-original-red cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="size-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 font-DanaMediume">تعداد: 1</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/0a0fbbdbedcb7be1e4cfe35e2776ef07a26d17c4_1759666568.webp') }}"
                                            class="w-16 h-16 object-cover rounded-md" />
                                        <div class="flex-1">
                                            <div class="flex gap-3 justify-between text-sm">
                                                <span class="font-DanaMediume line-clamp-1">گوشی موبایل اپل iPhone 13
                                                    Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6
                                                    گیگابایت</span>
                                                <span class="flex items-center gap-3 text-gray-700 font-DanaMediume">
                                                    ۱۲,۵۰۰,۰۰۰
                                                    <button class="text-original-red cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="size-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 font-DanaMediume">تعداد: 1</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/0a0fbbdbedcb7be1e4cfe35e2776ef07a26d17c4_1759666568.webp') }}"
                                            class="w-16 h-16 object-cover rounded-md" />
                                        <div class="flex-1">
                                            <div class="flex gap-3 justify-between text-sm">
                                                <span class="font-DanaMediume line-clamp-1">گوشی موبایل اپل iPhone 13
                                                    Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6
                                                    گیگابایت</span>
                                                <span class="flex items-center gap-3 text-gray-700 font-DanaMediume">
                                                    ۱۲,۵۰۰,۰۰۰
                                                    <button class="text-original-red cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="size-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 font-DanaMediume">تعداد: 1</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/0a0fbbdbedcb7be1e4cfe35e2776ef07a26d17c4_1759666568.webp') }}"
                                            class="w-16 h-16 object-cover rounded-md" />
                                        <div class="flex-1">
                                            <div class="flex gap-3 justify-between text-sm">
                                                <span class="font-DanaMediume line-clamp-1">گوشی موبایل اپل iPhone 13
                                                    Pro CH/A نات اکتیو دو سیم کارت ظرفیت 256 گیگابایت رم 6
                                                    گیگابایت</span>
                                                <span class="flex items-center gap-3 text-gray-700 font-DanaMediume">
                                                    ۱۲,۵۰۰,۰۰۰
                                                    <button class="text-original-red cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="size-4 transition-colors">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1 font-DanaMediume">تعداد: 1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-100 pt-5 mt-5">
                                    <div class="flex justify-between items-center text-sm font-DanaMediume">
                                        <span>جمع کل</span>
                                        <span>۴۷,۵۰۰,۰۰۰ تومان</span>
                                    </div>
                                    <div class="mt-4 font-DanaMediume">
                                        <a href="#checkout"
                                            class="block w-full text-center py-2 bg-original-red text-white rounded-lg transition">
                                            نهایی کردن و پرداخت
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CART -->
                    </div>
                    <!-- END CART BUTTON -->

                    <!-- LOGIN & REGISTER BUTTONS -->
                    <a href="#"
                        class="relative hidden lg:flex items-center justify-center px-4 py-2 rounded-lg cursor-pointer transition-all duration-200 bg-original-red border-[1.5px] border-original-red text-white gap-1 font-DanaMediume text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                        ورود|عضویت
                    </a>
                    <!-- END LOGIN & REGISTER BUTTONS -->
                </div>
                <!-- END CART BUTTON & MOBILE MENU BUTTON -->
            </div>
            <!-- END CART -->
        </div>
        <!-- END MAIN NAVBAR -->
    </section>
    <!-- END NAVBAR -->

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('images/24b91165-489a-4e15-aac3-3220dfefa773.png') }}');">
        <div class="absolute inset-0 bg-black/20 backdrop-blur-sm"></div>
    </div>
    <!-- End Background Image -->

    <!-- Hero Content -->
    <div class="relative z-10 mx-auto w-full max-w-7xl py-24">
        <div class="text-center space-y-6 mx-auto max-w-4xl">
            <h1 class="text-2xl leading-tight sm:text-3xl lg:text-4xl font-DanaBold text-white">
                فروش و تعمیر موبایل
                <span class="font-DanaBlack text-original-red">Fix</span><span
                    class="font-DanaBlack text-white">Tand</span>
            </h1>

            <p class=" text-gray-300 font-DanaMediume text-base lg:text-xl">
                خرید بهترین گوشی‌ها و دریافت سریع‌ترین خدمات تعمیر با کیفیت تضمینی.
            </p>

            <!-- SEARCH -->
            <div class="w-full font-DanaMediume">
                <div
                    class="flex items-center justify-between gap-x-5 md:gap-x-8 p-1.5 sm:p-2.5 bg-white rounded-full border border-transparent focus-within:border-neutral-200 transition-all">
                    <input autocomplete="off" name="s" data-nval="b21f3bfecd" id="searchbox-input"
                        type="text"
                        class="flex-grow pr-2.5 bg-transparent text-gray-700 font-DanaMediume text-sm md:text-base outline-none"
                        placeholder="دنبال چه موبایلی میگردی؟">
                    <button type="submit"
                        class="flex items-center justify-center shrink-0 size-11 md:size-13 text-white rounded-full bg-original-red cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- END SEARCH -->
        </div>
    </div>
    <!-- End Hero Content -->

    <!-- Why Choose Us Section -->
    <div class="relative z-10 mx-auto w-full max-w-7xl">
        <div class="flex flex-wrap items-center gap-y-10 justify-around">
            <!-- Valid warranty -->
            <div class="group w-40 relative flex flex-col items-center justify-center">
                <div class="mb-4 flex items-center justify-center rounded-lg p-3 bg-original-red/10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 sm:size-10 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                </div>
                <h4 class="mb-2 font-DanaBlack text-sm sm:text-lg text-white">گارانتی معتبر</h4>
                <p class="text-xs sm:text-sm text-center leading-relaxed text-zinc-300 font-DanaBold">تمام محصولات و
                    تعمیرات با گارانتی رسمی.</p>
            </div>
            <!-- End Valid warranty -->

            <!-- Fast delivery -->
            <div class="group w-40 relative flex flex-col items-center justify-center">
                <div class="mb-4 flex items-center justify-center rounded-lg p-3 bg-original-red/10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 sm:size-10 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                </div>
                <h4 class="mb-2 font-DanaBlack text-sm sm:text-lg text-white">تحویل سریع</h4>
                <p class="text-xs sm:text-sm text-center leading-relaxed text-zinc-300 font-DanaBold">ارسال فوری به
                    سراسر کشور در کمتر از ۴۸ ساعت.</p>
            </div>
            <!-- End Fast delivery -->

            <!-- 24-hour support -->
            <div class="group w-40 relative flex flex-col items-center justify-center">
                <div class="mb-4 flex items-center justify-center rounded-lg p-3 bg-original-red/10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 sm:size-10 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h4 class="mb-2 font-DanaBlack text-sm sm:text-lg text-white">پشتیبانی ۲۴ ساعته</h4>
                <p class="text-xs sm:text-sm text-center leading-relaxed text-zinc-300 font-DanaBold">پاسخگویی
                    شبانه‌روزی به سوالات شما.</p>
            </div>
            <!-- End 24-hour support -->

            <!-- Competitive price -->
            <div class="group w-40 relative flex flex-col items-center justify-center">
                <div class="mb-4 flex items-center justify-center rounded-lg p-3 bg-original-red/10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 sm:size-10 text-original-red">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                </div>
                <h4 class="mb-2 font-DanaBlack text-sm sm:text-lg text-white">تعمیر تخصصی</h4>
                <p class="text-xs sm:text-sm text-center leading-relaxed text-zinc-300 font-DanaBold">بهترین قیمت بازار
                    با کیفیت تضمینی.</p>
            </div>
            <!-- End Competitive price -->

        </div>
    </div>
    <!-- End Why Choose Us Section -->
</header>
<!-- End Hero Section -->