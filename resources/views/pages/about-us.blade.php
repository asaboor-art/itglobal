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
                  <img src="{{ asset(config('site_config.assets.images').'aboutus-img.png') }}" alt="image" class="img-fluid">
                  <div class="aboutus-car">
                     <img src="{{ asset(config('site_config.assets.images').'car1.png') }}" alt="image" class="img-fluid">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-content">
                  <h2><span>A Car Wash Platform is</span> Different From Any Other</h2>
                  <p>Welcome to our company, where we specialize in providing top-quality ceramic coatings and polishing services for vehicles. We are passionate about what we do, and we take pride in our ability to transform your vehicle into a work of art.
Our team is made up of highly trained and experienced professionals who are dedicated to delivering exceptional results every time. We believe that attention to detail is the key to achieving perfection, and we go above and beyond to ensure that every vehicle we work on is treated with the care and precision it deserves.
</p>
                  <p>At our company, we use only the highest quality materials and products to ensure that your vehicle receives the best possible treatment. Our ceramic coatings are designed to protect your vehicle's paint and provide a long-lasting, durable finish that will keep your car looking its best for years to come.</p>
               </div>
            </div>
         </div>
         <div class="row aboutus-car-row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="car-para-text">
                  <p>Whether you are looking to give your vehicle a fresh new look, protect it from the elements, or simply maintain its pristine condition, we have the skills and expertise to help. Our team is committed to providing excellent customer service and making sure that you are completely satisfied with the results of our work.</p>
                  <p>We are passionate about cars, and we are dedicated to helping you get the most out of your vehicle. Contact us today to learn more about our services and to schedule an appointment with one of our experts.</p>
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
                  <p>Ceramic coating is a liquid thin glass layer applied to the exterior of a vehicle to protect it from the elements. It provides a durable layer of protection against UV rays, chemicals, and minor scratches. The coating creates a hydrophobic surface that repels water, dirt, and other contaminants, making it easier to clean and maintain. Ceramic coatings can last for several years, reducing the need for regular waxing or polishing. The coating also enhances the appearance of the vehicle by creating a deep, glossy shine</p>
                  <p>Ceramic coating is a protective layer that is applied to a vehicle's paint surface to provide long-lasting protection against the elements. The process typically involves several steps:<br/>1.	Prep work: The first step in the process is to thoroughly wash and decontaminate the vehicle's exterior surfaces to remove any dirt, debris, or contaminants that may affect the adhesion of the ceramic coating.<br/>2.	Paint correction: If necessary, the vehicle's paint may be subjected to a paint correction process to remove any imperfections, such as swirl marks, scratches, or oxidation. This step is essential for achieving a smooth, flawless surface before applying the ceramic coating.<br/>3.	Application: The ceramic coating is applied in thin, even layers using a specialized applicator or spray gun. The coating is designed to bond chemically with the paint surface, creating a protective barrier that repels water, dirt, and other contaminants.<br/>4.  Curing: Once the coating has been applied, it needs to cure for a specific period to achieve its full protective properties. This process typically takes several hours to several days, depending on the type of coating and the environmental conditions.<br/> Ceramic coating is a popular choice for car owners who want to protect their vehicle's paint from damage and preserve its appearance for years to come. While the process requires a significant investment of time and money, the benefits of ceramic coating are well worth it for those who prioritize the long-term health and value of their vehicle.</p>
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
                  <p><strong>Wheel Ceramic Coating:</strong><br/>Wheel ceramic coatings are a type of product designed to protect and enhance the appearance of wheels. These coatings create a hydrophobic barrier that repels brake dust, road grime, and other contaminants, making it easier to clean the wheels. Additionally, wheel ceramic coatings add a glossy shine to the wheels, giving them a new and refreshed look. They are formulated to be durable and long-lasting, providing a layer of protection that lasts longer than traditional wheel cleaners. Wheel ceramic coatings are easy to apply, and they can be used on a variety of wheel types, including painted, polished, and anodized wheels.<br/><br/><strong>Glass Ceramic Coating:</strong><br/>Glass ceramic coatings are a type of product designed to protect and enhance the appearance of windows and windshields. These coatings create a hydrophobic barrier that repels water, dirt, and other contaminants, making it easier to clean the glass surface. Additionally, glass ceramic coatings can add a layer of UV protection, which can reduce the likelihood of the glass cracking or breaking. Glass ceramic coatings are formulated to be long-lasting, providing a layer of protection that lasts longer than traditional glass cleaners.<br/><br/><strong>Leather Ceramic Coating:</strong><br/>Leather ceramic coatings are a type of product designed to protect and enhance the appearance of leather surfaces, such as seats, steering wheels, and dashboards. These coatings create a hydrophobic barrier that repels spills, dirt, and other contaminants, making it easier to clean the leather surface. Additionally, leather ceramic coatings provide protection against UV damage and prevent cracking, fading, and discoloration. These coatings are formulated to be durable and long-lasting, providing a layer of protection that lasts longer than traditional leather conditioners. </p>
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
                  <p>At our business, we offer a range of professional and high-quality wheel, glass, and ceramic coating services to protect and enhance the appearance of your vehicle. When you book a service with us, our experienced technicians will thoroughly inspect, clean, and prepare your car's surfaces before applying the appropriate coating for optimal protection and longevity.
We use only the highest quality products and techniques to ensure that your car looks its best and stays protected from everyday wear and tear. Our team will keep you informed throughout the service and provide you with care instructions and maintenance tips to help you keep your coated surfaces looking great for as long as possible.
Our goal is to provide exceptional customer service and deliver results that exceed your expectations. So why wait? Book your wheel, glass, and ceramic coating service with us today and see the difference for yourself!
</p>
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
                  <p>LPolishing and paint correction are two crucial steps in the auto detailing process that can help to enhance the appearance and protect the paint of your vehicle. Polishing involves the use of specialized compounds and tools to remove imperfections in the paint, such as swirl marks, scratches, and oxidation. This process can restore the shine and gloss of your vehicle's paint and prepare it for further protection with a ceramic coating or wax. Paint correction, on the other hand, is a more intensive process that involves multiple stages of polishing and sanding to remove deeper scratches and defects in the paint. This process can take longer, but it can transform a vehicle's appearance and restore its original factory finish. Whether you're looking to improve the overall appearance of your vehicle or prepare it for a ceramic coating, polishing and paint correction can help to achieve a stunning, long-lasting finish.</p>
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
                  <p>Paint protection film, also known as clear bra, is a protective layer that can be applied to a car's exterior. This film is made of high-quality, clear polyurethane material and is designed to provide a barrier that can prevent scratches, scuffs, and other types of damage that can occur to a car's exterior.
                    The film is applied to the car's exterior by a professional technician, who will first clean the surface and then carefully cut and fit the film to the car's specific contours. Once applied, the film can provide a virtually invisible layer of protection that is unnoticeable to the naked eye.
                    Paint protection film is an excellent investment for those who want to protect their car's exterior from everyday wear and tear. It is especially beneficial for those who live in areas where road debris, such as rocks and gravel, are common. It can also be a good option for those who have expensive or rare paint jobs that they want to protect.
                    Overall, paint protection film is a practical and smart investment for car owners who want to keep their vehicles looking great for as long as possible. At our business, we offer professional paint protection film installation services to help you keep your car protected and looking great. Contact us today to learn more about our services and to schedule your appointment.</p>
               </div>   
            </div>
         </div>
      </div>
   </section>
   <!-- PAINT PROTECTION SECTION END -->
   <!-- CALGARY DETAILING SECTION BEGIN -->
  @include('sections.why')
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
                                 <img src="{{ asset(config('site_config.assets.images').'t1.png') }}" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Chris Haris</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="{{ asset(config('site_config.assets.images').'comma.png') }}" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="{{ asset(config('site_config.assets.images').'t2.png') }}" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Jim Morison</h5>
                                 <span>Doctor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="{{ asset(config('site_config.assets.images').'comma.png') }}" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="{{ asset(config('site_config.assets.images').'t3.png') }}" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Alex Cruis</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="{{ asset(config('site_config.assets.images').'comma.png') }}" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="inner-slider-box">
                           <div class="inner-img-flex">
                              <div class="inner-img">
                                 <img src="{{ asset(config('site_config.assets.images').'t1.png') }}" alt="image" class="img-fluid">
                              </div>
                              <div class="inner-img-text">
                                 <h5>Chris Haris</h5>
                                 <span>Professor</span>
                              </div>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="pos-comma">
                              <img src="{{ asset(config('site_config.assets.images').'comma.png') }}" alt="image" class="img-fluid">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="testimonial-btn">
                  <a href="javascript:void(0)" class="btn btn-primary">{{ trans('lang.view_all')}}</a>
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