<!-- FOOTER SECTION BEGIN -->
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="footer-first-contemt">
					<a href="http://itglobal.test"><img src="{{ asset(config('site_config.assets.images').'logo.png') }}" alt="image" class="img-fluid"></a>
					<p>All of your digital marketing requirements are taken care of by our business and our team of qualified professionals. As a result, we can satisfy everyone's needs. Almost all facets of the field are covered by our digital marketing services.
						<!-- <a href="javascriptvoid:(0)" class="rd-mr">READ MORE</a>  -->
					</p>
					<ul>
						<li><a href="{{ config('site_config.contacts.facebook')}}"><i class="fa fa-facebook"></i></a></li>
						<!-- <li><a href="{{ config('site_config.contacts.twitter')}}"><i class="fa fa-twitter"></i></a></li> -->
						<li><a href="{{ config('site_config.contacts.linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="{{ config('site_config.contacts.instragram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-12">
				<div class="qc-links">
					<h4>Quick Links</h4>
					@php 
                            $Menus = config('site_config.menus.footer_menu1');
                        @endphp
					<ul>
					@if(true)
                        @foreach($Menus as $key => $menu)
                            @if(!$menu['is_main'])
                            <li>
                                <a href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-12">
				<div class="qc-links">
					<h4>Services</h4>
					@php 
                            $Menus = config('site_config.menus.footer_menu2');
                        @endphp
					<ul>
					@if(true)
                        @foreach($Menus as $key => $menu)
                            @if(!$menu['is_main'])
                            <li>
                                <a href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-12">
				<div class="qc-links">
					<h4>{{ trans('lang.contact')}}</h4>
					<ul>
						<li><a href="{{ route('home') }}"><i class="fa fa-globe" aria-hidden="true"></i> {{ config('site_config.contacts.website')}}</a></li>
						<li><a href="tel:{{ config('site_config.contacts.phone')}}"><i class="fa fa-phone" aria-hidden="true"></i> {{ config('site_config.contacts.phone')}}</a></li>
						<li><a href="mailto:{{ config('site_config.contacts.email')}}"><i class="fa fa-envelope" aria-hidden="true"></i> {{ config('site_config.contacts.email')}}</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row k13-link">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
			<p class="copy-right-para">{{ config('site_config.contacts.copyright')}}<strong>|</strong>{{ trans('lang.designed_by')}} <a href="javascriptvoid:(0)">{{ config('site_config.contacts.developer')}}</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER SECTION END -->