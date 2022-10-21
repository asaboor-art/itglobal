@php
$latestCategories = \App\Models\Category::where("show_on_home", 1)->orderBy('id', 'DESC')
    ->get();
@endphp
<video autoplay muted loop id="myVideo">
    <source src="{{ asset('video/video-1.mp4') }}" type="video/mp4">
</video>

<div class="banner-overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-0 col-12"></div>
        <div class="col-md-8 col-sm-12 col-12">
            <div class="banner-content" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
                <h1><span class="blue-font">Ideas Matter.</span> Find the perfect <span>business idea</span> for your
                    investment.</h1>
                <form method="GET" action="{{ route('ideas.get') }}">
                    <div class="search-bar">
                        <input type="text" placeholder="Search the idea" name="search"
                            value="{{ request()->input('search') }}">
                        <button class="search-btn">Search</button>
                        <div class="search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>

                    </div>
                </form>
                <div class="popular-listing">
                    <ul>
                        <li>Popular:</li>
                        @foreach ($latestCategories as $category)
                            @if (!Auth::check())
                                <li><a href="/login">{{ $category->name }}</a></li>
                            @elseif (auth()->user()->roles[0]->name == 'company')
                                <li><a href="/company/ideas?category={{ $category->id }}">{{ $category->name }}</a>
                                </li>
                            @elseif (auth()->user()->roles[0]->name == 'innovator')
                                <li><a
                                        href="/innovator/ideas?category={{ $category->id }}">{{ $category->name }}</a>
                                </li>
                            @endif
                        @endforeach
                        {{-- <li><a href="/login">Industry</a></li>
                        <li><a href="/login">Technology</a></li>
                        <li><a href="/login">Food</a></li>
                        <li><a href="/login">artificial intelligence</a></li> --}}
                    </ul>
                </div>
                <div class="trusted-listing">
                    <ul>
                        <li>Trusted by:</li>
                        <li><a href="#"><img src="{{ asset('images/1.png') }}" alt=""
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('images/2.png') }}" alt=""
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('images/cnn-logo.png') }}" alt=""
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('images/4.png') }}" alt=""
                                    class="img-fluid"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-md-2 col-sm-0 col-12"></div>
    </div>
</div>
