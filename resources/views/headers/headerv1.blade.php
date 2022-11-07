<!-- HEADER SECTION BEGIN -->
<header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="nav-bar-cls">
              <nav class="navbar navbar-expand-lg navbar-light">
                  <a href="index.html"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @php 
                            $Menus = config('site_config.menus.pages');
                        @endphp
                    @if(true)
                        @foreach($Menus as $key => $menu)
                            @if(!$menu['is_main'])
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @else
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                      
                    </ul>
                     <div class="quote-btn">
                      <a href="{{ route('site-pages','get-a-quote') }}" class="btn btn-primary">Get a Quote</a>
                    </div>
                  </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER SECTION END -->