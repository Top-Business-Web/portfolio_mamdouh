<section class="landing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex align-items-center ps-5 pe-5">
                <div class="content-land pt-5">
                    <div class="text-light text">
                        <span class="text1">مرحبا, أنا</span>
                        <h1 class="text2">{{ json_decode($landingPageData->name_owner)->{app()->getLocale()} }}</h1>
                        <p class="text3">{!! json_decode($landingPageData->description_owner)->{app()->getLocale()} !!}</p>
                    </div>
                    <div class="video-content d-flex flex-wrap">
                        <a href="#about" class="btn-start mb-3">
                            <span>ابدأالان</span>
                        </a>
                        <div class="d-flex">
                            <div>
                                <button type="button" class="btn-video" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                            </div>
                            <h5 class="text-light me-3 d-flex align-items-center">ابدأ المشاهدة الان</h5>
                        </div>
                    </div>
                    <div class="social-link mt-5">
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="modal-body">
                                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/lvYM9tHRz0M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image-land">
                    <img src="{{ asset('storage/' . $landingPageData->image_owner) }}">
                    <div class="line-shape d-none d-lg-none d-xl-block">
                        <svg viewBox="0 0 747 815" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M719.5 4.46177C731.74 -1.16507 745.482 8.56845 744.234 21.9821L672.226 796.514C670.979
                            809.928 655.679 816.961 644.686 809.175L9.92582 359.548C-1.06721 351.761 0.491669 334.994 12.7318
                            329.367L719.5 4.46177Z" stroke="#DAA971" stroke-width="5"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="light-shape-1"></div>
    <div class="light-shape-2"></div>
    <div class="light-shape-3"></div>
</section>

<!-- modal video -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/lvYM9tHRz0M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
