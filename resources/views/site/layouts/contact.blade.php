<section class="counter contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="text-light text-contact">
                    <h1 class="fw-bold">{{ trans('site.contact_us') }}</h1>
                    <p>{{ trans('site.we_can_answer_all_your_concerns_and_provide_all_the_entertainment') }}</p>
                </div>
                <div class="d-flex text-light mt-5">
                    <div class="fs-3 ms-3">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <div>
                        <h4>{{ trans('site.address') }}</h4>
                        <p class="text-end">{!! $landingPageData->address !!}</p>
                    </div>
                </div>
                <div class="d-flex text-light mt-5">
                    <div class="fs-3 ms-3">
                        <i class="fa-regular fa-envelope-open"></i>
                    </div>
                    <div>
                        <h4>{{ trans('site.email') }}</h4>
                        <a href="mailto: info@yourmail.com" class="text-decoration-none text-white">
                            {{ $landingPageData->email }}
                        </a>
                    </div>
                </div>
                <div class="d-flex text-light mt-5">
                    <div class="fs-3 ms-3">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div class="mb-3">
                        <h4 class="text-end">{{ trans('site.phone') }}</h4>
                        <a href="tel: 457 789 789 65" class="text-decoration-none text-white">
                            {{ $landingPageData->phone }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <form class="row form-contact" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="text" name="name" class="w-100 edit-input" placeholder="{{ trans('site.name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="email" name="email" class="w-100 edit-input" placeholder="{{ trans('site.email') }}"
                            required>
                    </div>
                    <div class="col-12 mb-4">
                        <input type="text" name="subject" class="w-100 edit-input" placeholder="{{ trans('site.subject') }}" required>
                    </div>
                    <div class="col-12">
                        <textarea class="w-100 edit-input" name="message" placeholder="{{ trans('site.message') }}" required></textarea>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn">
                            <a class="btn-start">
                                <span>{{ trans('site.contact_us') }}</span>
                            </a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="copyright text-light mt-5">
            <div class="d-flex flex-wrap justify-content-between">
                <p>  {{ trans('site.all_rights_are_save') }} 2022 © Top Business </p>
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
