<div class="dropdown new-drop-down show">
							<a href="javascript:" title="اردو" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ config('site_config.lang-code.'.app()->getLocale()) }}<i class="icon-angle-down"></i></a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<ul class="color-change">
                                    @foreach(config('site_config.lang') as $lang)
                                        @if($lang != app()->getLocale() )
                                        <li class="dropdown-item">
                                            <a href="{{ route('locale',$lang) }}" title="{{ config('site_config.lang-code.'. $lang) }}">{{ config('site_config.lang-code.'. $lang) }}<span class="arbi-font"></span></a>
                                        </li>
                                        @endif
                                    @endforeach
								
								</ul>
							</div>
</div>