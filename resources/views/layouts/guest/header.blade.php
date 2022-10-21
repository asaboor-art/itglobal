@php
use App\Models\Notification;
@endphp
@php $count=0; @endphp

@if (!in_array(\Route::currentRouteName(), ['company.order.get', 'company.order.confirm']))
    <header class="header {{ \Route::currentRouteName() != 'home' ? 'bg-dark' : '' }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark mt-2 p-0">
                        <a href="{{ route('home') }}" class="navbar-brand">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse for-vertical-nav-center" id="navbarCollapse">

                            <ul class="navbar-nav navbar-parent">
                                @auth
                                    @if (auth()->user()->hasRole('innovator'))
                                        @foreach (config('menu.auth.innovator') as $menu)
                                            <li class="nav-item nav-list"><a href="{{ prefix_route($menu['route']) }}"
                                                    class="nav-link active">{{ trans('lang.' . $menu['name']) }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        @foreach (config('menu.auth.company') as $menu)
                                            <li class="nav-item nav-list"><a href="{{ prefix_route($menu['route']) }}"
                                                    class="nav-link active">{{ trans('lang.' . $menu['name']) }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                    @if (auth()->user()->hasRole('innovator') || auth()->user()->hasRole('company'))
                                        @if (auth()->user()->{auth()->user()->roles[0]->name}->is_subscribed == 0)
                                            <li class="trial-button"><a
                                                    href="{{ route('subscription.billing', 'start-trail') }}"
                                                    class="nav-link trial-btn">{{ trans('messages.get-free-trail') }}</a>
                                            </li>
                                        @endif
                                    @endif
                                    {{-- <li class="nav-item notification-bell"><a href="#" class="nav-link"><img
                                        src="{{ asset('images/notification.png') }}" alt="">
                                    </a></li> --}}
                                    @if (!auth()->user()->hasRole('admin'))
                                        <li class="nav-item nav-notify-down pt-3">
                                            <a class="nav-link noti-drop m-0" href="javascript:void(0)" id="bell">
                                                <img src=" {{ asset('images/notification.png') }}" class="img-fluid"
                                                    onerror="this.onerror=null;this.src='{{ asset('images/notification.png') }}';">
                                            </a>

                                            <div class="notifications" id="box">
                                                <h2>Notifications</h2>
                                                @php
                                                    if (
                                                        auth()
                                                            ->user()
                                                            ->hasRole('innovator')
                                                    ) {
                                                        $notifications = Notification::where('notifiable_id', auth()->user()->innovator->id)
                                                            ->orderBy('created_at', 'DESC')
                                                            ->get();
                                                        $count = count($notifications);
                                                    } elseif (
                                                        auth()
                                                            ->user()
                                                            ->hasRole('company')
                                                    ) {
                                                        $notifications = Notification::where('notifiable_id', auth()->user()->company->id)
                                                            ->orderBy('created_at', 'DESC')
                                                            ->get();
                                                        $count = count($notifications);
                                                    }
                                                @endphp
                                                @foreach ($notifications as $notification)
                                                    @php
                                                        $notify = json_decode($notification['data']);
                                                    @endphp
                                                    <div class="notifications-item">
                                                        <a href="{{ $notify[0]->link }}" class="mb-0">
                                                            <div class="text">
                                                                <h4>{{ $notify[0]->message }}</h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>




                                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @php
                                    if(auth()->user()->hasRole('innovator')){

                                    $notifications =
                                    Notification::where('notifiable_id',auth()->user()->innovator->id)->orderBy('created_at','DESC')->get();
                                    }
                                    else {
                                    $notifications =
                                    Notification::where('notifiable_id',auth()->user()->company->id)->orderBy('created_at','DESC')->get();
                                    }


                                    @endphp
                                    @foreach ($notifications as $notification)
                                    @php
                                    $notify = json_decode($notification['data']);
                                    @endphp
                                    <a class="dropdown-item" href="{{ $notify[0]->link }}">{{ $notify[0]->message }}</a>
                                    @endforeach
                                </div> --}}
                                        </li>
                                    @endif
                                    <li class="nav-item dropdown nav-dp-down">
                                        <a class="nav-link dropdown-toggle dropdown-image m-0" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            @if (auth()->user()->hasRole('innovator') ||
                                                auth()->user()->hasRole('company'))
                                                <img src="{{ asset(auth()->user()->{auth()->user()->roles[0]->name}->profile_picture) }}"
                                                    class="img-fluid"
                                                    onerror="this.onerror=null;this.src='{{ asset('images/avatar.png') }}';">
                                            @else
                                                <img src="{{ asset('images/avatar.png') }}" class="img-fluid"
                                                    onerror="this.onerror=null;this.src='{{ asset('images/avatar.png') }}';">
                                            @endif
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item"
                                                href="{{ prefix_route('dashboard') }}">{{ trans('lang.dashboard') }}</a>
                                            @if (auth()->user()->hasRole('innovator') ||
                                                auth()->user()->hasRole('company'))
                                                @if (auth()->user()->{auth()->user()->roles[0]->name}->is_subscribed == 1)
                                                    <a class="dropdown-item"
                                                        href="{{ prefix_route('profile.get') }}">{{ trans('messages.edit', ['attribute' => trans('lang.profile')]) }}</a>
                                                @endif
                                            @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="logout(event)">{{ trans('lang.log-out') }}</a>
                                        </div>
                                    </li>
                                    <script>
                                        function logout(event) {
                                            localStorage.removeItem('user');
                                            return true;
                                        }
                                    </script>
                                @else
                                    {{-- @foreach (\App\Models\SitePage::where('is_active', 1)->get() as $menu)
                                        <li class="nav-item"><a href="/pages/{{ $menu->slug }}"
                                                class="nav-link active">{{ $menu->title }}</a>
                                        </li>
                                    @endforeach --}}
                                    <li class="nav-item"><a href="{{ url("/#about-us") }}" class="nav-link active">{{ trans('lang.about-us') }}</a></li>
                                    <li class="nav-item"><a href="{{ url("/#our-mission") }}" class="nav-link active">{{ trans('lang.mission') }}</a></li>
                                    <li class="nav-item"><a href="{{ url("/pages/work-here") }}" class="nav-link active">{{ trans('lang.work-here') }}</a></li>
                                    <li class="nav-item"><a href="{{ url("/pages/faqs") }}" class="nav-link active">{{ trans('lang.faqs') }}</a></li>
                                    <li class="join"> <a href="{{ route('join-now') }}"
                                            class="join-btn">{{ trans('lang.join-now') }}</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
@else
    <header class="order-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="nv-od-main">

                        <div class="od-logo"> <a href="{{ route('home') }}" class="navbar-brand">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a></div>
                        <div class="for-order-nav">
                            <button class="deals-button"><span class="confirmed"><i class="fa fa-check"
                                        aria-hidden="true"></i></span>Deal Details<a href="javascript:void(0)"
                                    class="right-angle"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></button>
                            <button class="paid-button"><span class="pay">3</span>Confirm & Pay<a
                                    href="javascript:void(0)" class="right-angle"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
<script>
    // $(document).ready(function() {
    //     if ({{ $count }} == 0) {
    //         $('#box').removeClass('notifications');
    //         $('#box').addClass('null-notifications');
    //     }
    // });
</script>
