<!-- resources/views/about.blade.php -->

<!-- Content for the about section -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            {{ trans('site.portfolio') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link p-lg-3 active" aria-current="page" href="{{ url('/') }}">{{ trans('site.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#about">{{ trans('site.who_are_we') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#services">{{ trans('site.our_services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#Portfolio">{{ trans('site.our_projects') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-lg-3" href="#contact">{{ trans('site.connect_with_us') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right mb-2 mb-lg-0 ms-lg-auto">
                <li class="nav-item dropdown">
                    @if (app()->getLocale() == 'ar')
                        <a class="nav-link btn-language" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/site/photo/arabic.png') }}" alt="Arabic"> العربية
                        </a>
                    @else
                        <a class="nav-link btn-language" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/site/photo/english.png') }}" alt="English"> English
                        </a>
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item btn-language" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('assets/site/photo/' . ($localeCode == 'ar' ? 'arabic.png' : 'english.png')) }}"
                                        alt="{{ $properties['native'] }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
