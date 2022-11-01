<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calgary Painting Crew - Index Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset(config('site_config.assets.css').'app.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset(config('site_config.assets.css').'jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'animate.css') }}">
  </head>
  <body>
    <!-- Header Starts -->
    @include('headers.headerv1')
    <!-- Header Ends -->
    <!-- Content Starts -->
    @yield('content')
    <!-- Content Ends  -->
    <!-- FOOTER SECTION BEGIN -->
  
    <!-- FOOTER SECTION END -->
    @include('footers.footerv1')
    <!-- Latest compiled JavaScript -->
    <script src="{{ asset(config('site_config.assets.plugins').'jquery.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'app.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'main.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'slick.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'owl.carousel.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js').'wow.min.js') }}"></script>
    <!-- <script src="js/main.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
     <script src="js/wow.min.js"></script> -->
    <script>
      new WOW().init();
    </script>
  </body>
</html>
