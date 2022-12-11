<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset(config('site_config.assets.css').'app.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="{{ asset(config('site_config.assets.css').'jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'animate.css') }}"> -->
  </head>
  <body>
    <!-- Header Starts -->
    @include('headers.headerv2')
    <!-- Header Ends -->
    <!-- Content Starts -->
    @include('components.loader')
    @yield('content')
    <!-- Content Ends  -->
    <!-- FOOTER SECTION BEGIN -->
   @include('footers.footerv2')
    <!-- FOOTER SECTION END -->
    <!-- Latest compiled JavaScript -->
    <script src="{{ asset(config('site_config.assets.js').'app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'main.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'slick.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'owl.carousel.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'wow.min.js') }}"></script>
    <script>
      const blade_config = {
        baseUrl: "{{ env('APP_URL') }}"
      }
    </script>
    <script src="{{ asset(config('site_config.assets.js').'custom/common.js') }}"></script>
    <!-- <script src="js/main.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
     <script src="js/wow.min.js"></script> -->
     <script>
  $(document).ready(function(){
  $('.carousel').slick({
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots:true,
    centerMode: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,

      }

    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,

      }
    },  {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
      }
    }]
  });
});
</script>
    
    @yield('scripts')
  </body>
</html>
