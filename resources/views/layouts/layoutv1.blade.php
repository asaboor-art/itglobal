<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}"> 

  <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'app.css') }}">
		<link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'A.css.php%2cqfile%3dbase_ur.pagespeed.cf.uOP4PAl5OL.css') }}"><meta name="author" content="{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}">
		<meta property="og:image" content="{{ asset(config('site_config.assets.images').'banner-share.jpg') }}"/><link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('site_config.assets.img').'favicon.ico') }}">
		
		<script defer src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script defer src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-38515198-2" type="5e73c51bd94038fd0480e3ed-text/javascript"></script> 
		<!-- <script defer src="../cse.google.com/f4977.txt?cx=000814089170326466487:mls32mfjnr8" type="5e73c51bd94038fd0480e3ed-text/javascript"></script> -->
    <title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
		<link rel="apple-touch-icon" href="{{ asset(config('site_config.assets.icon').'xicon-128x128.png.pagespeed.ic.8XuBtJRLeE.png') }}"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="theme-color" content="white"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Hello World">
		<meta name="msapplication-TileImage" content="{{ asset(config('site_config.assets.images').'hello-icon-144.png') }}"><meta name="msapplication-TileColor" content="#FFFFFF">
    
    <link rel="stylesheet" type="text/css" href="{{ asset(config('site_config.assets.css').'slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset(config('site_config.assets.css').'main.css') }}"/>
    
    <!-- Add the slick-theme.css if you want default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset(config('site_config.assets.css').'slick-theme.css') }}"/> -->
  </head>
  <body>
    <!-- Header Starts -->
    @include('headers.headerv1')
    <!-- Header Ends -->
    <!-- Content Starts -->
    @include('components.loader')
    @yield('content')
    <!-- Content Ends  -->
    <!-- FOOTER SECTION BEGIN -->
  
    <!-- FOOTER SECTION END -->
    @include('footers.footerv1')
    <!-- Latest compiled JavaScript -->
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script type="text/javascript" src="{{ asset(config('site_config.assets.js').'app.js') }}"></script>
		<script defer type="bd6e1286bee3b72107a7f9ac-text/javascript" src="{{ asset(config('site_config.assets.js_scripts').'js6c5d.php?file=base') }}"></script>
   

		<!-- <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'A.style_footer.css.pagespeed.cf.EwVUVo6K_6.css') }}"> -->
		<!-- <script type="text/javascript">window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','UA-38515198-2');</script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const blade_config = {
        baseUrl: "{{ env('APP_URL') }}"
      }
    </script>
    <script src="{{ asset(config('site_config.assets.js').'custom/common.js') }}"></script>   
    <script src="{{ asset(config('site_config.assets.js_scripts').'slick.js') }}"></script> 
    @yield('scripts')
  </body>
</html>
