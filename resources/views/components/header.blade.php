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
                            <li><a href="">{{ trans('string.pro_partner') }}</a></li>
                            <li><a href="">{{ trans('string.company_tw_short') }}</a></li>
                            <li><a href="">{{ trans('string.grapekingmuseum') }}</a></li>
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
                                            <a class="dropdown-item" style="color: #004471; font-weight: bolder; margin-top: 5px; text-decoration: none; padding: 5px 10px;" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
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
<section class="mobile-site-header">
    <div id="menu-btn" class="menu-btn"></div>
    <img class="header-logo" src="/img/site-logo/logo_footer.png" alt="">
    <img src="/img/icon/burger-open.svg" style="display: none">
    <img src="/img/icon/burger-close.svg" style="display: none">
</section>
<section class="mobile-site-menu hide">
    <ul class="menu-item">
        <li><a href="">{{ trans('string.about') }}</a></li>
        <li><a href="">{{ trans('string.sales') }}</a></li>
        <li><a href="">{{ trans('string.research') }}</a></li>
        <li><a href="">{{ trans('string.responsibility') }}</a></li>
        <li><a href="/about/careers">{{ trans('string.recruiting') }}</a></li>
    </ul>
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

        {{-- product --}}
        <div class="row mega-nav-item" id="product">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.product_center') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                        <p>Product center</p>    
                    @endunless
                    
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/product" class="site-mega-menu-link">
                            <img src="/img/menu/about.jpg" alt="{{ trans('string.product_center') }}">
                            <p class="header-job-txt">{{ trans('string.product_center') }}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/label" class="site-mega-menu-link">
                            <img src="/img/menu/res.jpg" alt="{{ trans('string.label_center') }}">
                            <p class="header-job-txt">{{ trans('string.label_center') }}</p>
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
                            <img src="/img/research/menu-1.jpg" alt="生物工程中心">
                            <p class="header-job-txt">生物工程中心</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/innovation" class="site-mega-menu-link">
                            <img src="/img/research/menu-2.jpg" alt="創新研發中心">
                            <p class="header-job-txt">創新研發中心</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/factory" class="site-mega-menu-link">
                            <img src="/img/research/menu-3.jpg" alt="世界級工廠">
                            <p class="header-job-txt">世界級工廠</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/research/paper" class="site-mega-menu-link">
                            <img src="/img/research/menu-4.jpg" alt="專利及文獻發表">
                            <p class="header-job-txt">專利及文獻發表</p>
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
                        <a href="/partners" class="site-mega-menu-link">
                            <img src="/img/menu/location.jpg" alt="{{trans('string.employee_relatioon')}}">
                            <p class="header-job-txt">{{trans('string.employee_relatioon')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/service" class="site-mega-menu-link">
                            <img src="/img/menu/service.jpg" alt="{{trans('string.food_safty')}}">
                            <p class="header-job-txt">{{trans('string.food_safty')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/qna" class="site-mega-menu-link">
                            <img src="/img/menu/qna.jpg" alt="{{trans('string.innovating')}}">
                            <p class="header-job-txt">{{trans('string.innovating')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/download" class="site-mega-menu-link">
                            <img src="/img/menu/download.jpg" alt="{{trans('string.download')}}">
                            <p class="header-job-txt">{{trans('string.download')}}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- 产业应用 --}}
        <div class="row mega-nav-item" id="industry">
            <div class="col-md-2 left-col">
                <div class="menu-header">
                    <h3>{{ trans('string.industrial_application') }}</h3>
                    <hr>
                    @unless (App::getLocale() == 'en')
                    <p>Industrial application</p>    
                    @endunless
                    
                    <a href="/industry" class="link-mask"></a>
                </div>
            </div>
            <div class="col-md-10 right-col">
                <ul class="site-mega-menu-container">
                    <li class="site-mega-menu-item">
                        <a href="/industry/water" class="site-mega-menu-link">
                            <img src="/img/about/album/about-1.jpg" alt="{{trans('string.indu1')}}">
                            <p class="header-job-txt">{{trans('string.indu1')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/electronics" class="site-mega-menu-link">
                            <img src="/img/about/album/about-2.jpg" alt="{{trans('string.indu2')}}">
                            <p class="header-job-txt">{{trans('string.indu2')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/life" class="site-mega-menu-link">
                            <img src="/img/about/album/about-3.jpg" alt="{{trans('string.indu3')}}">
                            <p class="header-job-txt">{{trans('string.indu3')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/industrial" class="site-mega-menu-link">
                            <img src="/img/about/album/about-4.jpg" alt="{{trans('string.indu4')}}">
                            <p class="header-job-txt">{{trans('string.indu4')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/fishery" class="site-mega-menu-link">
                            <img src="/img/about/album/about-5.jpg" alt="{{trans('string.indu5')}}">
                            <p class="header-job-txt">{{trans('string.indu5')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/food" class="site-mega-menu-link">
                            <img src="/img/about/album/about-6.jpg" alt="{{trans('string.indu6')}}">
                            <p class="header-job-txt">{{trans('string.indu6')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/cosmeceutical" class="site-mega-menu-link">
                            <img src="/img/about/album/about-7.jpg" alt="{{trans('string.indu7')}}">
                            <p class="header-job-txt">{{trans('string.indu7')}}</p>
                        </a>
                    </li>
                    <li class="site-mega-menu-item">
                        <a href="/industry/industrialEngineering" class="site-mega-menu-link">
                            <img src="/img/about/album/about-8.jpg" alt="{{trans('string.indu8')}}">
                            <p class="header-job-txt">{{trans('string.indu8')}}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>