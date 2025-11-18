<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FixTand —فروشگاه تعمیر و فروش موبایل</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/photo_5782904397707807609_y.jpg') }}">
    @vite('public/css/style.css')
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

    @yield('content')
    
    @vite('resources/js/app.js')
    @vite('public/js/products-swiper.js')
    @vite('public/js/auth.js')
    @vite('public/js/app.js')
    @vite('public/js/product-single.js')
</body>
</html>