@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('sections.branding-bannerv1')
    <!-- BANNER SECTION END -->
    
    <!-- WEB DESIGN PROCESS SECTION BEGIN -->
    @include('sections.web-design-brandingv1')
    <!-- WEB DESIGN PROCESS SECTION END -->

    <!-- NEWSLETTER SECTION BEGIN -->
    @include('sections.newsletterv2')
    <!-- NEWSLETTER SECTION END -->

    <!-- CORPORATE SECTION BEGIN -->
    @include('sections.corporate-secv1')
    <!-- CORPORATE SECTION END -->

    <!-- BUSINESS JOURNEY SECTION BEGIN -->
    @include('sections.businessv2')
    <!-- BUSINESS JOURNEY SECTION END -->


@endsection