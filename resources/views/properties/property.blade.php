@extends('layouts.layoutv1')
@section('content')
<!-- THUMBNAIL SLIDER SECTION BEGIN -->
<section class="thumbnail-slider-sec">
   <div id="wrap" class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="bread-crumbs wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <ul>
                  <li><a href="{{ route('home')}}">{{ __('lang.home') }}</a></li>
                  <li><span>></span></li>
                  <li><a href="{{ route('site-pages','about-us')}}" class="active">{{ __('lang.about_us') }}</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-6 col-12">
            <h2 class="shahmir-res wow fadeInDown"  data-wow-duration="1s" data-wow-delay="1s">{{ $Property->name}}</h2>
            <!-- Carousel -->
            <div id="carousel" class="carousel slide gallery wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1s" data-ride="carousel">
               <div class="carousel-inner">
                    @if(count($Property->media) >0)
                    @foreach($Property->media as $key => $media)
                        <div class="carousel-item {{ $key==0?'active':''}}" data-slide-number="0" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                            <img src="{{ $media->image_url }}" class="d-block w-100 img-fluid" alt="image">
                        </div>
                    @endforeach
                    @endif
                  <!-- <div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/house-img.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="4" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="6" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="7" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="8" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="9" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="10" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div>
                  <div class="carousel-item" data-slide-number="11" data-toggle="lightbox" data-gallery="gallery" data-remote="/images/bvc.png">
                     <img src="/images/bvc.png" class="d-block w-100 img-fluid" alt="image">
                  </div> -->
               </div>
            </div>
            <!-- Carousel Navigatiom -->
            <div id="carousel-thumbs" class="carousel slide wow fadeInRight"  data-wow-duration="1.1s" data-wow-delay="1.1s" data-ride="carousel">
               <div class="carousel-inner">
                @php  
                    $count = 1;
                @endphp
                  <div class="carousel-item {{ $count==1?'active':''}}" data-slide-number="{{ $count-1 }}">
                     <div class="row mx-0">
                        @if(count($Property->media) >0)
                        @foreach($Property->media as $key => $media)
                        
                        <div id="carousel-selector-{{ $key }}" class="thumb col-3 px-1 py-2 selected" data-target="#carousel" data-slide-to="{{ $key }}">
                           <img src="{{ $media->image_url }}" class="img-fluid" alt="image">
                        </div>
                        
                     
                        @if(($count) > 0 && ($count)%4 ==0)
                            </div>
                            </div>
                            <div class="carousel-item {{ $count==1?'active':''}}" data-slide-to="{{ $key }}">
                                <div class="row mx-0">
                        @endif
                        @php  
                            $count += 1;
                        @endphp
                        @endforeach
                        @endif
                     </div>
                  </div>
                  
               </div>
               <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
               <span class="sr-only">{{ __('lang.previous') }}</span>
               </a>
               <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               <span class="sr-only">__('lang.next')</span>
               </a>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="side-message wow fadeInRight"  data-wow-duration="1.2s" data-wow-delay="1.2s">
              @include('sections.contact-formv2',[
                'heading' => __('messages.contact.sec-heading')
              ])
            </div>
         </div>
      </div>
   </div>
</section>
<!-- THUMBNAIL SLIDER SECTION END -->
<!-- DETAIL DESCRIPTION SECTION BEGIN -->
<section class="detail-description-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="table-content">
               <h4 class="wow fadeInUp"  data-wow-duration="0.9s" data-wow-delay="0.9s">{{ __('lang.detail_desc')}}</h4>
               <div class="table-responsive">
                  <table class="table table-bordered">
                     <tbody>
                        <tr>
                           <td class="bg-tab-col">{{ strtoupper(__('lang.locality')) }}</td>
                           <td>{{ $Property->address }}</td>
                           <td class="bg-tab-col">{{ __('lang.city')}}</td>
                           <td>{{ $Property->city}}</td>
                           <td class="bg-tab-col">{{ strtoupper(__('lang.developer')) }}</td>
                           <td>{{ $Property->Developer?$Property->Developer:'None' }}</td>
                        </tr>
                        <tr>
                           <td class="bg-tab-col">{{ strtoupper(__('lang.type')) }}</td>
                           <td>{{ $Property->PropertyType?$Property->PropertyType:'None' }}</td>
                           <td class="bg-tab-col">{{ strtoupper(__('lang.area')) }}</td>
                           <td>{{ $Property->area }} Sq Yard</td>
                           <td class="bg-tab-col">{{ strtoupper(__('lang.price')) }}</td>
                           <td>{{ App\Helpers\Helper::setPriceFormat($Property->price) }}</td>
                        </tr>
                        <tr>
                           <td colspan="6">
                              <div class="table-box-content">
                                 {!! $Property->description !!}
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- DETAIL DESCRIPTION SECTION END -->
<!-- GOOGLE MAP CONATC SECTION BEGIN -->
<section class="contact-map-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeInDown"  data-wow-duration="0.9s" data-wow-delay="0.9s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.386445110092!2d73.13804481549502!3d33.56931425047113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed0335fc560d%3A0xe620a95d39a00216!2sGhar%20Kahani%20Pvt%20Ltd.!5e0!3m2!1sen!2s!4v1674252985805!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</section>
<!-- GOOGLE MAP CONATC SECTION END -->
@endsection