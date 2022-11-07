@extends('layouts.layoutv1')

@section('content')
<!-- BANNER SECTION BEGIN -->
<section class="about-banner-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="about-banner-content">
              <h2>Conatact Us</h2>
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