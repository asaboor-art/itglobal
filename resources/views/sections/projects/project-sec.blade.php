@php 

   $Projects = config('projects.projects');
   

@endphp
<section class="ultimate-investment-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $heading !!}
               <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">{{ $subheading }}</p>
            </div>
         </div>
      </div>
      <div class="row capital-row">
         @php 
         $count = 1;
         @endphp
         @foreach($Projects as $project)
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get',str_replace(' ','-',$project['name']))}}">
               <div class="ultimate-boxes-content wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.7s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').$project['image1']) }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').$project['image2']) }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>{{ $project['name'] }}</h6>
               </div>
            </a>
         </div>
         @if($count % 3 == 0)
            </div>
            <div class="row capital-row">
         @endif
         @php 
            $count += 1;
         @endphp
         @endforeach
         <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Park-View-City')}}">
               <div class="ultimate-boxes-content wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c2.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg2.jpg') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Park View City</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Prime-Valley')}}">
               <div class="ultimate-boxes-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c3.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg3.png') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Prime Valley</h6>
               </div>
            </a>
         </div> -->
      </div>
      <!-- <div class="row capital-row">
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Eighteen')}}">
               <div class="ultimate-boxes-content wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c1.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg4.png') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Eighteen</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Nova-City')}}">
               <div class="ultimate-boxes-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c5.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg5.jpg') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Nova City</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Kingdom Valley')}}">
               <div class="ultimate-boxes-content wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c6.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg6.png') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Kingdom Valley</h6>
               </div>
            </a>
         </div>
      </div>
      <div class="row capital-row">
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Lahore Smart City')}}">
               <div class="ultimate-boxes-content wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c7.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg7.jpg') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Lahore Smart City</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','New-Metro-City')}}">
               <div class="ultimate-boxes-content wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c8.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg8.jpg') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>New Metro City</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get','Sialkot-Motorway-City')}}">
               <div class="ultimate-boxes-content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').'c9.png') }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').'gg9.jpg') }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>Sialkot Motorway City</h6>
               </div>
            </a>
         </div>
      </div> -->
   </div>
</section>