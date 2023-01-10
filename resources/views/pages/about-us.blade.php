@extends('layouts.layoutv1')

@section('content')
<!-- BANNER SECTION BEGIN -->
  @include('sections.bannerv2',[
    'heading' => 'تعارف'
    ])
    <!-- BANNER SECTION END -->
    <!-- About Us SECTION BEGIN -->
    
<section class="inner-section">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-md-push-3">
            <div class="inner-head">
               <div class="para">
                  <p>تعارف</p>
               </div>
            </div>
            <p>
            <p style="text-align:justify;">"جامعہ علوم اسلامیہ علامہ بنوری ٹاؤن کراچی" ایک غیر سرکاری، دینی اور علمی ادارہ ہے۔ جو اپنے نصاب تعلیم، نظم و نسق اور تربیت کے اعتبار سے ایک امتیازی حیثیت رکھتا ہے۔</p>
            <p style="text-align:justify;">برصغیر-پاک وہند و بنگلہ دیش-کے مسلمانوں پر علماءحق کا بہت بڑا احسان ہے، جنہوں نے دینی مدارس اور جامعات قائم کرکے ایک طرف دینی علوم – علوم نبوت – کی حفاظت کی تو دوسری طرف ایسے علماء حق پیداکئے جنہوں نے اس امت کی دینی، ایمانی اور اخلاقی تربیت فرمائی، اسی کی برکت ہے کہ آج شعائر اسلام زندہ ہیں، معروف اور منکر کا فرق واضح ہے اور دلوں میں ایمان کی حرارت باقی ہے۔</p>
            <p style="text-align:justify;">علماء حق کی ان برگزیدہ ہستیوں میں ہمارے <strong>شیخ محدث العصر علامہ محمد یوسف بنوری رحمہ اللہ تعالی</strong> تھے، جنہیں اکابر امت کا تلمذ اور رفاقت نصیب ہوئی اور اپنی پوری زندگی علوم نبوت کی تعلیم و تدریس میں گزاری- <span class="ar_writing">فياله من سعادة</span> –</p>
            <p style="text-align:justify;">اس طویل تجربہ سے آپ کے دل میں ایک داعیہ پیدا ہوا کہ اگر اللہ تعالی توفیق دے تو ایک ایسا علمی ادارہ قائم کروں جو منفرد خصوصیات  کا حامل ہو اور جس سے باصلاحیت علماء ربانیین پیدا ہوں جو امت کی صحیح راہنمائی کرسکیں، اس  داعیہ کو حضرت شیخ رحمہ اللہ تعالی نے اپنے اس مقدمہ میں تفصیل سے بیان فرمایا ہے، جو آپ نے <span class="ar_writing">"دليل الجامعة"</span> کے لیے لکھا تھا۔</p>
            <p style="text-align:justify;">حضرت شیخ رحمہ اللہ کی محنت کو اللہ تعالیٰ نے قبولیت بخشی اور ان کی زندگی میں اس جامعہ کی حیثیت ایک بین الاقوامی اسلامی یونیورسٹی کی ہوگئی، جہاں سے پاکستان اور بیرون پاکستان کے ہزاروں تشنگان علم فیض یاب ہوکر اپنے اپنے ملکوں  اور علاقوں میں کام کرنے لگے۔</p>
            <p style="text-align:justify;">حضرت شیخ رحمہ اللہ کی رحلت کے بعد ان کے جانشینوں کے دور میں اللہ تعالیٰ نے جامعہ کو مزید ترقی عطا فرمائی اور اس کی کراچی میں بہت سی شاخیں قائم ہوگئیں، جن میں مرکز سمیت اس وقت بارہ ہزار سے زائد طلبہ اور طالبات علم حاصل کررہے ہیں۔</p>
            </p> 
         </div>
         <div class="col-md-3 col-md-pull-9">
            <div class="side-menu">
               <h3><i class="icon-mazameen-icon"></i>معلوماتی لنکس</h3>
               <ul class="page-links">
                  <li>
                     <a href="{{ route('site-pages','about-us') }}">تعارف</a> 
                  </li>
                  <!-- <li>
                     <a href="%d8%ad%d8%b6%d8%b1%d8%aa-%d8%a8%d9%86%d9%88%d8%b1%db%8c-%d8%b1%d8%ad%d9%85%db%81-%d8%a7%d9%84%d9%84%db%81-2.html">حضرت بنوری رحمہ اللہ</a> 
                  </li>
                  <li>
                     <a href="%d8%ad%d8%b6%d8%b1%d8%aa-%d8%a8%d9%86%d9%88%d8%b1%db%8c-%d8%b1%d8%ad%d9%85%db%81-%d8%a7%d9%84%d9%84%db%81.html">مقدمہ از بانی جامعہ محدث العصر حضرت مولانا سید محمد یوسف بنوری رحمہ اللہ</a> 
                  </li>
                  <li>
                     <a href="%d8%ac%d8%a7%d9%85%d8%b9%db%81-%da%a9%db%8c-%d8%aa%d8%a7%d8%b3%db%8c%d8%b3.html">جامعہ کی تاسیس</a> 
                  </li>
                  <li>
                     <a href="%d8%a7%d8%ba%d8%b1%d8%a7%d8%b6-%d9%88-%d9%85%d9%82%d8%a7%d8%b5%d8%af.html">جامعہ کے اغراض و مقاصد</a> 
                  </li>
                  <li>
                     <a href="%d9%86%d8%b8%d9%85-%d9%88%d9%86%d8%b3%d9%82.html">جامعہ کا نظم ونسق</a> 
                  </li>
                  <li>
                     <a href="%d9%86%d8%b8%d8%a7%d9%85-%d8%aa%d8%b9%d9%84%db%8c%d9%85.html">جامعہ کا نظام تعلیم</a> 
                  </li>
                  <li>
                     <a href="%d8%b4%d8%b1%d8%a7%d8%a6%d8%b7-%d8%af%d8%a7%d8%ae%d9%84%db%81.html">ضروری ہدایات اور قواعد وضوابط</a> 
                  </li>
                  <li>
                     <a href="%d9%86%d8%b8%d8%a7%d9%85-%d8%a7%d9%85%d8%aa%d8%ad%d8%a7%d9%86.html">امتحانات</a>	
                  </li>
                  <li>
                     <a href="%d8%b4%d8%b9%d8%a8%db%92.html">جامعہ کے شعبہ جات</a>	
                  </li>
                  <li>
                     <a href="%d9%85%d8%ac%d9%84%d8%b3-%d8%af%d8%b9%d9%88%d8%aa-%d9%88%d8%aa%d8%ad%d9%82%db%8c%d9%82-%d8%a7%d8%b3%d9%84%d8%a7%d9%85%db%8c.html">مطبوعہ کتب، رسائل ومقالات</a>	
                  </li>
                  <li>
                     <a href="%d8%ac%d8%a7%d9%85%d8%b9%db%81-%da%a9%db%8c-%d8%b4%d8%a7%d8%ae%db%8c%da%ba.html">جامعہ کی شاخیں</a>	
                  </li>
                  <li>
                     <a href="donations.html">جامعہ کے مصارف</a>	
                  </li> -->
               </ul>
            </div>
            <div class="side-menu">
               <a href="javascript:void(0);" class="sidethumb">
                  <img src="{{ asset(config('site_config.assets.images'.'xsidethumb-img2.jpg.pagespeed.ic.SeIIs6Eyvv.jpg')) }}" alt="" class="img-responsive">
                  <div class="sidethumbtxt">
                     <h4>منتخب اسلامی نام</h4>
                     <span>یہاں کلک کریں</span>	
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
   
@endsection
