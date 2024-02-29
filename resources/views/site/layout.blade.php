<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('site.layouts.head')
<body>
    <!-- loader page -->
    <div class="loader">
        <img src="{{ asset('assets/site/photo/load.gif') }}">
    </div>

    <!-- Navigation section -->
    @include('site.layouts.nav')

    @yield('content')
    <!-- scroll to top -->
    <a href="#" class="scroll-top">
        <div class="top">
            <i class="fa-solid fa-angle-up fa-lg"></i>
        </div>
    </a>

    @php
        $whatsapp = $content->whatsapp;
    @endphp

    <!-- whatsapp -->
    <a href="https://wa.me/{{ $whatsapp }}" target="_blank" class="whatsapp">
        <img src="{{ asset('assets/site/photo/wa-whatsapp-icon.svg') }}" alt="no-image">
    </a>

    @include('site.layouts.contact')
    <!-- Other common content or footer -->
    @include('site.layouts.scripts')
    @yield('js')
</body>

</html>
