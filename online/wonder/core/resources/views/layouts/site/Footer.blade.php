<?php
$tours = \App\Models\Tour::all();
$media = \App\Models\Media::all()->first();
?>
		<!-- Footer Start -->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////     footer      /////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<div id="footer"></div>

		<footer id="footer-section" class="footer-section">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
						@if(app('lang') == 'en')
							<h4 class="footer-title">INFO</h4>
						@elseif(app('lang') == 'ger')
							<h4 class="footer-title">Die Info</h4>
						@elseif(app('lang') == 'frsh')
							<h4 class="footer-title">Info</h4>
						@elseif(app('lang') == 'rsh')
							<h4 class="footer-title">Информация</h4>
						@endif
							<div class="about-widget">
								<p>
									@if(app('lang')=='en')
										{{$media->info}}
									@elseif(app('lang')=='ger')
										{{$media->info_ger}}
									@elseif(app('lang')=='frsh')
										{{$media->info_frsh}}
									@elseif(app('lang')=='rsh')
										{{$media->info_rsh}}
									@endif
								</p>
							</div>
						</div>

						<div class="col-md-3">
						@if(app('lang') == 'en')
							<h4 class="footer-title">Links</h4>
							<ul class="sitemap-widget">
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('/')}}">About-Us</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('contact')}}">Contact Us</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('terms')}}">Terms & Conditions</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('parters')}}">Our Partners</a></li>
							</ul>
						@elseif(app('lang') == 'ger')
							<h4 class="footer-title">Links</h4>
							<ul class="sitemap-widget">
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('/')}}">Über uns</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('contact')}}">Kontaktiere uns</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('terms')}}">Terms & amp; Bedingungen</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('parters')}}">Unsere Partner</a></li>
							</ul>
						@elseif(app('lang') == 'frsh')
							<h4 class="footer-title">Liens</h4>
							<ul class="sitemap-widget">
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('/')}}">À propos de nous</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('contact')}}">Contactez-nous</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('terms')}}">termes et conditions</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('parters')}}">Nos partenaires</a></li>
							</ul>
						@elseif(app('lang') == 'rsh')
							<h4 class="footer-title">Ссылки</h4>
							<ul class="sitemap-widget">
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('/')}}">О нас</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('contact')}}">Связаться с нами</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('terms')}}">Условия использования</a></li>
								<li class="active"><a class="d-flex justify-content-between align-items-center"
										href="{{url('parters')}}">Наши партнеры</a></li>
							</ul>
						@endif
						</div>


						<div class="col-md-3">
							<h4 class="footer-title">
								{{__('Tour List')}}
							</h4>
							<ul class="sitemap-widget">

                                @foreach($tours as $tour)
                                    <li class="active"><a class="d-flex justify-content-between align-items-center"
                                                          href="{{url('tour',$tour->id)}}">
											@if(app('lang')=='en')
												{{$tour->header}}
											@elseif(app('lang')=='ger')
												{{$tour->header_ger}}
											@elseif(app('lang')=='frsh')
												{{$tour->header_frsh}}
											@elseif(app('lang')=='rsh')
												{{$tour->header_rsh}}
											@endif
											 </a></li>
                                @endforeach
							</ul>
						</div>


						<div class="col-md-3">
						@if(app('lang') == 'en')
							<h4 class="footer-title"> Last Offers</h4>
						@elseif(app('lang') == 'ger')
							<h4 class="footer-title"> Letzte Angebote</h4>
						@elseif(app('lang') == 'frsh')
							<h4 class="footer-title"> Dernières offres</h4>
						@elseif(app('lang') == 'rsh')
							<h4 class="footer-title"> Последние предложения</h4>
						@endif
							<form class="footer-subscribe" action="{{url('store_offer')}}" method="post">
                                @csrf
								<input type="text" name="name" class="form-input" placeholder="Name">
								<input type="email" name="email" class="form-input" placeholder="Email">
								<input type="submit" class="form-input" value="Send">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 d-flex align-items-center">
							<div class="copyright ">
							@if(app('lang') == 'en')
								<p>&copy; {{date('Y')}} All Copy Rights Served , <a href="#" target="_blank"> Top Business </a>.</p>
							@elseif(app('lang') == 'ger')
								<p>&copy; {{date('Y')}} Alle Urheberrechte vorbehalten , <a href="#" target="_blank"> Top-Geschäft </a>.</p>
							@elseif(app('lang') == 'frsh')
								<p>&copy; {{date('Y')}} Tous droits dauteur réservés , <a href="#" target="_blank"> Meilleures affaires </a>.</p>
							@elseif(app('lang') == 'rsh')
								<p>&copy; {{date('Y')}} Все авторские права защищены , <a href="#" target="_blank"> Топ Бизнес </a>.</p>
							@endif
							</div>
						</div>
						<div class="col-md-8 col-sm-6">
							<div class="text-right ft-bottom-right ">


								<div class="buttons ">
									<!--Twitter-->
									<a class="btn-floating m-0 btn-sm mx-1 btn-tw waves-effect waves-light" type="button"
										href="{{$media->twitter}}" target="_blank" role="button"><i class="fab fa-twitter"></i></a>

									<!--Instagram-->
									<a class="btn-floating m-0 mx-1 btn-sm btn-ins waves-effect waves-light" type="button"
										href="{{$media->instagram}}" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

									<!--Youtube -->
									<a class="btn-floating m-0 mx-1 btn-sm btn-gplus waves-effect waves-light" type="button"
										href="{{$media->google}}" target="_blank" role="button"><i class="fab fa-youtube"></i></a>

									<!--Facebook-->
									<a class="btn-floating mx-1 m-0 btn-sm  btn-fb waves-effect waves-light" type="button"
										href="{{$media->facebook}}" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>


										<!--VK-->
									<a class="btn-floating mx-1 m-0 btn-sm  btn-vk waves-effect waves-light" type="button"
									    href="{{$media->vk}}" target="_blank" role="button"><i class="fab fa-vk"></i></a>


								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->
