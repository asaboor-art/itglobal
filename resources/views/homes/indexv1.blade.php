@extends('layouts.layoutv1')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    @include('sections.slider-bannerv1')
    <!-- BANNER SECTION END -->

    <!-- Card widgets FEED SECTION END -->
    @include('sections.carousalsv1')
    <!-- Card widgets SECTION END -->

    <!-- Card widgets FEED SECTION END -->
    @include('sections.tabsv1')
    <!-- Card widgets SECTION END -->

    @include('sections.islamic-arkanv1')
    
@endsection

@section('scripts')
<script>
  $('.responsive').slick({
    
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    // responsive: [
    //   {
    //     breakpoint: 1024,
    //     settings: {
    //       slidesToShow: 3,
    //       slidesToScroll: 3,
    //       infinite: true,
    //       dots: true
    //     }
    //   },
    //   {
    //     breakpoint: 600,
    //     settings: {
    //       slidesToShow: 2,
    //       slidesToScroll: 2
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1
    //     }
    //   }
    // //   You can unslick at a given breakpoint now by adding:
    // //   settings: "unslick"
    // //   instead of a settings object
    // ]
  });
</script>
@endsection