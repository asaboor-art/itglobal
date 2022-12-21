<!-- SEO SECTION BEGIN -->
<section class="seo-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="seo-content">
					<h2>{{ strtoupper(trans('lang.seo')) }}</h2>
					<p>You must position and market your business as THE authority for what you do in the markets where you operate if you want to rank highly organically.</p>
					<div class="work-btn seo-btn">
					<a href="{{ route('site-pages','seo')}}" class="btn btn-primary">{{ strtoupper(trans('lang.learn_more')) }}</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="seo-girl-img">
					<img src="{{ asset(config('site_config.assets.images').'seo-girl.png') }}" alt="image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SEO SECTION END -->