<!-- HEADER SECTION BEGIN -->
      <header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="header-flex">
                <div class="menu-navbar">
                  <div class="head_container">
                      @php 
                                $Menus = config('site_config.menus.pages');
                        @endphp
                    <div class="logo">
                      <a href="javascriptvoid:(0)"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
                    </div>
                    <div class="menu" id="myTopnav">
                        <ul >
                            
                          @if(true)
                              @foreach($Menus as $key => $menu)
                                  @if(!$menu['is_main'])
                                  <li>
                                      <a href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                                  </li>
                                  @else
                                  <li >
                                      <a href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                                  </li>
                                  @endif
                              @endforeach
                          @endif
                          
                        </ul>
                      <ul class="desktop-hide">
                        <a href="javascript:void(0);" class="icon" onclick="openNav()">&#9776;</a>
                        <li><a href="javascriptvoid:(0)">Home</a></li>
                        <li><a href="javascriptvoid:(0)">Seo</a></li>
                        <li><a href="javascriptvoid:(0)">Web Design</a></li>
                        <li><a href="javascriptvoid:(0)">Social Media</a></li> 
                        <li><a href="javascriptvoid:(0)">Paid Avertisement</a></li>
                        <li><a href="javascriptvoid:(0)">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                  <div id="mySidenav" class="sidenav">
                    
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        @if(true)
                              @foreach($Menus as $key => $menu)
                                  @if(!$menu['is_main'])
                                  
                                      <a href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a>
                                  
                                  @else
                                  
                                      <a href="{{ route('home') }}">{{ trans('lang.'.$menu['name'])}}</a>
                                  
                                  @endif
                              @endforeach
                          @endif
                    <!-- <a href="javascriptvoid:(0)">Home</a>
                    <a href="javascriptvoid:(0)">Seo</a>
                    <a href="javascriptvoid:(0)">Web Design</a>
                    <a href="javascriptvoid:(0)">Social Media</a>
                    <a href="javascriptvoid:(0)">Paid Avertisement</a>
                    <a href="javascriptvoid:(0)">Contact Us</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER SECTION END -->
      <script>
        /*MENUBAR BEGIN*/
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
      }
      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      };
      /*MENUBAR END*/
      </script>