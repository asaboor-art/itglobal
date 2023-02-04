@extends('layouts.layoutv1')
@section('content')
<!-- VIDEO BANNER SECTION BEGIN -->
@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images/.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
    <!-- VIDEO BANNER SECTION END -->
    <!-- ADVISORY SECTION BEGIN -->
    <section class="advisory-sec">
      <div class="container-fluid">
        <div class="row advise-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//advisory.png" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <h4>DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
          </div>
        </div>
        <div class="row advise-row row-advisery-rev">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <h4>DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//advisory.png" alt="image" class="img-fluid wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
          </div>
        </div>
        <div class="row advise-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//advisory.png" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
              <h4>DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ADVISORY SECTION END --> 
@endsection