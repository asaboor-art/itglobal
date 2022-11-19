<section class="work-with-us-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="work-with-content">
            <h2 class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">{{ trans('lang.work_with_us_ques') }}</h2>
            </div>  
          </div>
        </div>
        <div class="row col-setting">
          <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <div class="circle-text wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="{{ asset(config('site_config.assets.images').'cr1.png') }}" alt="image" class="img-fluid">
              <h5>{{ config('site_config.constants.warranty') }}-{{ strtolower(trans('lang.years'))}} <span>{{trans('lang.warranty')}}</span></h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <div class="circle-text wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
              <img src="{{ asset(config('site_config.assets.images').'cr2.png') }}" alt="image" class="img-fluid">
              <h5>{{trans('lang.no')}} <span>{{trans('lang.subcontractors')}}</span></h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <div class="circle-text wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">
              <img src="{{ asset(config('site_config.assets.images').'cr3.png') }}" alt="image" class="img-fluid">
              <h5>{{trans('lang.free')}} {{trans('lang.colour')}} <span>{{trans('lang.consult')}} {{trans('lang.and')}} {{trans('lang.colour')}}</span> {{trans('lang.box_samples')}}</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <div class="circle-text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.4s">
              <img src="{{ asset(config('site_config.assets.images').'cr4.png') }}" alt="image" class="img-fluid">
              <h5>{{trans('lang.licensed')}} <span>{{trans('lang.and')}} {{trans('lang.insured')}}</span></h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <div class="circle-text wow fadeInRight" data-wow-duration="1.6s" data-wow-delay="1.6s">
              <img src="{{ asset(config('site_config.assets.images').'cr5.png') }}" alt="image" class="img-fluid">
              <h5>{{trans('lang.solid')}} <span>{{trans('lang.reputation')}}</span></h5>
            </div>
          </div>
        </div>
      </div>
    </section>