@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('banners.bannerv3')
    <!-- BANNER SECTION END -->
    
     <!-- ABOUT US SECTION BEGIN -->
     @include('sections.about-us')
      <!-- ABOUT US SECTION END -->
   <!-- OUR SERVICES SECTION BEGIN -->
   @include('sections.services')
   <!-- OUR SERVICES SECTION END -->

    <!-- WHY CALGARY SECTION BEGIN -->
    @include('sections.why')
     <!-- WHY CALGARY SECTION END -->

     <!-- SUBSCRIBE NEWSLETTER SECTION BEGIN -->
     @include('sections.newsletterv1')
     <!-- SUBSCRIBE NEWSLETTER SECTION END -->

        <!-- CERAMIC SECTION BEGIN -->
        @include('sections.ceramic')
     <!-- CERAMIC SECTION END -->

         <!-- BLOGS SECTION BEGIN -->
         @include('sections.blogs')
     <!-- BLOGS SECTION END -->
    
@endsection