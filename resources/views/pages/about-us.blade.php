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
              <h2><small>About</small> Calgary Painting <span>Crew</span></h2>
              <p>Small and medium-sized assignments that other contractors aren't interested in are our area of expertise. We are renowned for providing excellent work at a competitive price—Guaranteed. Every task we complete is supported by us.</p>
              <p>Before being allowed to join Calgary Painting Crew, our craftsmen must successfully complete a thorough background investigation and skill evaluation. Our staff consists of career artisans with expertise in a variety of trades, including carpentry, remodelling, and plumbing, among others.</p>
            </div>
          </div>
        </div>
        <div class="row roller-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="roller-text">
              <p>Simply put, our handymen are among the best in their industry. Our artisans' skill sets are as diverse as the work they do. When doing their duties, they are well-trained to offer excellent customer service and pay attention to the demands of the client.</p>
              <p>We offer the best services available. You can trust in the calibre of Calgary Painting Crew's craftsmanship and customer service because we guarantee our work.</p>
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