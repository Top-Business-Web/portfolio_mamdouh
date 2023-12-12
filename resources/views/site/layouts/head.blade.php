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

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/site/css/ltr.css') }}">
    @endif

</head>
