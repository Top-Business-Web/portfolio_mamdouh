@extends('site.layout')

@section('content')
  
<!-- Landing section -->
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

    <!-- Counter section -->
    <section class="counter">
      <div class="container">
          <div class="row text-light">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <span class="num">{{ $landingPageData->project_successfully }}+</span>
                  <h3>المشاريع الجديدة</h3>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <span class="num">{{ $landingPageData->best_customers }}+</span>
                  <h3> أفضل العملاء</h3>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <span class="num">{{ $landingPageData->years_experience }}+</span>
                  <h3>سنوات الخبرة</h3>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <span class="num">{{ $landingPageData->customers }}+</span>
                  <h3> العملاء</h3>
              </div>
          </div>
      </div>
    </section>

    <!-- About section -->
    <!-- resources/views/about.blade.php -->

<!-- Content for the about section -->
<section class="about-section pb-5" id="about">
  <div class="container">
      <div class="row mt-5">
          <div class="col-lg-6 col-12">
              <div class="about-image">
                  <div style="z-index: 999;">
                      <img src="{{ asset('storage/' . $landingPageData->image_description) }}">
                  </div>
                  <div class="line-shape d-none d-lg-none d-xl-block">
                      <svg viewBox="0 0 691 698" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M194.745 7.73158L682.884 476.323C692.602 485.652 688.577 502.003 675.639
                          505.755L25.7575 694.2C12.8189 697.952 0.670987 686.29 3.89112 673.209L165.633
                          16.173C168.853 3.09205 185.027 -1.59763 194.745 7.73158Z" stroke="#DAA971"
                              stroke-width="5">
                          </path>
                      </svg>
                  </div>
                  <div class="line-shape-2 d-none d-lg-none d-xl-block">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 654 194" fill="none">
                          <path d="M652.815 2.4759L0.769775 190.91" stroke="#DAA971" stroke-width="5"></path>
                          <defs>
                              <linearGradient id="paint0_linear_58_165" x1="326.792" y1="96.693" x2="327.07"
                                  y2="97.6537" gradientUnits="userSpaceOnUse">
                                  <stop offset="0" stop-color="#F2CD8C"></stop>
                                  <stop offset="1" stop-color="#CC9260"></stop>
                              </linearGradient>
                          </defs>
                      </svg>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-12 mt-5">
              <div class="text-about text-light">
                  <h1 class="fw-bold mb-4">لماذا تقوم باختيارى؟</h1>
                  <p class="lh-lg">{!! json_decode($landingPageData->description_about)->{app()->getLocale()} !!}</p>
              </div>
              <button type="button" class="btn-start" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  <span>ليه الاستثمار فى دبى</span>
              </button>
          </div>
          <div class="col-12 mb-4">
              <div class="services" id="services">
                  <div class="row">
                      @foreach ($services as $service)
                          <div class="col-lg-4 col-md-6 col-12">
                              <div class="content-service d-flex">
                                  <div class="icon-service ms-3 d-flex align-items-center">
                                      <div class="test">
                                          <img src="{{ asset('storage/' ,$service->icon) }}" >
                                      </div>
                                  </div>
                                  <div class="text-service text-light">
                                      <h3 class="mb-2 fw-bold">{{ json_decode($service->title)->{app()->getLocale()} }}</h3>
                                      <p>{!! json_decode($service->description)->{app()->getLocale()} !!}</p>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
      <div class="light-shape-1"></div>
      <div class="light-shape-2"></div>
      <div class="light-shape-3"></div>
  </div>
</section>

<!-- Modal about -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body">
              <div>
                  <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
                  <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من
                      قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط
                      المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة
                      لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في
                      حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
              </div>
              <div>
                  <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
                  <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من
                      قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط
                      المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة
                      لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في
                      حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
              </div>
              <div>
                  <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
                  <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو تجديدها من
                      قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع المستأجرين وفقاً للشروط
                      المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار ويعمل مع الفريق القانوني للشركة
                      لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم الفريق القانوني عند الحاجة بتمثيل المالك في
                      حل أي مشكلة أو نزاع متعلق بالجهات الحكومية مثل لجنة الإيجارات وبلدية دبي.</p>
              </div>
          </div>
      </div>
  </div>
</div>

    <!-- Project section -->
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
              @foreach ($projects as $index => $project)
                  <div class="project-card me-4">
                      <div class="image-project">
                          <img src="{{ asset('storage/' . json_decode($project->images)[0]) }}">
                      </div>
                      <div class="text-light project-title">
                          <a href="{{ route('projectDetail.show', $project->id) }}"><button type="button" class="btn-project fs-3" data-bs-toggle="modal"
                              data-bs-target="#exampleModal2" data-project-id="{{ $project->id }}"
                              data-project-title="{{ json_decode($project->title)->{app()->getLocale()} }}"
                              data-project-description="{{ json_decode($project->description)->{app()->getLocale()} }}"
                              data-project-images="{{ $project->images }}">
                              {{ json_decode($project->title)->{app()->getLocale()} }}
                          </button></a>
                          <p>{{ json_decode($project->classification)->{app()->getLocale()} }}</p>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-lg-6 col-12">
                          <div class="main-slider projectModalImage" style="direction: ltr;">
  
                          </div>
                          <div class="small-slider projectModalSmallImage" style="direction: ltr;">
                              {{-- @foreach (json_decode($project->images) as $item)
                              <img class="img-fluid" src="storage/{{ $item }}" alt="no image" />
                              @endforeach --}}
  
                              <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                              <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                              <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                          </div>
                      </div>
                      <div class="col-lg-6 col-12">
                          <div>
                              <h3 id="projectModalTitle" class="fw-bold mb-2 main-color title"></h3>
                              <p id="projectModalDescription" class="lh-lg"></p>
                          </div>
                      </div>
                  </div>
  
              </div>
          </div>
      </div>
  </div>

@endsection

@section('js')
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Get all buttons with the class 'btn-project'
          const projectButtons = document.querySelectorAll('.btn-project');
  
          // Add click event listener to each button
          projectButtons.forEach(function(button) {
              button.addEventListener('click', function() {
                  // Retrieve the projectId, title, description, and images from the button's attributes
                  const projectId = this.getAttribute('data-project-id');
                  const projectTitle = this.getAttribute('data-project-title');
                  const projectDescription = this.getAttribute('data-project-description');
                  const projectImages = this.getAttribute('data-project-images');
                  let projectImagesArray = JSON.parse(projectImages);
                  console.log(projectImagesArray[0])
  
                  var divDataP = '<div class="school-img"><img class="img-fluid" src="storage/' + projectImagesArray[0] + '" alt="no image" /></div>';
                  $('.projectModalImage').html(divDataP);
                  var divDataS = ''; // Initialize an empty string to store small slider images
                  for (let i = 0; i < projectImagesArray.length; i++) {
                      divDataS += '<img class="img-fluid" src="storage/' + projectImagesArray[i] +'" alt="no image" />';
                  }
  
                  $('.projectModalSmallImage').html(divDataS);
  
                  // Update the modal content with the project details    
                  document.getElementById('projectModalTitle').innerText = projectTitle;
                  document.getElementById('projectModalDescription').innerText =
                      projectDescription;
                  // document.getElementById('projectModalImage').src = projectImages;
  
                  // If you're using a modal library, you can trigger the modal here
                  // For example, if you're using Bootstrap:
                  $('#exampleModal2').modal('show');
              });
          });
      });
  </script>
  @endsection