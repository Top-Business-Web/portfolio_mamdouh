<!-- resources/views/about.blade.php -->

    <!-- Content for the about section -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
          Portfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link p-lg-3 active" aria-current="page" href="{{ url('/') }}">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="#about">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="#services">خدمتنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="#Portfolio">مشارعنا</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="#contact">تواصل معنا</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right mb-2 mb-lg-0 ms-lg-auto">
            <li class="nav-item dropdown">
              <a class="nav-link btn-language" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/site/photo/arabic.png') }}">
                العربية
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item btn-language" href="#">
                  <img src="{{ asset('assets/site/photo/english.png') }}">
                  English
                </a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
