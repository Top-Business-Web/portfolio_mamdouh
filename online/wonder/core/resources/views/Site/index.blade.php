 @extends('layouts/site/app')

 @section('meta_tags', $about->meta_tags)

 @section('meta_description', $about->meta_description)



 @section('site')

     <section id="MainSlider" style="height: 470px">
         <div class="swiper-container MainSlider-container ">
             <div class="swiper-wrapper">

                 @foreach ($slider as $image)
                     {{-- @dd(mime_content_type($image->image)) --}}
                     {{-- @if (strstr(mime_content_type($image->image), 'video/')) --}}
                     {{-- <video class="myVideo swiper-slide mainSlideItem " --}}
                     {{-- style="max-width: 100%; max-height: 100%; margin-top:8px ;background-color: white" muted --}}
                     {{-- loop controls autoplay> --}}
                     {{-- <source src="{{$image->image}}" type="video/mp4"> --}}
                     {{-- </video> --}}
                     {{-- @else --}}
                     <div class="swiper-slide mainSlideItem"
                         style="background-image:url({{ get_file($image->image) }}); height:470px">
                         <div class=" sliderOverlay"></div>
                         <div class=" p-5">
                             <h1>
                                 @if (app('lang') == 'en')
                                     {{ $image->header }}
                                 @elseif(app('lang') == 'ger')
                                     {{ $image->header_ger }}
                                 @elseif(app('lang') == 'frsh')
                                     {{ $image->header_frsh }}
                                 @elseif(app('lang') == 'rsh')
                                     {{ $image->header_rsh }}
                                 @endif
                             </h1>
                             <p>
                                 @if (app('lang') == 'en')
                                     {{ $image->title }}
                                 @elseif(app('lang') == 'ger')
                                     {{ $image->title_ger }}
                                 @elseif(app('lang') == 'frsh')
                                     {{ $image->title_frsh }}
                                 @elseif(app('lang') == 'rsh')
                                     {{ $image->title_rsh }}
                                 @endif
                             </p>

                             {{-- <a href="{{url($image->link)}}" class=" btn btn-rounded "> --}}
                             {{-- @if (app('lang') == 'en') --}}
                             {{-- {{$image->text}} --}}
                             {{-- @elseif(app('lang')=='ger') --}}
                             {{-- {{$image->text_ger}} --}}
                             {{-- @elseif(app('lang')=='frsh') --}}
                             {{-- {{$image->text_frsh}} --}}
                             {{-- @elseif(app('lang')=='rsh') --}}
                             {{-- {{$image->text_rsh}} --}}
                             {{-- @endif --}}
                             {{-- </a> --}}
                         </div>
                         {{-- @endif --}}
                     </div>
                 @endforeach

             </div>

         </div>

     </section>




     <!--////////////////////////////////////////////////////////////////////////////////-->
     <!--////////////////////////////////////////////////////////////////////////////////-->
     <!--////////////////////////////////////////////////////////////////////////////////-->
     <!--/////////////////////////////    index-contents        /////////////////////////////////////////-->
     <!--////////////////////////////////////////////////////////////////////////////////-->
     <!--////////////////////////////////////////////////////////////////////////////////-->
     <!--////////////////////////////////////////////////////////////////////////////////-->

     {{-- @dd(app()->getLocale()) --}}
     <div class="index-contents" id="WELCOME" style="padding-top: 70px">
         <div class="container">
             <div class="row">
                 <div class="col-md-9" data-aos="fade-up">
                     @if (app('lang') == 'en')
                         <h3 class="font-weight-bold title text-center py-4">{{ $about->welcome_world['en'] }}</h3>
                         <h5 class="font-weight-bold  py-4">{{ $about->sub_welcome_world['en'] }}</h5>
                     @elseif(app('lang') == 'ger')
                         <h3 class="font-weight-bold title text-center py-4">{{ $about->welcome_world['ger'] }}</h3>
                         <h5 class="font-weight-bold  py-4">{{ $about->sub_welcome_world['ger'] }}</h5>
                     @elseif(app('lang') == 'frsh')
                         <h3 class="font-weight-bold title text-center py-4">{{ $about->welcome_world['frsh'] }}</h3>
                         <h5 class="font-weight-bold  py-4">{{ $about->sub_welcome_world['frsh'] }}</h5>
                     @elseif(app('lang') == 'rsh')
                         <h3 class="font-weight-bold title text-center py-4">{{ $about->welcome_world['rsh'] }}</h3>
                         <h5 class="font-weight-bold  py-4">{{ $about->sub_welcome_world['rsh'] }}</h5>
                     @endif

                     <div class="row">
                         @foreach ($tours as $tour)
                             <div class="col-md-4 mb-3  px-0">
                                <a href="{{ route('category.index', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                 <div class="img-hov" style="width: 100%;height: 100%">
                                     <img src="{{ get_file($tour->image) }}" alt="Avatar" class="image">
                                     <div class="overlay">
                                         <div class="text" style="font-weight: bold !important;">
                                             @if (app('lang') == 'en')
                                                 {{ $tour->header }}
                                             @elseif(app('lang') == 'ger')
                                                 {{ $tour->header_ger }}
                                             @elseif(app('lang') == 'frsh')
                                                 {{ $tour->header_frsh }}
                                             @elseif(app('lang') == 'rsh')
                                                 {{ $tour->header_rsh }}
                                             @endif
                                         </div>
                                     </div>
                                 </div>
                                 </a>
                             </div>
                         @endforeach

                     </div>


                     @if (app('lang') == 'en')
                         <h5 class="font-weight-bold tours  py-3">Top Tours in Egypt Excursions Online</h5>
                     @elseif(app('lang') == 'ger')
                         <h5 class="font-weight-bold tours  py-3">Top Touren in Ägypten Exkursionen online</h5>
                     @elseif(app('lang') == 'frsh')
                         <h5 class="font-weight-bold tours  py-3">Top Tours en Egypte Excursions en ligne</h5>
                     @elseif(app('lang') == 'rsh')
                         <h5 class="font-weight-bold tours  py-3">Лучшие туры в Египет Экскурсии онлайн</h5>
                     @endif

                     @foreach ($categories as $category)
                         <!-- tour   offer -->
                         <div class="row  tours-row  my-4" data-aos="fade-up" style="min-height: 170px;">
                             <div class="col-md-3 px-0">

                                 <a href="{{ url('tour-program', $category->id) }}">

                                     @if ($category->file_type == 'image')
                                         {{-- <a data-fancybox="gallery" target="_blank" --}}
                                         <a href="{{ url('tour-program', $category->id) }}">
                                             <img src="{{ get_file($category->image) }}" class="tour-img" alt=""
                                                 width="100%" height="100%">
                                         </a>
                                     @elseif($category->file_type == 'video')
                                         <a href="{{ url('tour-program', $category->id) }}" target="_blank">
                                             <video style="height: 100%;width: 100%" height="auto" controls>
                                                 <source src="{{ url($category->image) }}" id="video_here">
                                                 Your browser does not support HTML5 video.
                                             </video>
                                         </a>
                                     @endif
                                     {{-- <img src="{{get_file($category->image)}}" class="tour-img" alt="" width="100%" height="100%"> --}}

                                     @if ($category->has_offer == 'yes')
                                         <a href="{{ url('tour-program', $category->id) }}">
                                             @if (app('lang') == 'en')
                                                 <div class="offer"
                                                     style="background-image: url({{ url('site') }}/img/offer.png);
@elseif(app('lang') == 'ger')
<div class="
                                                     offer"
                                                     style="background-image: url({{ url('site') }}/img/offer-ger.png);
@elseif(app('lang') == 'frsh')
<div class="
                                                     offer"
                                                     style="background-image: url({{ url('site') }}/img/offer-fre.png);
@elseif(app('lang') == 'rsh')
<div class="
                                                     offer"
                                                     style="background-image: url({{ url('site') }}/img/offer-rus.png);
@endif

                                            position: absolute;
                                            width: 100%;
                                            font-size: 0;
                                            left: -8px;
                                            height: 100%;
                                            top: -7px;
                                            background-repeat: no-repeat;">
                                                 </div>
                                         </a>
                                     @endif
                                 </a>
                             </div>
                             <div class="col-md-9 p-2 position-relative">
                                 <a href="{{ url('tour-program', $category->id) }}">
                                     <h3 class="font-weight-bold py-1 pt-2">
                                         @if (app('lang') == 'en')
                                             {{ $category->header }}
                                         @elseif(app('lang') == 'ger')
                                             {{ $category->header_ger }}
                                         @elseif(app('lang') == 'frsh')
                                             {{ $category->header_frsh }}
                                         @elseif(app('lang') == 'rsh')
                                             {{ $category->header_rsh }}
                                         @endif
                                     </h3>
                                 </a>
                                 <small class="">
                                     @if (app('lang') == 'en')
                                         {{ $category->title }}
                                     @elseif(app('lang') == 'ger')
                                         {{ $category->title_ger }}
                                     @elseif(app('lang') == 'frsh')
                                         {{ $category->title_frsh }}
                                     @elseif(app('lang') == 'rsh')
                                         {{ $category->title_rsh }}
                                     @endif
                                 </small>
                                 @if (app('lang') == 'en')
                                     <p class="mt-2">Duration : &nbsp; &nbsp; &nbsp;
                                         @if (app('lang') == 'en')
                                             {{ $category->duration }}
                                         @elseif(app('lang') == 'ger')
                                             {{ $category->duration_ger }}
                                         @elseif(app('lang') == 'frsh')
                                             {{ $category->duration_frsh }}
                                         @elseif(app('lang') == 'rsh')
                                             {{ $category->duration_rsh }}
                                         @endif
                                     </p>
                                 @elseif(app('lang') == 'ger')
                                     <p class="mt-2">Dauer : &nbsp; &nbsp; &nbsp;
                                         @if (app('lang') == 'en')
                                             {{ $category->duration }}
                                         @elseif(app('lang') == 'ger')
                                             {{ $category->duration_ger }}
                                         @elseif(app('lang') == 'frsh')
                                             {{ $category->duration_frsh }}
                                         @elseif(app('lang') == 'rsh')
                                             {{ $category->duration_rsh }}
                                         @endif
                                     </p>
                                 @elseif(app('lang') == 'frsh')
                                     <p class="mt-2">Durée : &nbsp; &nbsp; &nbsp;
                                         @if (app('lang') == 'en')
                                             {{ $category->duration }}
                                         @elseif(app('lang') == 'ger')
                                             {{ $category->duration_ger }}
                                         @elseif(app('lang') == 'frsh')
                                             {{ $category->duration_frsh }}
                                         @elseif(app('lang') == 'rsh')
                                             {{ $category->duration_rsh }}
                                         @endif
                                     </p>
                                 @elseif(app('lang') == 'rsh')
                                     <p class="mt-2">Продолжительность : &nbsp; &nbsp; &nbsp;
                                         @if (app('lang') == 'en')
                                             {{ $category->duration }}
                                         @elseif(app('lang') == 'ger')
                                             {{ $category->duration_ger }}
                                         @elseif(app('lang') == 'frsh')
                                             {{ $category->duration_frsh }}
                                         @elseif(app('lang') == 'rsh')
                                             {{ $category->duration_rsh }}
                                         @endif
                                     </p>
                                 @endif
                                 {{-- @if ($category->tour_type != null) --}}
                                 {{-- <p>{{__('Tour Type')}} : &nbsp; &nbsp; &nbsp; --}}

                                 {{-- @if (app('lang') == 'en') --}}
                                 {{-- {{$category->tour_type->title}} --}}
                                 {{-- @elseif(app('lang')=='ger') --}}
                                 {{-- {{$category->tour_type->title_ger}} --}}
                                 {{-- @elseif(app('lang')=='frsh') --}}
                                 {{-- {{$category->tour_type->title_frsh}} --}}
                                 {{-- @elseif(app('lang')=='rsh') --}}
                                 {{-- {{$category->tour_type->title_rsh}} --}}
                                 {{-- @endif --}}
                                 {{-- {{$category->tour_type->title}} --}}
                                 {{-- </p> --}}
                                 {{-- @endif --}}
                                 {{-- @if ($category->guide_language->count() != 0) --}}
                                 {{-- <p class="mb-2">{{__('The language of the guide')}} : &nbsp; &nbsp; --}}
                                 {{-- @foreach ($category->guide_language as $key => $languages) --}}
                                 {{-- @if ($key == 0) --}}
                                 {{-- @if (app('lang') == 'en') --}}
                                 {{-- {{$languages->language->name}} --}}
                                 {{-- @elseif(app('lang')=='ger') --}}
                                 {{-- {{$languages->language->name_ger}} --}}
                                 {{-- @elseif(app('lang')=='frsh') --}}
                                 {{-- {{$languages->language->name_frsh}} --}}
                                 {{-- @elseif(app('lang')=='rsh') --}}
                                 {{-- {{$languages->language->name_rsh}} --}}
                                 {{-- @endif --}}
                                 {{-- @else --}}
                                 {{-- - --}}
                                 {{-- @if (app('lang') == 'en') --}}
                                 {{-- {{$languages->language->name}} --}}
                                 {{-- @elseif(app('lang')=='ger') --}}
                                 {{-- {{$languages->language->name_ger}} --}}
                                 {{-- @elseif(app('lang')=='frsh') --}}
                                 {{-- {{$languages->language->name_frsh}} --}}
                                 {{-- @elseif(app('lang')=='rsh') --}}
                                 {{-- {{$languages->language->name_rsh}} --}}
                                 {{-- @endif --}}
                                 {{-- @endif --}}
                                 {{-- @endforeach --}}
                                 {{-- </p> --}}
                                 {{-- @endif --}}


                                 <div class="book-div p-2">
                                     <p class=" my-2 font-weight-bold">{{ __('Price starts from') }}: <span>
                                             @if (session()->get('currency') == 'dollar')
                                                 $ {{ $category->adult_price }}
                                             @else
                                                 € {{ $category->adult_price_euro }}
                                             @endif
                                             @if ($category->has_offer == 'yes')
                                                 <small class="font-weight-bold" style="text-decoration: line-through;">
                                                     @if (session()->get('currency') == 'dollar')
                                                         $ {{ $category->old_adult_price }}
                                                     @else
                                                         € {{ $category->old_adult_price_euro }}
                                                     @endif
                                                 </small>
                                             @endif

                                         </span> {{ __('Per person') }} </p>
                                     <div class="w-100 d-flex align-items-center justify-content-center">
                                         @if (app('lang') == 'en')
                                             <a class="btn" href="{{ url('tour-program', $category->id) }}">Show
                                                 Details</a>
                                         @elseif(app('lang') == 'ger')
                                             <a class="btn" href="{{ url('tour-program', $category->id) }}">Mehr
                                                 anzeigen</a>
                                         @elseif(app('lang') == 'frsh')
                                             <a class="btn" href="{{ url('tour-program', $category->id) }}">Afficher les
                                                 détails</a>
                                         @elseif(app('lang') == 'rsh')
                                             <a class="btn"
                                                 href="{{ url('tour-program', $category->id) }}">ПОДРОБНЕЕ</a>
                                         @endif
                                     </div>
                                 </div>

                             </div>
                         </div>
                     @endforeach


                 </div>
                 <div class="col-md-3" data-aos="fade-up">
                     <div class="col-3-contents p-2">
                         @if (app('lang') == 'en')
                             <h4 class="right-title py-2">One of our main tasks is good quality excursions and lower prices
                             </h4>
                         @elseif(app('lang') == 'ger')
                             <h4 class="right-title py-2">Unser Ziel ist es ihnen perfekte und professionelle Ausflüge zu
                                 bieten in kleinen Gruppen oder privat und mit der besten Preise</h4>
                         @elseif(app('lang') == 'frsh')
                             <h4 class="right-title py-2">Une de nos principales tâches est des excursions de bonne qualité
                                 et des prix plus bas</h4>
                         @elseif(app('lang') == 'rsh')
                             <h4 class="right-title py-2">Одна из главных наших задач — это хорошее качество экскурсий и
                                 более низкие цены</h4>
                         @endif
                         <div class="textwidget">
                             <ul class="sidepages pt-3">
                                 @foreach ($tours as $tour)
                                     <li><a href="{{ url('tour', $tour->id) }}">
                                             {{-- {{$tour->header}} --}}
                                             @if (app('lang') == 'en')
                                                 {{ $tour->header }}
                                             @elseif(app('lang') == 'ger')
                                                 {{ $tour->header_ger }}
                                             @elseif(app('lang') == 'frsh')
                                                 {{ $tour->header_frsh }}
                                             @elseif(app('lang') == 'rsh')
                                                 {{ $tour->header_rsh }}
                                             @endif
                                         </a></li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 @endsection
