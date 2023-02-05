

<div class="gradient-bg">
   @include('sections.topbar')
   <!-- HEADER SECTION BEGIN -->
   <header class="header" id="header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="header-inner">
                  <nav class="navbar container">
                     @include('sections.logo')
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
                                <li class="{{ $menu['class']}}">
                                    
                                 <a href="{{ route('site-pages',$menu['link']) }}" class="{{ $menu['link-class']}}">{{ trans('lang.'.$menu['name'])}}</a>
                                 

                                 </li>
                                @else
                                <li class="{{ $menu['class'] }}">
                                    <a href="{{ route('home') }}" class="{{ $menu['link-class'] }}">{{ trans('lang.'.$menu['name'])}}</a>
                                
                                 </li>
                                @endif
                            @endforeach
                        @endif
                        </ul>
                        <div class="social-icons-links social-icons-links2">
                            @include('sections.social-icons')
                        </div>
                        <div class="address-box address-box2">
                        @php 
                            $Contacts = config('site_config.contacts');
                        @endphp
                           <ul>
                           <li><a href="tel:{{ $Contacts['phone'][0] }}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{ $Contacts['phone'][0] }}</a></li>
                            <li><a href="mailto:{{ $Contacts['email'][0] }}"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $Contacts['email'][0] }}</a></li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- HEADER SECTION END -->
</div>
    <!-- HEADER SECTION END -->