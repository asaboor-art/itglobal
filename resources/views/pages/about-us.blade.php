@extends('layouts.layoutv1')

@section('content')
<!-- VIDEO BANNER SECTION BEGIN -->
@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
<!-- VIDEO BANNER SECTION END -->
<!-- CEO SECTION BEGIN -->
<section class="advisory-sec">
   <div class="container-fluid">
      <div class="row advise-row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="{{ asset(config('site_config.assets.images').'ceo.png') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4>CEO REALITY ONE GROUP <span>Syed Asjad Hussain Shah</span></h4>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CEO SECTION END -->
<!-- VID BACKGROUND SECTION BEGIN -->
<section class="vid-bg-sec">
   <div class="bg-video-wrap">
      <video src="{{ asset(config('site_config.assets.images').'banner-animation.mp4') }}" loop muted autoplay></video>
      <div class="overlay"></div>
   </div>
</section>
<!-- VID BACKGROUND SECTION END -->
<!-- REALTY SECTION BEGIN -->
<section class="realty-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="realty-box-sec wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4>CEO REALITY ONE GROUP <span>Syed Asjad Hussain Shah</span></h4>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
               <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="realty-box-sec wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4>CEO REALITY ONE GROUP <span>Syed Asjad Hussain Shah</span></h4>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
               <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- REALTY SECTION END -->
<!-- COUNTER SECTION BEGIN -->
<section id="prg-counter" class="aboutus-counter-sec">
   <div class="prg-container row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co1.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="200">0</h3>
         <h4 class="prg-count-title">Team Members</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co2.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="4">0</h3>
         <h4 class="prg-count-title">Branches</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co3.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="9">0</h3>
         <h4 class="prg-count-title">Projects</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co4.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="10">0</h3>
         <h4 class="prg-count-title">Years Experience</h4>
      </div>
   </div>
</section>
<!-- COUNTER SECTION END -->
<!-- ACCORDIAN SECTION BEGIN -->
<section class="accordian-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="accordian-img">
               <img src="{{ asset(config('site_config.assets.images').'as1.png') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <div class="img-accordian-inner">
                  <img src="{{ asset(config('site_config.assets.images').'as2.png') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1.1s">
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="accordian-content wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4>CEO REALITY ONE GROUP <span>Syed Asjad Hussain Shah</span></h4>
               <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
               <div class="accordian-tabs">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Experienced Consultants
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">We are a top real estate company, and our consultants have an average of 25 years of expertise, so you’ll be getting real estate guidance from the professionals. We have various types of real estate advisors to ensure a seamless and comfortable transaction.</div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Profitable Investments
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">We are a top real estate company, and our consultants have an average of 25 years of expertise, so you’ll be getting real estate guidance from the professionals. We have various types of real estate advisors to ensure a seamless and comfortable transaction.</div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Dedicated Team
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">We are a top real estate company, and our consultants have an average of 25 years of expertise, so you’ll be getting real estate guidance from the professionals. We have various types of real estate advisors to ensure a seamless and comfortable transaction.</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ACCORDIAN SECTION END -->
<!-- OUR TEAM SECTION BEGIN -->
<section class="our-project-sec aboutus-team-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s"><span>Our</span> Team</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="our-project-slider">
               <div class="slider responsive2">
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- OUR TEAM SECTION END -->
<!-- GALLERY SECTION BEGIN -->
<div class="picman_tm_section" id="portfolio">
   <div class="container">
      <div class="capital-gallery">
         <h4>Capital Smart City <span>Gallery</span></h4>
      </div>
   </div>
   <div class="picman_tm_porfolio_wrap">
      <div class="picman_tm_portfolio_titles" style="left: 565px; top: 404px">
         Commerical Area<span class="work__cat"></span>
      </div>
      <div class="picman_tm_portfolio" data-width="400" data-gap="24" style="animation-name: marketifyScroll0">
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Tennis Court" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                  <img src="/images/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/tennis-court.jpg" style="background-image: url('/assests/amenities/tennis-court.jpg');"></div>
               </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mahal.webp" style="background-image: url('/assests/amenities/mahal.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/sports-complex.webp" style="background-image: url('/assests/amenities/sports-complex.webp');"></div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/ariel.webp" style="background-image: url('/assests/amenities/ariel.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/road.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/road.webp" style="background-image: url('/assests/amenities/road.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mall.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mall.webp" style="background-image: url('/assests/amenities/mall.webp');"></div>
                  <div class="hidden_content">
                  </div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/water-park.webp" style="background-image: url('/assests/amenities/water-park.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Mosque" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mosque.webp" style="background-image: url('/assests/amenities/mosque.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Tennis Court" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/tennis-court.jpg" style="background-image: url('/assests/amenities/tennis-court.jpg');"></div>
               </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mahal.webp" style="background-image: url('/assests/amenities/mahal.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/sports-complex.webp" style="background-image: url('/assests/amenities/sports-complex.webp');"></div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/ariel.webp" style="background-image: url('/assests/amenities/ariel.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/road.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/road.webp" style="background-image: url('/assests/amenities/road.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mall.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mall.webp" style="background-image: url('/assests/amenities/mall.webp');"></div>
                  <div class="hidden_content">
                  </div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/water-park.webp" style="background-image: url('/assests/amenities/water-park.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Mosque" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mosque.webp" style="background-image: url('/assests/amenities/mosque.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Tennis Court" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/tennis-court.jpg" style="background-image: url('/assests/amenities/tennis-court.jpg');"></div>
               </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mahal.webp" style="background-image: url('/assests/amenities/mahal.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/sports-complex.webp" style="background-image: url('/assests/amenities/sports-complex.webp');"></div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/ariel.webp" style="background-image: url('/assests/amenities/ariel.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/road.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/road.webp" style="background-image: url('/assests/amenities/road.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mall.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mall.webp" style="background-image: url('/assests/amenities/mall.webp');"></div>
                  <div class="hidden_content">
                  </div>
               </div>
            </div>
         </div>
         <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/gate.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/gate.webp" style="background-image: url('/assests/amenities/gate.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/water-park.webp" style="background-image: url('/assests/amenities/water-park.webp');"></div>
               </div>
            </div>
         </div>
         <div class="even items" style="min-width: 400px">
            <div
               class="image" data-title="Mosque" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/90-113.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/mosque.webp" style="background-image: url('/assests/amenities/mosque.webp');"></div>
               </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
               <div class="img_in">
                  <a href="/assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                  <img src="/img/thumbs/42-29.jpg" alt="" />
                  <div class="main" data-img-url="/assests/amenities/commerical-area.webp" style="background-image: url('/assests/amenities/commerical-area.webp');"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- GALLERY SECTION END -->
@endsection
@section('scripts')
<script src="https://rawgit.com/moagrius/isOnScreen/master/jquery.isonscreen.min.js"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/custom.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/plugins.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/init.js') }}"></script>
<!-- <script src="js/plugins.js"></script>
    <script src="js/init.js"></script> -->
<!-- <script src="js/custom.js"></script> -->
<script>
          /*PROPERTY SLIDER SCRIPT BEGIN*/
          $('.responsive').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
      /*PROPERTY SLIDER SCRIPT END*/
      /*PROJECT SLIDER SCRIPT BEGIN*/
      $('.responsive2').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
      /*PROJECT SLIDER SCRIPT END*/
      /*COUNTER SCRIPT BEGIN*/
      $(document).ready(function() {
        checkDisplay();
      $(window).on('resize scroll', function() {
        checkDisplay();
        });
      });
      function checkDisplay(){
        $('.prg-count').each(function() {
            var $this = $(this);
            if ($this.isOnScreen()) {
              var countTo = $this.attr('data-count');
              $({
                countNum: $this.text()
              }).animate({
                countNum: countTo
              }, {
                duration: 4000,
                easing: 'linear',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }
              });
            }
          });
      }
      /*COUNTER SCRIPT END*/
      /*OUR CLIENTS SLIDER SCRIPT BEGIN*/
      $('.responsive3').slick({
          dots: false,
          arrows: true,
          infinite: true,
          autoplay: true,
          nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
          prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
          vertical: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
       /*OUR CLIENTS SLIDER SCRIPT END*/

              /*PROJECT SLIDER SCRIPT BEGIN*/
              $('.responsive2').slick({
         dots: false,
         arrows: true,
         infinite: true,
         autoplay: true,
         nextArrow:"<img src='images/right-arrow.png' class='a-right'>",
         prevArrow:"<img src='images/left-arrow.png' class='a-left'>",
         speed: 300,
         slidesToShow: 4,
         slidesToScroll: 1,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 1
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           }
         ]
       });
       /*PROJECT SLIDER SCRIPT END*/
</script>
@endsection