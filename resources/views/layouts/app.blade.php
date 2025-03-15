<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب فروشگاه آنلاین کتاب | نت کپی </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('book-dist/css/style.css') }}">

</head>

<body>

    <!-- header section starts  -->

    @include('layouts.header')

    <!-- header section ends -->
    @yield('content')

    <!-- footer section starts  -->

    @include('layouts.footer')

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="{{ asset('book-dist/image/loader-img.gif') }}" alt="">
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{ asset('book-dist/js/script.js') }}"></script>

</body>

</html>
