@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('sections.social-media-bannerv1')
    <!-- BANNER SECTION END -->
    
    <!-- SOCIAL HELP SECTION BEGIN -->
    @include('sections.social-helpv2')
    <!-- SOCIAL HELP SECTION END -->

    <!-- SOCIAL NEWSLETTER SECTION BEGIN -->
    @include('sections.social-newsletterv4')
    <!-- SOCIAL NEWSLETTER SECTION END -->

    <!-- PROCESS WE USE SECTION BEGIN -->
    @include('sections.process-we-usev1')
    <!-- PROCESS WE USE SECTION END -->

    <!-- SERVICE BASED SECTION BEGIN -->
    @include('sections.service-basedv1')
    <!-- SERVICE BASED SECTION END -->

    <!-- BUSINESS JOURNEY SECTION BEGIN -->
    @include('sections.businessv2')
    <!-- BUSINESS JOURNEY SECTION END -->

@endsection