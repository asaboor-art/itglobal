<div class="buy-sell-box buy-sell-pg wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
    <h2>{{ isset($heading)?$heading:__('messages.properties.sec-heading') }}</h2>
    <p>{{ isset($subheading)?$heading:__('messages.properties.sec-subheading')}}</p>
    <form class="filter">
    <div class="fields-box">
       <div class="new-add-boxes">
          <input type="text" placeholder="{{ __('lang.city') }}" class="form-control search_city" name="search_city" value="{{ $request->search_city?$request->search_city:''}}">
          <input type="text" placeholder="{{ __('lang.location') }}" class="form-control search_location" name="search_location" value="{{ $request->search_location?$request->search_location:''}}">
          <input type="text" placeholder="{{ __('lang.type') }}" class="form-control search_type" name="search_type" value="{{ $request->search_type?request()->search_type:''}}">
       </div>
       <div class="new-add-boxes">
          <div class="dev-flex">
             <input type="text" placeholder="{{ __('lang.developer') }}" class="form-control search_developer" name="search_developer">
             <input type="hidden"  class="form-control" id="category" value="{{ $request->category?request()->category:'' }}">
          </div>
          <div class="dev-flex">
             <input type="number" placeholder="{{ __('lang.min_price') }}" class="form-control search_min_price" name="search_min_price">
             <input type="number" placeholder="{{ __('lang.max_price') }}" class="form-control search_max_price" name="search_max_price">
          </div>
          <div class="dev-flex">
             <input type="number" placeholder="{{ __('lang.max_area') }}" class="form-control search_min_area" name="search_min_area">
             <input type="number" placeholder="{{ __('lang.max_area') }}" class="form-control search_max_area" name="search_max_area">
          </div>
       </div>
       <div class="form-btn">
          <button type="button" class="btn btn-primary search_filter" data-value="Buy">{{ __('lang.buy')}}</button>
          <button type="button" class="btn btn-primary search_filter" data-value="Rent">{{ __('lang.rent')}}</button>
       </div>
    </div>
</form>
</div>