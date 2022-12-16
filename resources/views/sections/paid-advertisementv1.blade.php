<!-- PAID ADVERTISEMENT SECTION BEGIN -->
<section class="webdesign-sec paid-advertisement-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<img src="{{ asset(config('site_config.assets.images').'paid-img.png') }}" alt="image" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="webdesign-content">
					<h2>{{ strtoupper(trans('lang.paid_advertisement')) }}</h2>
					<p>We offer analytics on traffic and clicks that track your spending and performance in addition to reports on conversions and leads tracking.</p>
					<div class="work-btn">
					<a href="{{ route('site-pages','paid-advertisement')}}" class="btn btn-primary">{{ strtoupper(trans('lang.learn_more')) }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- PAID ADVERTISEMENT SECTION END -->