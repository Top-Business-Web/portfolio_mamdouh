<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/owl.theme.default.min.css') }}">
    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">

</head>

<body>
    <!-- loader page -->
    <div class="loader">
        <img src="{{ asset('assets/site/photo/load.gif') }}">
    </div>

    <!-- Navigation section -->
    @include('site.layouts.nav')

    <!-- Landing section -->
    @include('site.layouts.landing')

    <!-- Counter section -->
    @include('site.layouts.counter')

    <!-- About section -->
    @include('site.layouts.about')

    <!-- Project section -->
    @include('site.layouts.project')

    <!-- Contact section -->
    @include('site.layouts.contact')

    <!-- Other common content or footer -->
    @include('site.layouts.scripts')

    <!-- scroll to top -->
    <a href="#" class="scroll-top">
        <div class="top">
            <i class="fa-solid fa-angle-up fa-lg"></i>
        </div>
    </a>

    <!-- whatsapp -->
    <a href="https://wa.me/920033007" target="_blank" class="whatsapp">
        <img src="{{ asset('assets/site/photo/wa-whatsapp-icon.svg') }}" alt="no-image">
    </a>
</body>

</html>
