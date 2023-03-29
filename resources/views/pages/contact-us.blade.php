@extends('layouts.layoutv1')

@section('content')
@php $name = explode(' ',$Page->name); @endphp
@include('banners.bannerv4',[
   'heading' => count($name)>1? count($name)-2>0?"<span>". implode(" ",array_slice($name,count($name)-2))."</span>":"<span>".$name[0]."</span> ".$name[count($name)-1]:"<span>".$name[0]."</span>",
    'subheading' => $Page->description
  ])
<!-- CONTACT DETAIL SECTION BEGIN -->
<section class="contact-detail-sec">
      <div class="container">
         <div class="row contact-boxes">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.call_us') }}</h6>
                  <a href="tel:{{ config('site_config.contacts.phone')}}">{{ config('site_config.contacts.phone')}}</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.email_us') }}</h6>
                  <a href="mailto:{{ config('site_config.contacts.email')}}">{{ config('site_config.contacts.email')}}</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-sm-6">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.follow_us') }}</h6>
                  <div class="social-icon-links">
                     <ul>
                        <li><a href="{{ config('site_config.contacts.instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ config('site_config.contacts.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ config('site_config.contacts.twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{ config('site_config.contacts.whatsapp')}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row embed-map">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="google-map-embed">
                  <iframe src="{{ config('site_config.contacts.map')}}" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
</section>
 <!-- CONTACT DETAIL SECTION END -->
<!-- CONTACT FORM SECTION BEGIN -->
   <section class="contact-form-sec">
      @include('contact-forms.formv1',[
         'heading' => "<span>How Can We</span> Help You?",
         'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
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
   </section>
   <!-- CONTACT FORM SECTION END -->
   @include('sections.newsletterv1')
@endsection