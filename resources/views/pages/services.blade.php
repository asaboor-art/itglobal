@extends('layouts.layoutv1')

@section('content')
@include('banners.bannerv4',[
    'heading' => "<span>Services</span>",
    'subheading' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."
  ])

  <!-- PROFESSIONAL WASHING SECTION BEGIN -->
  <section class="professional-washing-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="professional-washing-heading">
               <h2><span>Professional Washing &</span> Cleaning Services</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedia do eiusmod tempor incididunt ut labore. There are many varia tion of passages of Lorem Ipsum available.</p>
               <h6>Our car detailing solutions include:</h6>
               <ul>
                  <li><img src="images/circle-tick.png" alt="image" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                  <li><img src="images/circle-tick.png" alt="image" class="img-fluid"> It is a long established fact that a reader more.</li>
                  <li><img src="images/circle-tick.png" alt="image" class="img-fluid"> There are many variations of passages of Lorem Ipsum</li>
               </ul>
               <div class="washing-btn">
                  <a href="javascript:void(0)" class="btn btn-primary">Check Services</a>
                  <a href="tel:123-123-1234" class="number-tel"><img src="images/ph.png" alt="image" class="img-fluid"> 123-123-1234</a>
               </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <img src="images/washing-car.png" alt="image" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   <!-- PROFESSIONAL WASHING SECTION END -->
   <!-- OUR SERVICES PAGE SECTION BEGIN -->
   <section class="our-services-sec our-services-pg-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="our-services-content">
                     <h2><span>Our</span> Services</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="box-content">
               <img src="images/ser1.png" alt="image" class="img-fluid">
               <h4>Complete Packages</h4>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               <a href="javascript:void(0)" class="link-btn">Read More</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="box-content">
               <img src="images/ser2.png" alt="image" class="img-fluid">
               <h4>Interior Packages</h4>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               <a href="javascript:void(0)" class="link-btn">Read More</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="box-content">
               <img src="images/ser3.png" alt="image" class="img-fluid">
               <h4>Exterior Packages</h4>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               <a href="javascript:void(0)" class="link-btn">Read More</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="box-content">
               <img src="images/ser4.png" alt="image" class="img-fluid">
               <h4>Ceramic Coatings</h4>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               <a href="javascript:void(0)" class="link-btn">Read More</a>
            </div>
         </div>
         </div>
      </div>
   </section>
   <!-- OUR SERVICES PAGE SECTION END -->
    <!-- WHY CALGARY SECTION BEGIN -->
  @include('sections.why')
   <!-- WHY CALGARY SECTION END -->
    <!-- NEWSLETTER SECTION BEGIN -->
    @include('sections.newsletterv1')
     <!-- WHY CALGARY SECTION END -->
@endsection