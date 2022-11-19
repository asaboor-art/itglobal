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
              <h5>Contact Us</h5>
              <ul>
                <li><a href="tel:(403)376-3322">Call Us: <strong>(403)376-3322</strong></a></li>
                <li><a href="mailto:info@calgarypaintingcrew.com">Email Us: <strong>info@calgarypaintingcrew.com</strong></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="address-box2">
              <h5>Follow Us</h5>
              <ul>
                <li><a href="javascriptvoid:(0)"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/calgarypaintingcrew/?igshid=ZmVmZTY5ZGE%3D" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="javascriptvoid:(0)"><i class="fa-brands fa-tiktok"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="subscribe-form-sec">
              <form>
                <h5>Sign Up To Our Newsletter:</h5>
                <div class="input-text-field">
                  <input type="email" placeholder="Your Email" class="form-control">
                  <button type="button" class="btn btn-primary">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="copy-right-para">© 2022 Calgary Painting Crew. All rights reserved <strong>|</strong> Designed By <a href="javascriptvoid:(0)">K13.ca</a></p>
          </div>
        </div>
      </div>
</footer>