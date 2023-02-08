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
    <!-- CAPITAL CITY SECTION BEGIN -->
    <section class="capital-city-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
            <img src="/images/cpt.png" alt="image" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="dri-prof wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
              <h5>DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h5>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CAPITAL CITY SECTION END -->
    <!-- PROFESSIONALS SECTION BEGIN -->
    <section class="professionals-sec">
      <div class="bg-video-wrap">
      <div class="full-screen-banner">
        <div class="dri-prof">
          <h5 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h5>
          <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
        </div>
      </div>
    </div>
    </section>
    <!-- PROFESSIONALS SECTION END -->
    <!-- REAL ESTATE SECTION BEGIN -->
    <section class="real-estate-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <img src="/images/house-img.png" alt="image" class="img-fluid">
              <div class="img-popup-btn">
                <a href="/images/banner-animation.mp4" data-fancybox="gallery"><i class="fa fa-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img-content">
              <h5 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">An Accomplished <span>Real Estate Marketing Agency</span></h5>
              <p class="wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard chunk of Lorem Ipsum used since the 1500s is reproduced.</p>
              <div class="img-popup-booknow">
                <a href="javascript:void(0)" class="btn btn-primary wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">ABOUT US</a>
                <a href="javascript:void(0)" class="btn btn-primary dark-color wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="1.1s">BOOK NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- REAL ESTATE SECTION END -->
    <!-- PROFESSIONALS SECOND SECTION BEGIN -->
    <section class="professionals-second-sec">
      <div class="bg-video-wrap">
      <div class="full-screen-banner">
        <div class="dri-prof">
          <h5 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">DRIVEN BY PROFESSIONALS <span>Advisors you can trust</span></h5>
          <p class="wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1.1s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p>
        </div>
      </div>
    </div>
    </section>
    <!-- PROFESSIONALS SECOND SECTION END -->
    <!-- OUR SERVICES SECTION BEGIN -->
    <section class="our-services-sec project-services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="/images/mark1.png" alt="image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img-content">
              <h5 class="wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">An Accomplished <span>Real Estate Marketing Agency</span></h5>
              <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). The standard chunk of Lorem Ipsum used since the 1500s is reproduced.</p>
              <div class="img-popup-booknow">
                <a href="javascript:void(0)" class="btn btn-primary dark-color wow fadeInDown" data-wow-duration="1.1s" data-wow-delay="1.1s">BOOK NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR SERVICES SECTION END -->
    <!-- OUR CLIENTS SECTION BEGIN -->
    <section class="our-clients-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="smart-city-map wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
             <img src="/images/marker-map.jpg" alt="image" class="img-fluid">
             <div class="location-address-img">
               <img src="/images/marker-loc.jpg" alt="image" class="img-fluid">
             </div>
             <div class="marker-img">
               <img src="/images/marker-immg.png" alt="image" class="img-fluid bounce2">
             </div>
           </div>
          </div>
          <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12"> -->
            @include('sections.contact-form',[
            'heading' => __('messages.contact.sec-heading')
            ])
            <!-- <form>
              <div class="form-bg-hd wow fadeInRight" data-wow-duration="1.1s" data-wow-delay="1.1s">
                <h4>Send Us <span>A Message Now!</span></h4>
                <input type="text" placeholder="Full Name" class="form-control">
                <input type="email" placeholder="Email" class="form-control">
                <input type="number" placeholder="Phone" class="form-control">
                <input type="text" placeholder="City" class="form-control">
                <select class="form-control">
                  <option>Capital Smart City</option>
                  <option>Capital Smart City</option>
                  <option>Capital Smart City</option> 
                </select>
                <textarea cols="6" rows="6" placeholder="Message" class="form-control"></textarea>
                <button type="button" class="btn btn-primary">SUBMIT</button>
              </div>
            </form> -->
          <!-- </div> -->
        </div>
      </div>
    </section>
    <!-- OUR CLIENTS SECTION END -->
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
                <a href="assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/tennis-court.jpg" style="background-image: url('assests/amenities/tennis-court.jpg');"></div>
              </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mahal.webp" style="background-image: url('assests/amenities/mahal.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/sports-complex.webp" style="background-image: url('assests/amenities/sports-complex.webp');"></div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/ariel.webp" style="background-image: url('assests/amenities/ariel.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/road.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/road.webp" style="background-image: url('assests/amenities/road.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mall.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mall.webp" style="background-image: url('assests/amenities/mall.webp');"></div>
                <div class="hidden_content">
                </div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/water-park.webp" style="background-image: url('assests/amenities/water-park.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Mosque" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mosque.webp" style="background-image: url('assests/amenities/mosque.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Tennis Court" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/tennis-court.jpg" style="background-image: url('assests/amenities/tennis-court.jpg');"></div>
              </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mahal.webp" style="background-image: url('assests/amenities/mahal.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/sports-complex.webp" style="background-image: url('assests/amenities/sports-complex.webp');"></div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/ariel.webp" style="background-image: url('assests/amenities/ariel.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/road.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/road.webp" style="background-image: url('assests/amenities/road.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mall.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mall.webp" style="background-image: url('assests/amenities/mall.webp');"></div>
                <div class="hidden_content">
                </div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/water-park.webp" style="background-image: url('assests/amenities/water-park.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Mosque" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mosque.webp" style="background-image: url('assests/amenities/mosque.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Tennis Court" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/tennis-court.jpg" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/tennis-court.jpg" style="background-image: url('assests/amenities/tennis-court.jpg');"></div>
              </div>
            </div>
            <div class="image" data-title="Taaj Mahal" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mahal.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mahal.webp" style="background-image: url('assests/amenities/mahal.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Sports Complex" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/sports-complex.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/sports-complex.webp" style="background-image: url('assests/amenities/sports-complex.webp');"></div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Aerial View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/ariel.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/ariel.webp" style="background-image: url('assests/amenities/ariel.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Road View" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/road.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/road.webp" style="background-image: url('assests/amenities/road.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Shopping Mall" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mall.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mall.webp" style="background-image: url('assests/amenities/mall.webp');"></div>
                <div class="hidden_content">
                </div>
              </div>
            </div>
          </div>
          <div class="odd items" style="min-width: 400px">
            <div class="image" data-title="Front Gate" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/gate.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/gate.webp" style="background-image: url('assests/amenities/gate.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Water Park" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/water-park.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/water-park.webp" style="background-image: url('assests/amenities/water-park.webp');"></div>
              </div>
            </div>
          </div>
          <div class="even items" style="min-width: 400px">
            <div
              class="image" data-title="Mosque" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/mosque.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/90-113.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/mosque.webp" style="background-image: url('assests/amenities/mosque.webp');"></div>
              </div>
            </div>
            <div class="image" data-title="Commerical Area" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="assests/amenities/commerical-area.webp" data-fancybox="gallery"></a>
                <img src="img/thumbs/42-29.jpg" alt="" />
                <div class="main" data-img-url="assests/amenities/commerical-area.webp" style="background-image: url('assests/amenities/commerical-area.webp');"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- GALLERY SECTION END -->
@endsection