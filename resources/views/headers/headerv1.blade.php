<!-- HEADER SECTION BEGIN -->
<header class="header" id="header">
     <div class="container">
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
           <div class="header-inner">
              <nav class="navbar container">
              <a href="{{ route('home') }}"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
                <div class="burger" id="burger">
                   <span class="burger-line"></span>
                   <span class="burger-line"></span>
                   <span class="burger-line"></span>
                </div>
                <div class="menu" id="menu">
                <ul class="menu-inner">
                        @php 
                            $Menus = config('site_config.menus.pages');
                        @endphp
                    @if(true)
                        @foreach($Menus as $key => $menu)
                            @if(!$menu['is_main'])
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @else
                            <li class="menu-item">
                                <a class="menu-link active" href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                      
                    </ul>
                   <!-- <ul class="menu-inner">
                      <li class="menu-item"><a href="#" class="menu-link active">Home</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">About us</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Services</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Blogs</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Contact Us</a></li>
                      <li class="menu-item"><a href="javascript:void(0)" class="btn btn-primary">Book Now!</a></li>
                   </ul> -->
                </div>
                <div class="book-now-btn">
                  <a href="{{ route('site-pages','contact') }}" class="btn btn-primary">Book Now!</a>
                </div>
              </nav>
           </div>
         </div>
       </div>
     </div>
   </header>

    <!-- HEADER SECTION END -->