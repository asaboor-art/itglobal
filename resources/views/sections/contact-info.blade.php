<section class="inquires-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="inquiry-content">
              <h2><span class="email-gen">{{ trans('lang.general')}}</span> {{ trans('lang.inquires')}}</h2>
              <ul>
<<<<<<< Updated upstream
                <li><a href="mailto:info@calgarypaintingcrew.com">{{ trans('lang.email')}}: <span class="email-tag">{{ config('site_config.contacts.email')}}</span></a></li>
                <li><a href="tel:{{ config('site_config.contacts.phone')}}">{{ trans('lang.phone')}}:<span class="email-tag">{{ config('site_config.contacts.phone')}}</span></a></li>
                <li><a href="javascriptvoid:(0)">{{ trans('lang.address')}}:<span class="email-tag">{{ config('site_config.contacts.address')}}</span> <span class="email-tag">{{ trans('content.contact1') }}</span></a></li>
=======
                <li><a href="mailto:info@calgarypaintingcrew.com">Email: <span class="email-tag">info@calgarypaintingcrew.com</span></a></li>
                <li><a href="tel:(403)376-3322">Phone:<span class="email-tag">(403)376-3322</span></a></li>
                <li><a href="javascriptvoid:(0)">Location:<span class="email-tag">328 40 Ave NE Calgary,AB T2E 2M7</span> <span class="email-tag">(Servicing Calgary & Surrounding Areas)</span></a></li>
>>>>>>> Stashed changes
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <!--  <div class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.0587510432074!2d-114.0582784840989!3d51.0889232490344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371650ab6989337%3A0xe8cea1ba3c010a70!2s328%2040%20Ave%20NE%2C%20Calgary%2C%20AB%20T2E%202M7%2C%20Canada!5e0!3m2!1sen!2s!4v1666913613719!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->
            <div class="roller-man-content">
              <h2><span>{{ trans('lang.send_us')}} {{ strtoupper(trans('lang.a')) }}</span> {{ trans('lang.message')}}</h2>
              <form class="contact-form" method="POST">
                <div class="contact-success"></div>
                <div class="contact-error"></div>
                <div class="form-group">
                  <input type="text" class="form-control first_name" placeholder="{{ trans('lang.name') }}">
                  <div class="error-first_name errors"></div>
                </div>
                <!-- <div class="form-group">
                  <input type="text" class="form-control last_name" placeholder="Last Name">
                  <div class="error-last_name errors"></div>
                </div> -->
                <div class="form-group">
                  <input type="email" class="form-control email" placeholder="{{ trans('lang.email')}}">
                  <div class="error-email errors"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control subject" placeholder="{{ trans('lang.subject')}}">
                  <div class="error-subject errors"></div>
                </div>
                <div class="form-group">
                  <textarea cols="1" rows="1" placeholder="Message" class="form-control message"></textarea>
                  <div class="error-message errors"></div>
                </div>
                <div class="form-btn">
                  <button type="submit" class="btn btn-primary">{{ strtoupper(trans('lang.send')) }}</button>
                </div>
                <p>Looking to do a project outside of Calgary? We are able to do projects <span class="any-text">anywhere in the USA or Canada. <a href="javascriptvoid:(0)">Contact us here for more information.</a></span></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>