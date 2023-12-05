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
