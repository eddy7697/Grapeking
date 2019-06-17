@php
    $language = '';

    foreach (Config::get('languages') as $key => $value) {
        if ($key == App::getLocale()) {
            $language = $value;
        }
    }
@endphp

<section class="site-header">
    <div class="container-fluid" style="background-color: rgba(255, 255, 255, 1);">
        <div class="row top-bar">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <div class="col-md-6 short-cut">
                        <ul>
                            <li><a href="https://www.pro-partner.com.tw/" target="_blank">{{ trans('string.pro_partner') }}</a></li>
                            <li><a href="https://www.grapeking.com.tw/tw/home" target="_blank">{{ trans('string.company_tw_short') }}</a></li>
                            <li><a href="https://www.grapekingmuseum.com.tw/" target="_blank">{{ trans('string.grapekingmuseum') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 site-func">
                        <div class="site-func-container">
                            <div class="search-bar">
                                <form action="" id="search-form">
                                    <img class="search-icon" src="/img/icon/search.svg" alt="search">
                                    <div class="search-input-group hide">
                                        <input type="text" class="search-input" placeholder="请输入关键字..." name="keyword">
                                        <img class="close-icon" src="/img/icon/close.svg" alt="close">
                                    </div>
                                </form>
                            </div>
                            <div class="mail-btn">
                                <a href="mailto:test@test.com"><img src="/img/icon/email.svg" style="width: 22px; transform: translateY(-1px);" alt=""></a>
                            </div>
                            <div class="dropdown locale-drop-select">
                                <a href="#" data-toggle="dropdown">
                                    <img src="/img/icon/earth.svg" style="width: 20px; transform: translateY(-2px);" alt="">&nbsp;&nbsp;
                                    <span >语系切换({{$language}})&nbsp;&nbsp;
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                </a>    
                                <div class="dropdown-menu">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" style="color: #aaa; font-weight: light; margin-top: 5px; text-decoration: none; padding: 5px 10px;" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                        @else
                                            <a class="dropdown-item" style="color: #E70034; font-weight: bolder; margin-top: 5px; text-decoration: none; padding: 5px 10px;" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.85);">
        <div class="row site-header-container">
            <div class="col-md-12 mx-auto">
                <div class="site-logo">
                    <a href="/"><img src="/img/site-logo/logo_header.png" alt=""></a>
                </div>                
                <ul class="site-menu">
                    <li><a class="dropdown mega-btn" data-menu-target="about">{{ trans('string.about') }}</a></li>
                    <li><a class="dropdown mega-btn" data-menu-target="product">{{ trans('string.sales') }}</a></li>
                    <li><a class="dropdown mega-btn" data-menu-target="research">{{ trans('string.research') }}</a></li>
                    <li><a class="dropdown mega-btn" data-menu-target="support">{{ trans('string.responsibility') }}</a></li>
                    <li><a href="/about/careers">{{ trans('string.recruiting') }}</a></li>
                </ul>
            </div>
        </div>
    </div>    
</section>

{{-- Mega menu --}}
<div class="site-mega-menu-overlay"></div>
<section class="site-mega-menu" id="site-mega-menu">
    <div class="container mega-nav">

        {{-- about --}}
        <div class="row mega-nav-item" id="about">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.about') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                        <p>About Grape King</p>    
                    @endunless
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/about" class="site-mega-menu-link">
                            <img src="/img/menu/about.jpg" alt="{{ trans('string.about_us') }}">
                            <p class="header-job-txt">{{ trans('string.about_us') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/about/course" class="site-mega-menu-link">
                            <img src="/img/menu/res.jpg" alt="{{ trans('string.about_1') }}">
                            <p class="header-job-txt">{{ trans('string.about_1') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/about/founder" class="site-mega-menu-link">
                            <img src="/img/menu/hr.jpg" alt="{{ trans('string.about_2') }}">
                            <p class="header-job-txt">{{ trans('string.about_2') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/about/certification" class="site-mega-menu-link">
                            <img src="/img/menu/download.jpg" alt="{{ trans('string.about_3') }}">
                            <p class="header-job-txt">{{ trans('string.about_3') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/about/location" class="site-mega-menu-link">
                            <img src="/img/menu/location.jpg" alt="{{ trans('string.about_4') }}">
                            <p class="header-job-txt">{{ trans('string.about_4') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- business --}}
        <div class="row mega-nav-item" id="product">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.business') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                        <p>Business</p>    
                    @endunless
                    
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/business/production" class="site-mega-menu-link">
                            <img src="/img/menu/production.jpg" alt="{{ trans('string.production') }}">
                            <p class="header-job-txt">{{ trans('string.production') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/business/lump_sum" class="site-mega-menu-link">
                            <img src="/img/menu/lump_sum.jpg" alt="{{ trans('string.lump_sum') }}">
                            <p class="header-job-txt">{{ trans('string.lump_sum') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/business/catalog" class="site-mega-menu-link">
                            <img src="/img/menu/catalog.jpg" alt="{{ trans('string.catalog') }}">
                            <p class="header-job-txt">{{ trans('string.catalog') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- 專業研發 --}}
        <div class="row mega-nav-item" id="research">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.research') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                        <p>Research</p>    
                    @endunless
                    
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/research/bioengineering" class="site-mega-menu-link">
                            <img src="/img/research/menu-1.jpg" alt="{{trans('string.bioengineering_center')}}">
                            <p class="header-job-txt">{{trans('string.bioengineering_center')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/innovation" class="site-mega-menu-link">
                            <img src="/img/research/menu-2.jpg" alt="{{trans('string.innovation_rnd_center')}}">
                            <p class="header-job-txt">{{trans('string.innovation_rnd_center')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/factory" class="site-mega-menu-link">
                            <img src="/img/research/menu-4.jpg" alt="{{trans('string.world_class_factory')}}">
                            <p class="header-job-txt">{{trans('string.world_class_factory')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/paper" class="site-mega-menu-link">
                            <img src="/img/research/menu-3.jpg" alt="{{trans('string.patent_and_literature')}}">
                            <p class="header-job-txt">{{trans('string.patent_and_literature')}}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        {{-- 服务支持 --}}
        <div class="row mega-nav-item" id="support">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.responsibility') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                    <p>CSR</p>    
                    @endunless
                    
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/csr/relation" class="site-mega-menu-link">
                            <img src="/img/menu/relations.jpg" alt="{{trans('string.relations')}}">
                            <p class="header-job-txt">{{trans('string.relations')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/csr/foodSafty" class="site-mega-menu-link">
                            <img src="/img/menu/food-safty.jpg" alt="{{trans('string.foodSafty')}}">
                            <p class="header-job-txt">{{trans('string.foodSafty')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/csr/creation" class="site-mega-menu-link">
                            <img src="/img/menu/creation.jpg" alt="{{trans('string.creation')}}">
                            <p class="header-job-txt">{{trans('string.creation')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/csr/green" class="site-mega-menu-link">
                            <img src="/img/menu/green.jpg" alt="{{trans('string.green')}}">
                            <p class="header-job-txt">{{trans('string.green')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/csr/download" class="site-mega-menu-link">
                            <img src="/img/menu/download.jpg" alt="{{trans('string.download_paper')}}">
                            <p class="header-job-txt">{{trans('string.download_paper')}}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

{{-- Mobile side menu --}}
<section class="mobile-site-header">
    <div id="menu-btn" class="menu-btn"></div>
    <img class="header-logo" src="/img/site-logo/logo_footer.png" alt="">
    <img src="/img/icon/burger-open.svg" style="display: none">
    <img src="/img/icon/burger-close.svg" style="display: none">
</section>
<section class="mobile-site-menu hide">
    <ul class="menu-item">
        <li><a class="menu-item-dropdown">{{ trans('string.about') }}</a>
            <ul>
                <li><a href="/about">{{ trans('string.about_us') }}</a></li>
                <li><a href="/about/course">{{ trans('string.about_1') }}</a></li>
                <li><a href="/about/founder">{{ trans('string.about_2') }}</a></li>
                <li><a href="/about/certification">{{ trans('string.about_3') }}</a></li>
                <li><a href="/about/location">{{ trans('string.about_4') }}</a></li>
            </ul>
        </li>
        <li><a class="menu-item-dropdown">{{ trans('string.sales') }}</a>
            <ul>
                <li><a href="/business/production">{{ trans('string.production') }}</a></li>
                <li><a href="/business/lump_sum">{{ trans('string.lump_sum') }}</a></li>
                <li><a href="/business/catalog">{{ trans('string.catalog') }}</a></li>
            </ul>
        </li>
        <li><a class="menu-item-dropdown">{{ trans('string.research') }}</a>
            <ul>
                <li><a href="/research/bioengineering">{{trans('string.bioengineering_center')}}</a></li>
                <li><a href="/research/innovation">{{trans('string.innovation_rnd_center')}}</a></li>
                <li><a href="/research/factory">{{trans('string.world_class_factory')}}</a></li>
                <li><a href="/research/paper">{{trans('string.patent_and_literature')}}</a></li>
            </ul>
        </li>
        <li><a class="menu-item-dropdown">{{ trans('string.responsibility') }}</a>
            <ul>
                <li><a href="/csr/relation">{{trans('string.relations')}}</a></li>
                <li><a href="/csr/foodSafty">{{trans('string.foodSafty')}}</a></li>
                <li><a href="/csr/creation">{{trans('string.creation')}}</a></li>
                <li><a href="/csr/green">{{trans('string.green')}}</a></li>
                <li><a href="/csr/download">{{trans('string.download_paper')}}</a></li>
            </ul>
        </li>
        <li><a href="/about/careers">{{ trans('string.recruiting') }}</a></li>
    </ul>
</section>