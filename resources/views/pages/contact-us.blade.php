@extends('layouts.layoutv1')

@section('content')
<!-- BANNER SECTION BEGIN -->
<section class="web-design-banner-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="web-design-ban">
          <h2>{{ trans('lang.contact')}}</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="web-design-ban-img">
          <img src="{{ asset(config('site_config.assets.images').'contactus-ban-img.jpg') }}" alt="image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- BANNER SECTION END -->
    <!-- INQUIRIES SECTION BEGIN -->
      @include('sections.contact-info')
    <!-- INQUIRIES SECTION END -->
    <!-- ROLLER MAN SECTION BEGIN -->
      @include('sections.contact-form')
    <!-- ROLLER MAN SECTION END -->
@endsection