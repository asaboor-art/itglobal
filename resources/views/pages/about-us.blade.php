@extends('layouts.layoutv1')

@section('content')
<!-- BANNER SECTION BEGIN -->
  @include('sections.bannerv2')
    <!-- BANNER SECTION END -->
    <!-- PAINT SECTION BEGIN -->
    <section class="paint-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="paint-sec-img">
              <img src="{{ asset(config('site_config.assets.images').'brush-paint.png') }}" alt="image" class="img-fluid">
              <div class="blue-bg">
                <img src="{{ asset(config('site_config.assets.images').'bl-bg.png') }}" alt="image" class="img-fluid">
              </div>
              <div class="red-bg">
                <img src="{{ asset(config('site_config.assets.images').'c2.png') }}" alt="image" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="paint-content">
              <h2><small>{{ trans('lang.about') }}</small>{{ config('site_config.contacts.name') }} <span>{{ trans('lang.crew') }}</span></h2>
              <p>{{ trans('content.about1')}}</p>
              <p>{{ trans('content.about2')}}</p>
            </div>
          </div>
        </div>
        <div class="row roller-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="roller-text">
              <p>{{ trans('content.about3')}}</p>
              <p>{{ trans('content.about4')}}</p>
              
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="roller-img">
              <img src="{{ asset(config('site_config.assets.images').'roller.png') }}" alt="image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PAINT SECTION END -->
    <!-- WORK WITH US SECTION BEGIN -->
    @include('sections.work-with-us')
    <!-- WORK WITH US SECTION END -->
    <!-- INSTAGRAM FEED SECTION BEGIN -->
    @include('sections.socialv1')
    <!-- INSTAGRAM FEED SECTION END -->
    <!-- REVIEW SECTION BEGIN -->
    @include('sections.review-secv1')
    <!-- REVIEW SECTION END -->
@endsection
@section('scripts')
<script>
      new WOW().init();
    </script>
<script>
      $('.responsive').slick({
          dots: false,
          arrows: false,
          autoplay: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
    </script>
@endsection