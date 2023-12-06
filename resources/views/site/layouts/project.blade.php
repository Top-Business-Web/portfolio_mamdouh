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
            @foreach ($projects as $project)
                <div class="project-card me-4">
                    <div class="image-project">
                        <img src="{{ asset('storage/'. $project->images) }}">
                    </div>
                    <div class="text-light project-title">
                        <button type="button" class="btn-project fs-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            {{ json_decode($project->title)->{app()->getLocale()} }}
                        </button>
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
                        <div class="main-slider" style="direction: ltr;">
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            </div>
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            </div>
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            </div>
                            <div class="school-img">
                                <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            </div>
                        </div>
                        <div class="small-slider" style="direction: ltr;">
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div>
                            <h3 class="fw-bold mb-2 main-color">لماذا تقوم باختيارى؟</h3>
                            <p class="lh-lg">نقوم بإدارة كافة الشؤون الإدارية وما يتعلق بتوقيع عقود إيجار جديدة أو
                                تجديدها من قبل المستأجرين الأفراد أو الشركات.نقوم بالتفاوض على سعر وعقد الإيجار مع
                                المستأجرين وفقاً للشروط المتفق عليها مسبقاً مع المالك، كما يقوم فريق مختص بتحصيل الإيجار
                                ويعمل مع الفريق القانوني للشركة لمتابعة تحصيل المبالغ من المتخلفين عن السداد؛ ويقوم
                                الفريق القانوني عند الحاجة بتمثيل المالك في حل أي مشكلة أو نزاع متعلق بالجهات الحكومية
                                مثل لجنة الإيجارات وبلدية دبي.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
