<!DOCTYPE html>
<html>
    @include('site.layouts.head')
<body>
    <!-- loader page -->
    <div class="loader">
        <img src="assets/site/photo/load.gif">
    </div>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="index.html">
            Portfolio
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-lg-3 active" aria-current="page" href="index.html">الرئيسية</a>
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
                  <img src="photo/arabic.png">
                  العربية
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item btn-language" href="#">
                    <img src="photo/english.png">
                    English
                  </a></li>
                      
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- landing -->
      <section class="landing">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex align-items-center ps-5 pe-5">
                    <div class="content-land pt-5">
                        <div class="text-light text">
                            <span class="text1">مرحبا, أنا</span>
                            <h1 class="text2">محمد ممدوح</h1>
                            <p class="text3">وكيل عقارى معتمد مرخص من دائرة الاراضى والاملاك فى دبى مختص فى بيع وشراء وتأجير العقارات</p>
                        </div>
                        <div class="video-content d-flex flex-wrap">
                            <a href="#about" class="btn-start mb-3">
                                <span>ابدأالان</span>
                            </a>
                            <div class="d-flex">
                                <div>
                                    <button type="button" class="btn-video" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <img src="photo/Vector (1).svg">
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

      <!-- counter -->
      <section class="counter">
        <div class="container">
            <div class="row text-light">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <span class="num">150+</span>
                    <h3>المشاريع الجديدة</h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <span class="num">50+</span>
                    <h3> أفضل العملاء</h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <span class="num">10+</span>
                    <h3>سنوات الخبرة</h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <span class="num">100+</span>
                    <h3> العملاء</h3>
                </div>
            </div>
        </div>
      </section>

      <!-- about -->
      <section class="about-section pb-5" id="about">
        <div class="container">
            <div class="row mt-5">
              <div class="col-lg-6 col-12">
                <div class="about-image">
                  <div style="z-index: 999;">
                    <img src="photo/73214e0f-c8e6-4648-972f-d80f8ff5041a-removebg-preview 1.svg">
                  </div>
                  <div class="line-shape d-none d-lg-none d-xl-block">
                    <svg viewBox="0 0 691 698" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M194.745 7.73158L682.884 476.323C692.602 485.652 688.577 502.003 675.639 
                      505.755L25.7575 694.2C12.8189 697.952 0.670987 686.29 3.89112 673.209L165.633 
                      16.173C168.853 3.09205 185.027 -1.59763 194.745 7.73158Z" stroke="#DAA971" stroke-width="5"></path>
                    </svg>
                  </div>
                  <div class="line-shape-2 d-none d-lg-none d-xl-block">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 654 194" fill="none">
                      <path d="M652.815 2.4759L0.769775 190.91" stroke="#DAA971" stroke-width="5"></path>
                      <defs><linearGradient id="paint0_linear_58_165" x1="326.792" y1="96.693" x2="327.07" y2="97.6537" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#F2CD8C"></stop><stop offset="1" stop-color="#CC9260"></stop></linearGradient></defs></svg>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12 mt-5">
                <div class="text-about text-light">
                  <h1 class="fw-bold mb-4">لماذا تقوم باختيارى؟</h1>
                  <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
                </div>
                <button type="button" class="btn-start" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  <span>ليه الاستثمار فى دبى</span>
                </button>
              </div>
              <div class="col-12 mb-4">
                <div class="services" id="services">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="content-service d-flex">
                        <div class="icon-service ms-3 d-flex align-items-center">
                          <div class="test">
                            <i class="fa-solid fa-house fa-lg"></i>
                          </div>
                        </div>
                        <div class="text-service text-light">
                          <h3 class="mb-2 fw-bold">تسويق العقارات </h3>
                          <p>نقوم بالترويج لجميع العقارات التي نديرها باستخدام أدوات تسويقية متكاملة بما في ذلك الإنترنت واللوحات الإعلانية والبيع عبر الهاتف ووكلاء التأجير.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="content-service d-flex">
                        <div class="icon-service ms-3 d-flex align-items-center">
                          <div class="test">
                            <i class="fa-solid fa-house fa-lg"></i>
                          </div>
                        </div>
                        <div class="text-service text-light">
                          <h3 class="mb-2 fw-bold">تسويق العقارات </h3>
                          <p>نقوم بالترويج لجميع العقارات التي نديرها باستخدام أدوات تسويقية متكاملة بما في ذلك الإنترنت واللوحات الإعلانية والبيع عبر الهاتف ووكلاء التأجير.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="content-service d-flex">
                        <div class="icon-service ms-3 d-flex align-items-center">
                          <div class="test">
                            <i class="fa-solid fa-house fa-lg"></i>
                          </div>
                        </div>
                        <div class="text-service text-light">
                          <h3 class="mb-2 fw-bold">تسويق العقارات </h3>
                          <p>نقوم بالترويج لجميع العقارات التي نديرها باستخدام أدوات تسويقية متكاملة بما في ذلك الإنترنت واللوحات الإعلانية والبيع عبر الهاتف ووكلاء التأجير.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="light-shape-1"></div>
            <div class="light-shape-2"></div>
            <div class="light-shape-3"></div>
        </div>
      </section>

      <section class="projects pt-5 pb-5" id="Portfolio">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="text-light mb-5">
                <h1 class="fw-bold">أعمالنا</h1>
                <p>يمكنك متابعة أخر اعمالنا</p>
              </div>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-end">
              <div>
                <a href="#contact" class="btn-start">
                  <span>تواصل معنا</span>
              </a>
              </div>
            </div>
          </div>
        <div class="owl-carousel owl-theme" style="direction: ltr;">
          <div class="project-card me-4">
            <div class="image-project">
              <img src="photo/pc1.jpg">
            </div>
            <div class="text-light project-title">
              <button type="button" class="btn-project fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                اسم المشروع
              </button>
              <p>تصنيف</p>
            </div>
          </div>
          <div class="project-card me-4">
            <div class="image-project">
              <img src="photo/pc2.jpg">
            </div>
            <div class="text-light project-title">
              <button type="button" class="btn-project fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                اسم المشروع
              </button>
              <p>تصنيف</p>
            </div>
          </div>
          <div class="project-card me-4">
            <div class="image-project">
              <img src="photo/bh3.jpg">
            </div>
            <div class="text-light project-title">
              <button type="button" class="btn-project fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                اسم المشروع
              </button>
              <p>تصنيف</p>
            </div>
          </div>
          <div class="project-card me-4">
            <div class="image-project">
              <img src="photo/pc2.jpg">
            </div>
            <div class="text-light project-title">
              <button type="button" class="btn-project fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                اسم المشروع
              </button>
              <p>تصنيف</p>
            </div>
          </div>
          <div class="project-card me-4">
            <div class="image-project">
              <img src="photo/bh3.jpg">
            </div>
            <div class="text-light project-title">
              <button type="button" class="btn-project fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                اسم المشروع
              </button>
              <p>تصنيف</p>
            </div>
          </div>
      </div>
    </div>
      </section>

      <!-- contact -->
      <section class="counter contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                 <div class="text-light text-contact">
                  <h1 class="fw-bold">تواصل معنا</h1>
                  <p>يمكننا الرد على جميع اهتماماتك وتوفير كل وسائل الترفية</p>
                 </div>
                 <div class="d-flex text-light mt-5">
                  <div class="fs-3 ms-3">
                    <i class="fa-solid fa-house-chimney"></i>
                  </div>
                  <div>
                    <h4>العنوان</h4>
                    <p class="text-end">دبى</p>
                  </div>
                 </div>
                 <div class="d-flex text-light mt-5">
                  <div class="fs-3 ms-3">
                    <i class="fa-regular fa-envelope-open"></i>
                  </div>
                  <div>
                    <h4>البريد الالكترونى</h4>
                    <a href="mailto: info@yourmail.com" class="text-decoration-none text-white">
                      info@yourmail.com
                  </a>
                  </div>
                 </div>
                 <div class="d-flex text-light mt-5">
                  <div class="fs-3 ms-3">
                    <i class="fa-solid fa-phone-volume"></i>
                  </div>
                  <div class="mb-3">
                    <h4 class="text-end">الجوال</h4>
                    <a href="tel: 457 789 789 65" class="text-decoration-none text-white">
                      + 457 789 789 65
                  </a>
                  </div>
                 </div>
                </div>
                <div class="col-lg-7 col-12">
                  <form class="row form-contact">
                    <div class="col-md-6 col-sm-12 mb-4">
                      <input type="text" class="w-100 edit-input" placeholder="الاسم" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                      <input type="email" class="w-100 edit-input" placeholder="البريد الالكترونى" required>
                    </div>
                      <div class="col-12 mb-4">
                        <input type="email" class="w-100 edit-input" placeholder="الموضوع" required>
                      </div>
                    <div class="col-12">
                      <textarea class="w-100 edit-input" placeholder="الرسالة" required></textarea>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn">
                          <a class="btn-start">
                            <span>تواصل معنا</span>
                        </a>
                        </button>
                    </div>
                  </form>
                </div>
            </div>
            <div class="copyright text-light mt-5">
              <div class="d-flex flex-wrap justify-content-between">
                <p> جميع الحقوق محفوظة 2022 © Top Business </p>
                <div class="social-link">
                 <ul class="list-unstyled d-flex">
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                 </ul>
                </div>
              </div>
            </div>
        </div>
      </section>


    <!-- scroll to top -->
      <a href="#" class="scroll-top">
        <div class="top">
          <i class="fa-solid fa-angle-up fa-lg"></i>
        </div>
      </a>

       <!-- whatsapp -->
       <a href="https://wa.me/920033007" target="_blank" class="whatsapp">
        <img src="photo/wa-whatsapp-icon.svg" alt="no-image">
      </a>



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

<!-- Modal about -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div>
          <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
          <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
        </div>
        <div>
          <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
          <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
        </div>
        <div>
          <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
          <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-12">
              <div class="main-slider" style="direction: ltr;">
                  <div class="school-img">
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                  </div>
                  <div class="school-img">
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                  </div>
                  <div class="school-img">
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                  </div>
                  <div class="school-img">
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                  </div>
                </div>
                  <div class="small-slider" style="direction: ltr;">
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                    <img
                      class="img-fluid"
                      src="photo/bh3.jpg"
                      alt="no image"
                    />
                  </div>
          </div>
          <div class="col-lg-6 col-12">
            <div>
              <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
              <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
            </div>
          </div>
      </div>

      </div>
    </div>
  </div>
</div>

      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/all.min.js"></script>

      <script src="js/jquery-1.10.1.min.js"></script> 

      <script src="js/owl.carousel.min.js"></script>

      <script src="js/slick.min.js"></script>

      <script src="js/main.js"></script>
</body>
</html>