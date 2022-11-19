<footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="footer-content">
              <a href="index.html"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
              <p>{{ trans('content.footer') }}</p>
              <ul>
                <li><a href="{{ route('home')}}">{{ trans('lang.home') }}</a></li>
                <li><a href="{{ route('site-pages','about-us') }}">{{ trans('lang.about_us') }}</a></li>
                <li><a href="{{ route('site-pages','services') }}">{{ trans('lang.services') }}</a></li>
                <li><a href="{{ route('site-pages','contact-us') }}">{{ trans('lang.contact') }}</a></li>
              </ul>
            </div>
            <div class="address-box">
              <ul>
                <li><a href="tel:123 123 1234">{{ trans('lang.call_us') }}: <strong>{{ config('site_config.contacts.phone')}}</strong></a></li>
                <li><a href="mailto:{{ config('site_config.contacts.email')}}">{{ trans('lang.email_us') }}: <strong>{{ config('site_config.contacts.email')}}</strong></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</footer>
<!-- COPY RIGHT SECTION BEGIN -->
<section class="copy-right-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <p>{{ config('site_config.contacts.copyright')}}</p>
          </div>
        </div>
      </div>
    </section>
    <!-- COPY RIGHT SECTION END -->