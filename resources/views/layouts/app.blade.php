<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FixTand —فروشگاه تعمیر و فروش موبایل</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/photo_5782904397707807609_y.jpg') }}">
    @vite([
    'resources/css/app.css',
    'resources/css/style.css',
    ])
</head>
<body>

    @yield('content')
    
    @vite([
    'resources/js/script.js',
    'resources/js/products-swiper.js',
    'resources/js/auth.js',
    'resources/js/product-single.js',
    ])

</body>
</html>