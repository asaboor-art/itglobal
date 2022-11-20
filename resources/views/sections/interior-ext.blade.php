<section class="interior-exterior-sec">
      <div class="container-fluid">
        <div class="row designer-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="interior-exterior-content">
              <h2 class="wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.6s">{{ trans('lang.interior') }}</h2>
              <p class="wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">{{ trans('content.interior1') }}</p>
              <p class="wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="1.2s">{{ trans('content.interior2') }}</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="interior-exterior-img wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="{{ asset(config('site_config.assets.images').'int1.png') }}" alt="image" class="img-fluid">
              <div class="inner-img">
                <img src="{{ asset(config('site_config.assets.images').'int2.png') }}" alt="image" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="row designer-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="interior-exterior-img2 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="{{ asset(config('site_config.assets.images').'int4.png') }}" alt="image" class="img-fluid second-img">
              <div class="inner-img2">
                <img src="{{ asset(config('site_config.assets.images').'int3.png') }}" alt="image" class="img-fluid one-img">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="interior-exterior-content2">
              <h2 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">{{ trans('lang.exterior') }}</h2>
              <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">{{ trans('content.exterior1') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>