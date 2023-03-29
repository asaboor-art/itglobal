@extends('layouts.layoutv1')

@section('content')
<!-- BANNER SECTION BEGIN -->
   @php $name = explode(' ',$Page->name); @endphp
  
  @include('banners.bannerv4',[
    'heading' => count($name)>1? count($name)-2>0?"<span>". implode(" ",array_slice($name,count($name)-2))."</span>":"<span>".$name[0]."</span> ".$name[count($name)-1]:"<span>".$name[0]."</span>",
    'subheading' => $Page->description
  ])
  <section class="car-wash-platform-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-img">
                  <img src="/images/aboutus-img.png" alt="image" class="img-fluid">
                  <div class="aboutus-car">
                     <img src="/images/car1.png" alt="image" class="img-fluid">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-content">
                  <h2><span>A Car Wash Platform is</span> Different From Any Other</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               </div>
            </div>
         </div>
         <div class="row aboutus-car-row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="car-para-text">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <img src="/images/aboutus-car.png" alt="image" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   <!-- CAR WASH PLATFORM SECTION END -->
   <!-- NUMBERS SPEAK SECTION BEGIN -->
   <section class="number-speak-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="number-speak-heading">
                  <h2><span>The Numbers Speak</span> For Themselves</h2>
               </div>
            </div>
         </div>
         <div class="row" id="counter">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="main-counter-content">
                  <div class="stastic">
                    <h4 class="counter">3500</h4>
                    <div class="small-des">
                   <img src="/images/small-des.png" alt="image" class="img-fluid">
                </div>
                </div>
                <p>Total Cars Washed</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="main-counter-content">
                   <div class="stastic">
                    <h4  class="counter">1270</h4>
                    <div class="small-des">
                   <img src="/images/small-des.png" alt="image" class="img-fluid">
                </div>
                </div>
                <p>Satisfied Customers</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="main-counter-content">
                  <div class="stastic">
                    <h4  class="counter">68</h4>
                   <div class="small-des">
                   <img src="/images/small-des.png" alt="image" class="img-fluid">
                </div>
                </div>
                 <p>Hard-working Employees</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="main-counter-content">
                  <div class="stastic">
                    <h4  class="counter">4900</h4>
                    <div class="small-des">
                   <img src="/images/small-des.png" alt="image" class="img-fluid">
                </div>
                </div>
                <p>Coffees Released</p>
               </div>
            </div>
         </div>
         <div class="left-design">
            <img src="/images/dd-des.png" alt="image" class="img-fluid">
         </div>
         <div class="right-design">
            <img src="/images/dd-des.png" alt="image" class="img-fluid">
         </div>
      </div>
   </section>
   <!-- NUMBERS SPEAK SECTION END -->
   <!-- CERAMIC SECTION BEGIN -->
   <section class="ceramic-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-img">
                  <img src="/images/left-full.png" alt="image" class="img-fluid">
               </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-content">
                  <h2><span>Ceramic</span> Coating</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>   
            </div>
         </div>
      </div>
   </section>
   <!-- CERAMIC SECTION END -->
   <!-- HIGHEST RATED SECTION BEGIN -->
   <section class="highest-rated-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="calgary-highest-heading">
                  <h4>Car wash & deatiling service</h4>
                  <h2><span>Calgary's Highest Rated Detailing</span> Car Service</h2>
               </div>
            </div>
         </div>
         <div class="row hig-row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
               <div class="calgary-highest-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <img src="/images/ig1.png" alt="image" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   <!-- HIGHEST RATED SECTION END -->
   <!-- DETAILING SECTION BEGIN -->
   <section class="detailing-sec-bg">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-md-6 col-sm-6">
               <div class="right-full-content">
                  <h2>Detailing</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="right-full-img">
                  <img src="/images/left-full2.png" alt="image" class="img-fluid">
               </div>   
            </div>
         </div>
      </div>
   </section>
   <!-- DETAILING SECTION END -->
   <!-- HIGHEST RATED SECTION BEGIN -->
   <section class="highest-rated-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="calgary-highest-heading">
                  <h4>Car wash & deatiling service</h4>
                  <h2><span>Calgary's Highest Rated Detailing</span> Car Service</h2>
               </div>
            </div>
         </div>
         <div class="row hig-row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <img src="/images/ig1.png" alt="image" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
               <div class="calgary-highest-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- HIGHEST RATED SECTION END -->
   <!-- PAINT PROTECTION SECTION BEGIN -->
   <section class="paint-protection-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-img">
                  <img src="/images/left-full3.png" alt="image" class="img-fluid">
               </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-content">
                  <h2><span>Paint Protection </span> Film</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>   
            </div>
         </div>
      </div>
   </section>
   <!-- PAINT PROTECTION SECTION END -->
   <!-- CALGARY DETAILING SECTION BEGIN -->
   <section class="calgary-sec-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="why-calgary-heading">
                  <h2><span>Why</span> Calgary Detailing.ca</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               </div>
            </div>
         </div>
         <div class="row sources-row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q1.png" alt="image" class="img-fluid"></span>
                  <h6>CONVENIENT</h6>
                  <p>Save time with services that come to you</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q2.png" alt="image" class="img-fluid"></span>
                  <h6>TRUSTED</h6>
                  <p>Dedicated to 5-star quality for every customer</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q3.png" alt="image" class="img-fluid"></span>
                  <h6>PROFESSIONAL</h6>
                  <p>Fully uniformed, equipped, and always improving</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q4.png" alt="image" class="img-fluid"></span>
                  <h6>GREEN</h6>
                  <p>Eco-conscious at every step</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- CALGARY DETAILING SECTION END -->
   <!-- FAQ SECTION BEGIN -->
   <section class="faq-sec-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="faq-heading">
                  <h2><span>Frequently</span> Asked Questions</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               </div>
               <div class="faq-questions">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingThree">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingFour">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingFive">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingSix">
                               <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry?
                          </a>
                        </h4>

                          </div>
                          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                              <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FAQ SECTION END -->
   <!-- OUR TESTIMONIAL SECTION BEGIN -->
   <section class="our-testimonial-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="our-testimonial-content">
                  <h2><span>Our Top</span> Testimonials</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
               </div>
               <div class="our-testimonial-slider">
                  <div class="slider responsive">
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="/images/t1.png" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Chris Haris</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="/images/comma.png" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="/images/t2.png" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Jim Morison</h5>
                                 <span>Doctor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="/images/comma.png" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="/images/t3.png" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Alex Cruis</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="/images/comma.png" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="/images/t1.png" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Chris Haris</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="/images/comma.png" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="testimonial-btn">
                  <a href="javascript:void(0)" class="btn btn-primary">VIEW ALL</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- OUR TESTIMONIAL SECTION END -->
   <!-- SUBSCRIBE NEWSLETTER SECTION BEGIN -->
   @include('sections.newsletterv1')
   <!-- SUBSCRIBE NEWSLETTER SECTION END -->
@endsection
@section('scripts')
<script>
      new WOW().init();
    </script>
<script>
      $('.responsive').slick({
          dots: false,
          arrows: false,
          autoplay: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
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
    </script>
@endsection