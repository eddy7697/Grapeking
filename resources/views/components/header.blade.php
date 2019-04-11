@php
    $language = '';

    foreach (Config::get('languages') as $key => $value) {
        if ($key == App::getLocale()) {
            $language = $value;
        }
    }
@endphp


<section class="site-header">
    <div class="container-fluid">
        <div class="row top-bar">
            <div class="col-md-6 short-cut">
                <ul>
                    <li><a href="">葡众企业</a></li>
                    <li><a href="">台湾葡萄王</a></li>
                    <li><a href="">健康活力能量馆</a></li>
                </ul>
            </div>
            <div class="col-md-6 site-func">
                <div class="site-func-container">
                    <div class="search-bar">
                        <form action="" id="search-form">
                            <i class="fa fa-search search-icon" aria-hidden="true"></i>
                            <input type="text" class="search-input" placeholder="请输入关键字..." name="keyword">
                            <i class="fa fa-times-circle-o close-icon" aria-hidden="true"></i>
                        </form>
                    </div>
                    <div class="mail-btn">
                        <a href="mailto:test@test.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="dropdown locale-drop-select">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;<span style="color: rgba(255, 255, 255, .8)">语系切换({{$language}})&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></span></a>    
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
    <div class="container-fluid">
        <div class="row site-header-container">
            <div class="col-md-11 mx-auto">
                <div class="site-logo">
                    <a href="/"><img src="/img/site-logo/logo_header.png" alt=""></a>
                </div>                
                <ul class="site-menu">
                    <li><a href="" class="dropdown">关于上海葡萄王</a></li>
                    <li><a href="" class="dropdown">业务体系</a></li>
                    <li><a href="" class="dropdown">专业研发</a></li>
                    <li><a href="" class="dropdown">社会责任</a></li>
                    <li><a href="" class="dropdown active">人才招聘</a></li>
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
        <li><a href="">关于上海葡萄王</a></li>
        <li><a href="">业务体系</a></li>
        <li><a href="">专业研发</a></li>
        <li><a href="">社会责任</a></li>
        <li><a href="" class="active">人才招聘</a></li>
    </ul>
</section>