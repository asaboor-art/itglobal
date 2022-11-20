<footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer-content">
              <a href="index.html"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
              <p>Small and medium-sized assignments that other contractors aren't interested in are our area of expertise.</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            <div class="footer-content">
              <h5>Menu</h5>
              <ul>
                <li><a href="{{ route('home')}}">{{ trans('lang.home') }}</a></li>
                <li><a href="{{ route('site-pages','about-us') }}">{{ trans('lang.about_us') }}</a></li>
                <li><a href="{{ route('site-pages','services') }}">{{ trans('lang.services') }}</a></li>
                <li><a href="{{ route('site-pages','contact-us') }}">{{ trans('lang.contact') }}</a></li>
              </ul>
            </div>
          </div>
         <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="address-box">
              <h5>{{ trans('lang.contact')}}</h5>
              <ul>
                <li><a href="tel:{{ config('site_config.contacts.phone')}}">{{ trans('lang.call_us')}}: <strong>{{ config('site_config.contacts.phone')}}</strong></a></li>
                <li><a href="mailto:info@calgarypaintingcrew.com">{{ trans('lang.email_us')}}: <strong>{{ config('site_config.contacts.email')}}</strong></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="address-box2">
              <h5>{{ trans('lang.follow_us')}}</h5>
              <ul>
                <li><a href="{{ config('site_config.contacts.facebook')}}"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="{{ config('site_config.contacts.instagram')}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="{{ config('site_config.contacts.tiktok')}}"><i class="fa-brands fa-tiktok"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        @include('sections.newsletterv1')
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="copy-right-para">{{ config('site_config.contacts.copyright')}}<strong>|</strong>{{ trans('lang.designed_by')}} <a href="javascriptvoid:(0)">{{ config('site_config.contacts.developer')}}</a></p>
          </div>
        </div>
      </div>
</footer>