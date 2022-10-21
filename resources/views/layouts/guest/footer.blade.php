@php
$latestCategories = \App\Models\Category::orderBy('id','DESC')->take(8)->get();
@endphp
<div class="container">
                <div class="for-border">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-12">
                            <div class="footer-listing">
                                <ul>
                                    <h4>Categories</h4>
                                    @foreach ($latestCategories as $category)
                                        @if(!Auth::check())
                                            <li><a href="/login">{{ $category->name }}</a></li>
                                        @elseif (auth()->user()->roles[0]->name == 'company')
                                            <li><a href="/company/ideas?category={{ $category->id }}">{{ $category->name }}</a></li>
                                        @elseif (auth()->user()->roles[0]->name == 'innovator')
                                            <li><a href="/innovator/ideas?category={{ $category->id }}">{{ $category->name }}</a></li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-12">
                            <div class="footer-listing">
                                <ul>
                                    <h4>Quick links</h4>
                                    <li><a href="{{ url("/") }}">Home</a></li>
                                    <li><a href="{{ url("/#about-us") }}">About</a></li>
                                    <li><a href="{{ url("/#testimonials") }}">Testimonials</a></li>
                                    @auth
                                        <li><a href="{{ url("/".(auth()->user()->hasRole('innovator') ? "innovator" : "company")."/ideas") }}">Ideas</a></li>
                                    @endauth
                                    <li><a href="{{ url("/pages/contact") }}">Contact Us</a></li>
                                    <li><a href="{{ url("/pages/terms-and-condition") }}">Terms & Conditions</a></li>
                                    <li><a href="{{ url("/pages/privacy-policy") }}">Privacy Policy</a></li>
                                    {{-- @foreach(config('menu.guest') as $menu)
                                        @if(Request::path() == '/')
                                            <li><a href="{{ $menu['name'] == 'testimonials' ? '#testimonials' : '#'}}">{{ trans('lang.'.$menu['name'])}}</a></li>
                                        @else
                                            <li><a href="{{ $menu['name'] == 'testimonials' ? '/#testimonials' : '#'}}">{{ trans('lang.'.$menu['name'])}}</a></li>
                                        @endif
                                    @endforeach --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-md-2 col-sm-4 col-12">
                            <div class="footer-listing">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Trust & Safety</a></li>
                                    <li><a href="#">Idea Submission </a></li>
                                    <li><a href="#">Investing on Idea </a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="footer-listing">
                                <h4>Get Social with us</h4>
                                <div class="social-icons">
                                    <ul>

                                        <li><a href="https://www.facebook.com/ILaunched" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/iLaunched" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/ilaunched" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="footer-listing">
                                <h4>Subscribe</h4>
                                <p>Subscribe to our weekly newsletter
                                    for news and updates</p>
                                <div class="search-main mt-2">
                                    <input type="text" placeholder="Your Email" id="news_letter">
                                    <div class="spinner-border loader deactive" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    <button class="subs-btn" >
                                        {{ trans('lang.subscribe') }}</button>
                                </div>
                                <div id="error-email" class="errors"></div>
                                <div class="message text-success mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="copyright-sec">
                            <a href="#"><img src="/images/copyright.png" alt="" class="img-fluid"><i
                                    class="fa fa-registered" aria-hidden="true"></i>I-Launched. {{ date('Y') }} |
                                Designed by Clickysoft</a>
                        </div>
                    </div>
                </div>
            </div>

