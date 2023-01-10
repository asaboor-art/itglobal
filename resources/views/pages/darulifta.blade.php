@extends('layouts.layoutv1')

@section('content')
@include('sections.bannerv2',[
  'heading' => 'د ا  رالافتاء '
  
  ])

  <section class="inner-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="talash-karein dark">
					<form action="#" method="get">
						<input type="hidden" name="_chk" value="1">
						<div class="col-xs-12 col-sm-12 col-md-2">
							<h3><i class="icon-talash-icon"></i>تلاش</h3> </div>
						<div class="col-xs-6 col-sm-6 col-md-4">
							<div class="form-group">
								<input type="text" name="title" placeholder="مطلوبہ لفظ" class="form-control"> </div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4">
							<div class="form-group">
								<select name="kitab" id="kitab" class="form-control" data-live-search="true">
									<option value="">کتاب منتخب کریں</option>
									<option value="aqaed" data-id="1">ایمان و عقائد</option>
									<option value="uloom-funoon" data-id="2">علوم و فنون</option>
									<option value="tareekh-o-siyar" data-id="8">تاریخ و سیر</option>
									<option value="siyasat-o-hijrat" data-id="9">سیاست و ہجرت</option>
									<option value="huqooq-muashret" data-id="4">حقوق و آدابِ معاشرت</option>
									<option value="taharat" data-id="10">طہارت</option>
									<option value="salat" data-id="11">نماز</option>
									<option value="janaiz" data-id="12">جنائز</option>
									<option value="zakat" data-id="13">زکات</option>
									<option value="soum" data-id="14">روزہ</option>
									<option value="haj" data-id="15">حج</option>
									<option value="nikah" data-id="16">نکاح</option>
									<option value="razaat" data-id="50">رضاعت</option>
									<option value="talaaq" data-id="18">طلاق</option>
									<option value="itaaq" data-id="52">عتاق</option>
									<option value="ayman-o-nuzoor" data-id="47">اَیمان و نذور</option>
									<option value="hudood" data-id="19">حدود</option>
									<option value="jihaad" data-id="20">جہاد</option>
									<option value="luqtaa-aur-laqeet" data-id="21">لقیط و لقطہ</option>
									<option value="aabeq-o-mafqood" data-id="48">آبق ومفقود</option>
									<option value="shirkat" data-id="22">شرکت</option>
									<option value="waqf" data-id="25">وقف</option>
									<option value="buyoo" data-id="28">بیوع</option>
									<option value="kafalah-o-hawalah" data-id="49">کفالت و حوالہ</option>
									<option value="qaza-o-iftaa" data-id="26">قضاء و اِفتاء</option>
									<option value="shahaadat" data-id="46">شہادات</option>
									<option value="wakalat" data-id="51">وکالت</option>
									<option value="dawaa" data-id="27">دعویٰ</option>
									<option value="sulah" data-id="44">صلح</option>
									<option value="muzaaribat" data-id="23">مضاربت</option>
									<option value="wadeeat" data-id="53">ودیعت (امانت رکھوانے اور رکھنے کے احکام)</option>
									<option value="aariyat" data-id="34">عاریت</option>
									<option value="hiba" data-id="29">ہبہ</option>
									<option value="ijaarah" data-id="31">اجارہ</option>
									<option value="ikrah" data-id="24">اکراہ</option>
									<option value="hajar" data-id="54">حجر</option>
									<option value="gasab" data-id="32">غصب</option>
									<option value="shufaa" data-id="38"> شفعہ</option>
									<option value="aayaan-o-manaafe-ki-taqseem" data-id="55">اَعیان و منافع کی تقسیم</option>
									<option value="muzaareat" data-id="36">مزارعت</option>
									<option value="musaaqaat" data-id="37">مساقات</option>
									<option value="said-o-zabaeh" data-id="39">ذبح و شکار</option>
									<option value="uzhiyah" data-id="40">قربانی</option>
									<option value="mamnooaat-mubahat" data-id="6">حظر و اباحت</option>
									<option value="ihya-elmawaat" data-id="30">احیاء الموات</option>
									<option value="ashriba" data-id="56">اشربہ</option>
									<option value="rahan" data-id="41">رہن</option>
									<option value="jinayaat" data-id="35">جنایات</option>
									<option value="wasiyyat" data-id="45">وصیت</option>
									<option value="khunsaa" data-id="57">خنثیٰ</option>
									<option value="faraez" data-id="33">فرائض</option>
									<option value="muamlat" data-id="5">معاملات</option>
									<option value="maash-o-amwaal" data-id="43">معاش و اموال</option>
									<option value="ebadat" data-id="3">عبادات</option>
									<option value="tanqeeh" data-id="58">تنقیح</option>
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-2"></div>
						<div class="col-xs-6 col-sm-6 col-md-4">
							<div class="form-group">
								<select name="bab" id="bab" class="form-control" data-live-search="true">
									<option value="">باب منتخب کریں</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4">
							<div class="form-group">
								<select name="fasal" id="fasal" class="form-control" data-live-search="true">
									<option value="">فصل منتخب کریں</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-2">
							<button type="submit" title="تلاش کریں"><i class="icon-search-icon"></i> <span>تلاش کریں</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="dar-ul-iftah">
					<div class="col-md-6">
						<div class="bar">
							<h4>نئے سوالات</h4> <a href="new-questions.html" title="تمام سوالات دیکھیں">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a> </div>
						<ul class="star-listing">
							<li><a href="readquestion/nekah-se-pehle-talaq-i-mullaq-ke-waswase-ane-se-talaq-ka-hukum-144403100130/28-09-2022.html">نکاح سے پہلے طلاق معلق کے وسوسے آنے سے طلاق کا حکم</a></li>
							<li><a href="readquestion/muzarb-ka-rabbul-mal-se-kraya-leny-ka-hukm-144401101313/18-08-2022.html">مضارب کا ربّ المال سے دکان کا کرایہ لینے کا حکم</a></li>
							<li><a href="readquestion/so-kar-uthne-ke-baad-aankhon-me-mojood-mail-pak-hoti-he-144403101467/15-10-2022.html">سوکر اٹھنے کے بعد آنکھوں میں موجود میل پاک ہوتی ہے</a></li>
							<li><a href="readquestion/insan-ko-allah-tala-ne-qudret-se-zadia-mukallaf-nh-bania-144403102365/26-10-2022.html">زبان میں لکنت کی وجہ سے نماز میں الفاظ صاف ادا نہیں ہوتے؛ کیا اس پر مواخذہ ہوگا؟</a></li>
							<li><a href="readquestion/gir-muqldeen-ko-choota-rafzi-khna-144401101474/20-08-2022.html">غیر مقلدین کو چھوٹا رافضی کہنا </a></li>
							<li><a href="readquestion/bivi-ko-kharcha-na-dene-aur-zulm-ositam-karne-ki-bina-par-adalat-se-tanseekh-e-nikah-ka-hukum-144403100798/06-10-2022.html">بیوی کو خرچہ نہ دینے اور ظلم ستم کرنے کی بنا پر عدالت سے تنسیخ نکاح کا حکم</a></li>
							<li><a href="readquestion/bey-ki-lughawi-istilahi-tareef-or-arkan-144403100660/05-10-2022.html">بیع کی لغوی اصطلاحی تعریف اور ارکان </a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<div class="bar">
							<h4>منتخب سوالات</h4> <a href="new-questions.html" title="تمام سوالات دیکھیں">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a> </div>
						<ul class="star-listing">
							<li><a href="readquestion/%d8%b1%d8%a8%db%8c%d8%b9-%d8%a7%d9%84%d8%a7%d9%88%d9%84-%da%a9%db%8c-%d9%85%d9%86%d8%a7%d8%b3%d8%a8%d8%aa-%d8%b3%db%92-%d8%aa%db%8c%d8%a7%d8%b1-%da%a9%d8%b1%d8%af%db%81-%da%a9%da%be%d8%a7%d9%86%d8%a7-%da%a9%da%be%d8%a7%d9%86%db%92-%da%a9%d8%a7-%d8%ad%da%a9%d9%85-144103200080/03-11-2019.html">ربیع الاول کی مناسبت سے تیار کردہ کھانا کھانے کا حکم</a></li>
							<li><a href="readquestion/12-rabee-ul-awwal-ka-roza-144203200730/30-10-2020.html">بارہ ربیع الاول کو روزہ رکھنا</a></li>
							<li><a href="readquestion/bara-rbeulaawl-ko-eid-mubarak-kahny-ka-hukm-144203200710/30-10-2020.html">بارہ (12) ربیع الاول کو عید مبارک کہنے کا حکم</a></li>
							<li><a href="readquestion/rabi-ul-awal-me-hamen-kia-krna-chaey-144203200606/28-10-2020.html">ربیع الاول میں کیا کرنا چاہیے؟</a></li>
							<li><a href="readquestion/%d8%b1%d8%a8%db%8c%d8%b9-%d8%a7%d9%84%d8%a7%d9%88%d9%84-%da%a9%db%92-%d9%85%db%81%db%8c%d9%86%db%92-%d9%85%db%8c%da%ba-%d9%85%d8%b1%d9%88%d8%ac%db%81-%d9%85%db%8c%d9%84%d8%a7%d8%af-%da%a9%db%8c-%d9%85%d8%ad%d8%a7%d9%81%d9%84-%d9%85%db%8c%da%ba-%d8%b4%d8%b1%da%a9%d8%aa-%d8%a7%d9%88%d8%b1-%d9%86%db%8c%d8%a7%d8%b2-%da%a9%da%be%d8%a7%d9%86%db%92-%da%a9%d8%a7-%d8%ad%da%a9%d9%85/12-11-2018.html">ربیع الاول کے مہینے میں مروجہ میلاد کی محافل میں شرکت اور نیاز کھانے کا حکم</a></li>
							<li><a href="readquestion/12-rbae-u-alawal-ko-eid-melad-manana-144211201149/03-07-2021.html">12 ربیع الاول کو میلاد النبی صلی اللہ علیہ وسلم کے عنوان سے جشن منانا</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row iftah-boxes">
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="100">
				<h4 class="title-heading">ایمان و عقائد<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>کفر و شرک اور ان کے احکام</h3>
							<p> <a href="readquestion/nmaz-juma-kaa-baad-zuhr-ahtiati-ka-hkom-144404100430/02-11-2022.html" title="یا غوث اعظم کہنے کا حکم">
                                    یا غوث اعظم کہنے کا حکم                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>اسلامی عقائد</h3>
							<p> <a href="readquestion/ksi-sahabi-ki-taarif-karty-howy-usy-144404100226/31-10-2022.html" title="کسی صحابی کی تعریف کرتے ہوئے اسے میری جان کہنے کا حکم">
                                    کسی صحابی کی تعریف کرتے ہوئے اسے میری جان کہنے کا حکم                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>اسلامی عقائد</h3>
							<p> <a href="readquestion/kaya-taqdeer-badel-sakti-hai-144404100129/29-10-2022.html" title="کیا تقدیر بدل سکتی ہے؟">
                                    کیا تقدیر بدل سکتی ہے؟                                </a> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="200">
				<h4 class="title-heading">علوم و فنون<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>تصوف و تزکیہ</h3>
							<p> <a href="readquestion/kia-hum-apny-shaik-ky-dye-huwy-mamolat-ko-ijtemai-tor-par-kar-sakty-hen-144404100550/03-11-2022.html" title="کیا ہم اپنے شیخ کے دیے ہوئے معمولات کو اجتماعی طور پر کر سکتے ہیں؟">
                                    کیا ہم اپنے شیخ کے دیے ہوئے معمولات کو اجتماعی طور پر ک...                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>دیگر علومِ دینیہ</h3>
							<p> <a href="readquestion/mutallaqah-awrt-bachah-yateeem-hoga-ya-nahin-144404100491/02-11-2022.html" title="مطلقہ عورت کا بچہ یتیم ہوگا یا نہیں؟">
                                    مطلقہ عورت کا بچہ یتیم ہوگا یا نہیں؟                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>حدیث و سنت</h3>
							<p> <a href="readquestion/301c36df646991a16c3db35ce5f00eef-144404100316/01-11-2022.html" title="محمد صلی اللہ علیہ وسلم کی کون کون سی سنتیں ہیں؟">
                                    محمد صلی اللہ علیہ وسلم کی کون کون سی سنتیں ہیں؟                                </a> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="300">
				<h4 class="title-heading">تاریخ و سیر<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>سیرت</h3>
							<p> <a href="readquestion/jihad-ka-hukum-144403102345/26-10-2022.html" title="موجودہ دور میں جہاد کا حکم ">
                                    موجودہ دور میں جہاد کا حکم                                 </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>تاریخ</h3>
							<p> <a href="readquestion/hazrat-e-umar-ka-dwr-ak-waqa-144403102107/23-10-2022.html" title="حضرت عمر رضی اللہ عنہ کے دورخلافت کا ایک واقعہ">
                                    حضرت عمر رضی اللہ عنہ کے دورخلافت کا ایک واقعہ                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>سیرت</h3>
							<p> <a href="readquestion/hamaray-nabi-s-a-a-w-kay-kitnay-baitay-thay-144403101564/16-10-2022.html" title="ہمارے نبی  صلي اللہ علیہ وسلم کے کتنے بیٹے تھے؟">
                                    ہمارے نبی  صلي اللہ علیہ وسلم کے کتنے بیٹے تھے؟                                </a> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="400">
				<h4 class="title-heading">سیاست و ہجرت<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>ہجرت</h3>
							<p> <a href="readquestion/dawt-tabligh-ko-hejrt-se-tabir-karny-ka-hukm-144403101396/14-10-2022.html" title="دعوتِ تبلیغ کے مروّجہ نقل وحرکت کو ہجرت سےتعبیر کرنے کا حکم">
                                    دعوتِ تبلیغ کے مروّجہ نقل وحرکت کو ہجرت سےتعبیر کرنے کا...                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>سیاست</h3>
							<p> <a href="readquestion/kia-riyasat-nikah-kai-lyai-umer-ki-had-muqarrar-karnai-ki-mujaz-hai-144304100710/28-11-2021.html" title="کیاریاست نکاح کے لیے عمر کی حد مقررکرنے کی مجازہے ؟">
                                    کیاریاست نکاح کے لیے عمر کی حد مقررکرنے کی مجازہے ؟                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>سیاست</h3>
							<p> <a href="readquestion/tahkim-144303100554/23-10-2021.html" title="تحکیم ">
                                    تحکیم                                 </a> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="500">
				<h4 class="title-heading">حقوق و آدابِ معاشرت<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>آدابِ معاشرت</h3>
							<p> <a href="readquestion/mangaiter-ko-mein-tumhari-maa-k-sath-tha-kehna-144404100343/01-11-2022.html" title="منگیتر کو یہ کہنا کہ  ’’میں تمہاری ماں کے ساتھ تھا‘‘">
                                    منگیتر کو یہ کہنا کہ  ’’میں تمہاری ماں کے ساتھ تھا‘‘                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>حقوق</h3>
							<p> <a href="readquestion/anfaradi-davet-kaya-hai-144404100131/29-10-2022.html" title="انفرادی دعوت کیا ہے؟">
                                    انفرادی دعوت کیا ہے؟                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>حقوق</h3>
							<p> <a href="readquestion/zain-ul-abideen-name-rakhna-144404100096/29-10-2022.html" title="زین العابدین نام رکھنا">
                                    زین العابدین نام رکھنا                                </a> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 animate" data-animation="fadeInUp" data-duration="600">
				<h4 class="title-heading">طہارت<a href="new-questions.html" title="تمام سوالات دیکھیں" class="">تمام سوالات دیکھیں<i class="icon-pointer-2"></i></a></h4>
				<div class="islam-box">
					<div class="media">
						<div class="media-body">
							<h3>وضو</h3>
							<p> <a href="readquestion/wazo-ky-bad-ki-dua-ki-fazeelat-144404100599/03-11-2022.html" title="وضو کے بعد کی دعا کی فضیلت ">
                                    وضو کے بعد کی دعا کی فضیلت                                 </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>وضو</h3>
							<p> <a href="readquestion/angrazi-baal-rakhnaa-wala-kii-iqtidaa-mii-namaz-parhnaa-ka-hkookm-144403102230/24-10-2022.html" title="وضو کے دوران ہر عضو دھوتے وقت دعا پڑھنے کا حکم">
                                    وضو کے دوران ہر عضو دھوتے وقت دعا پڑھنے کا حکم                                </a> </p>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h3>حیض، نفاس، استحاضہ</h3>
							<p> <a href="readquestion/hhaiz-ki-mudt-kitny-dn-hy-144403101889/20-10-2022.html" title="حیض کی مدت کتنے دن ہے؟">
                                    حیض کی مدت کتنے دن ہے؟                                </a> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="matloba-sawal full-width"> <i class="icon-questions"></i>
					<div class="txt">
						<h3 class="text-red">مطلوبہ سوال موجود نہیں؟</h3>
						<p>اگر آپ کا مطلوبہ سوال موجود نہیں تو اپنا سوال پوچھنے کے لیے نیچے کلک کریں، سوال بھیجنے کے بعد جواب کا انتظار کریں۔ سوالات کی کثرت کی وجہ سے کبھی جواب دینے میں پندرہ بیس دن کا وقت بھی لگ جاتا ہے۔</p> <a href="ask-question.html" class="btn">سوال پوچھیں<i class="icon-angle-left"></i></a> </div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection