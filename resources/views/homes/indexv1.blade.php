@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('sections.bannerv1')
    <!-- BANNER SECTION END -->
    
    <!-- EXPERIENCE SECTION BEGIN -->
    @include('sections.experiencev1')
    <!-- EXPERIENCE SECTION END -->

   

    <!-- INTERIOR & EXTERIOR SECTION BEGIN -->
    @include('sections.interior-ext')
    <!-- INTERIOR & EXTERIOR SECTION END -->
    <!-- WORK WITH US SECTION BEGIN -->
    @include('sections.work-with-us')
    <!-- WORK WITH US SECTION END -->
    <!-- COMMERCIAL SECTION BEGIN -->
    @include('sections.commercialv1')
    <!-- COMMERCIAL SECTION END -->
    <!-- INSTAGRAM FEED SECTION BEGIN -->
    @include('sections.socialv1')
    <!-- INSTAGRAM FEED SECTION END -->
    
@endsection