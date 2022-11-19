<!-- EXPERIENCE SECTION BEGIN -->
<section class="experience-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="experience-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="images/experience-img.png" alt="image" class="img-fluid">
              <div class="experience-design">
                <img src="{{ asset(config('site_config.assets.images').'bg-design2.png') }}" alt="image" class="img-fluid">
              </div>
              <div class="experience-img-text">
                <h6><span>{{ config('site_config.constants.experience') }}+</span> {{ trans('lang.years_of_experience') }}</h6>
              </div>
              <div class="experience-design3">
                <img src="{{ asset(config('site_config.assets.images').'bg-design3.png') }}" alt="image" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="experience-content">
              <h2 class="wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.6s">{{ trans('lang.what') }} <small>{{ config('site_config.constants.experience') }}+ {{ trans('lang.years')}}</small> <span><small> {{ trans('lang.of')}}  {{ trans('lang.experience')}}</small> {{ trans('lang.looks')}}  {{ trans('lang.like')}}</span></h2>
              <p class="wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">{{ trans('content.experience') }} </p>
              <div class="banner-btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">
                <a href="javascriptvoid:(0)" class="btn btn-primary">{{ trans('lang.our_projects') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div> 
</section>
<!-- EXPERIENCE SECTION END -->