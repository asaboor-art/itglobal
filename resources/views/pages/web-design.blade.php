@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('sections.web-design-bannerv1')
    <!-- BANNER SECTION END -->
    
    <!-- WEB DESIGN PROCESS SECTION BEGIN -->
    @include('sections.web-design-processv1')
    <!-- WEB DESIGN PROCESS SECTION END -->

    <!-- NEWSLETTER SECTION BEGIN -->
    @include('sections.newsletterv2')
    <!-- NEWSLETTER SECTION END -->
    
    <!-- PAID ADVERTISEMENT SECTION BEGIN -->
    @include('sections.testing-secv1')
    <!-- PAID ADVERTISEMENT SECTION END -->

     <!-- SOCIAL MEDIA SECTION BEGIN -->
    @include('sections.launch-secv1')
    <!-- SOCIAL MEDIA SECTION END -->

     <!-- BUSINESS JOURNEY SECTION BEGIN -->
    @include('sections.businessv2')
    <!-- BUSINESS JOURNEY SECTION END -->

@endsection