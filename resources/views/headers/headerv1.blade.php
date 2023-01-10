<div class="print-header">
   <img src="{{ asset(config('site_config.assets.logo')) }}" alt="">
</div>
<div class="top">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 col-md-4">
            @include('sections.langdropdown')
         </div>
         <div class="col-sm-4 col-md-4 text-center">
            <p class="arabic">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
         </div>
         <div class="col-sm-4 col-md-4 text-left">
            @include('sections.datebar')
         </div>
      </div>
   </div>
</div>
<header>
   <div class="container">
   <div class="row">
      <div class="col-md-3 animate" data-animation="fadeInUp" data-duration="100">
         <a href="index.html" class="logo">
         <img src="{{ asset(config('site_config.assets.logo')) }}">
         </a>
         <div id="nav-icon3" class="menu-open"> 
            <span></span> <span></span> <span></span> <span></span>
         </div>
      </div>
      <div class="col-md-9 mobile-menu animate" data-animation="fadeInUp" data-duration="200">
         <nav class="main-navigation">
            <ul>
               <li>
                  <a href="">سرورق</a>
                  <i class="icon-angle-left mobile-menu"></i>
                 
               </li>
               <li>
                  <a href="{{ route('site-pages','about-us') }}">تعارف</a>
                 
               </li>
               <li>
                  <a href="{{ route('site-pages','darulifta') }}">د ا  رالافتاء </a>
                     <i class="icon-angle-left mobile-menu"></i>
                     <ul class="dropdown">
                     	<li>
                     		<a href="new-questions.html">نئے سوالات</a> 
                     	</li>
                     	<li>
                     		<a href="ask-question.html">مسئلہ پوچھیں</a> 
                     	</li>
                     	<li>
                     		<a href="ask-dream.html">خواب کی تعبیر معلوم کریں</a> 
                     	</li>
                     	<li>
                     		<a href="islamic-name.html">اسلامی نام</a> 
                     	</li>
                     	<li>
                     		<a href="namaz-times.html">نماز کے اوقات</a> 
                     	</li>
                     	<li>
                     		<a href="duaen.html">مسنون دعائیں</a> 
                     	</li> 
                     </ul> 
                 
                  
               </li>
			   <li>
                  <a href="{{ route('site-pages','contact-us') }}">رابطہ</a>
                  <!-- <i class="icon-angle-left mobile-menu"></i> -->
               </li>
			   <!-- <li>
                  <a href="">طریقہ تعاون</a>
                  <i class="icon-angle-left mobile-menu"></i>
               </li> -->
            </ul>
         </nav>
     
      </div>
   </div>
</header>