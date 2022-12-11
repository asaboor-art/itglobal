<!-- BANNER SECTION BEGIN -->
<section class="banner-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="banner-inner-content">
					<img src="{{ asset(config('site_config.assets.images').'banner-inner-img.png') }}" alt="image" class="img-fluid">
					<p>A full-service, family-owned digital marketing  company with its headquarters in Calgary, AB , K13.ca was founded in 2019. However, as we continue to expand, we now provide services in Toronto, Vancouver & Montreal!</p>
					<div class="banner-btn">
						<a href="{{ route('site-pages','contact-us')}}" class="btn btn-primary">{{ strtoupper(trans('lang.get_a_free_quote')) }}</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="girl-img">
					<img src="{{ asset(config('site_config.assets.images').'girl-img.png') }}" alt="image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BANNER SECTION END -->