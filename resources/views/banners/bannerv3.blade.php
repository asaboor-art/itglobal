<section class="banner-sec-bg">
      <div class="banner-overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
               <div class="banner-inner-content">
                  <h1>{!! trans('content.banner.heading') !!}</h1>
                  <h6>{!! trans('content.banner.subheading') !!}</h6>
                  <p>{!! trans('content.banner.description') !!}</p>
                  <div class="banner-btn">
                     <a href="{{ route('site-pages','contact-us') }}" class="btn btn-primary">{{ trans('lang.book_now')}}!</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
               <div class="form-sec">
               @include('contact-forms.formv2',[
         'heading' => "Let's get in Touch",
         'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
         'form' => [
            'class' => 'contact-form-fields',
            'container_class' => 'field-con-flex',
            'fields' => [
               [
                  
                  'type'  => 'text',
                  'class' => 'field-inner-con',
                  'name' => 'first_name',
                  'placeholder' =>  trans('messages.placeholder',['attribute' => trans('lang.name')]) 
               ],
               [
                  
                  'type'  => 'email',
                  'class' => 'field-inner-con',
                  'name' => 'email',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.email')]) 
               ],
               [
                  
                  'type'  => 'tel',
                  'class' => 'field-inner-con',
                  'name' => 'phone',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.phone')]) 
               ],
               [
                  
                  'type'  => 'text',
                  'class' => 'field-inner-con',
                  'name' => 'subject',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.subject')]) 
               ],
               [
                  
                  'type'  => 'textarea',
                  'class' => 'field-inner-con',
                  'name' => 'message',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.message')]) 
               ]
            ]
         ]
      ])
               </div>
            </div>
         </div>
      </div>
   </section>