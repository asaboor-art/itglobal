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
<!-- BUY SELL SECTION BEGIN -->

<section class="buy-sell-sec buy-sell-al">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            @include('properties.filter',[
                'heading'  => __('messages.properties.sec-heading'),
                'subheading' => __('messages.properties.sec-subheading'),
                'Properties' => $Properties, 
            ])
         </div>
      </div>
        <div id="properties">
           
        </div>
    </div>
   </div>
</section>
<!-- BUY SELL SECTION END -->
@endsection
@section('scripts')
<script>
$(document).ready(function(e){

    getProperties({});
});
 $(document).on('click','.page-link',function(e){
    e.preventDefault();
    getProperties({
        start:$(this).data('value')
    });
 });

 $(document).on('click','.search_filter',function(e){
    e.preventDefault();
    getProperties({
        category:$(this).data('value')
    });
 });

function getProperties(data){
    let request = {
        search_city:$('.search_city').val(),
        search_location:$('.search_location').val(),
        search_developer:$('.search_developer').val(),
        search_type:$('.search_type').val(),
        search_min_price:$('.search_min_price').val(),
        search_max_price:$('.search_max_price').val(),
        search_min_area:$('.search_min_area').val(),
        search_max_area:$('.search_max_area').val(),
        category:$('#category').val(),
        start:1,
        length:9,
        ...data
    };
    ajaxGet(`${blade_config.baseUrl}/properties/`,request,'#properties');
}
</script>
@endsection