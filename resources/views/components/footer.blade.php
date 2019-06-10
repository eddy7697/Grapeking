@php
    $language = '';

    foreach (Config::get('languages') as $key => $value) {
        if ($key == App::getLocale()) {
            $language = $value;
        }
    }
@endphp

<section class="site-footer">
    <div class="container-fluid site-footer-content">
        {{-- footer-section --}}
        <div class="col-md-11 mx-auto footer-section">

            {{-- footer-info --}}
            <div class="row footer-info">
                <div class="col-md-5 site-info">
                    <div class="row">
                        <div class="col-md-11 offset-md-1">
                            <div class="footer-logo">
                                <img src="/img/site-logo/logo_footer.png" alt="">
                            </div>
                            <ul class="contact-info">
                                <li>地址：中国 上海市松江区车新公路518号</li>
                                <li>电话：+86-21-5760-9598</li>
                                <li>传真：+86-21-5760-9698</li>
                                <li>网址：www.grapeking.com.cn</li>
                                <li>电邮：gki@grapeking.com.cn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-2 mx-auto icp">
                    <div class="icp-card">
                        <img class="icp-icon" src="/img/site-logo/icp.png" alt="" style="margin-bottom: 10px;"><br>
                        <span>沪ICP备13010123号-1</span>
                        <a href="http://www.miit.gov.cn/" target="_blank"></a>
                    </div>
                </div> --}}
                <div class="col-md-5 offset-md-2">
                    <div class="row">
                        <div class="col-md-5 offset-md-1 site-map">                            
                            <ul>
                                <h5>{{ trans('string.about') }}</h5>
                                <li>
                                    <a href="/about">{{ trans('string.about_us') }}</a>
                                </li>
                                <li>
                                    <a href="/about/course">{{ trans('string.about_1') }}</a>
                                </li>
                                <li>
                                    <a href="/about/founder">{{ trans('string.about_2') }}</a>
                                </li>
                                <li>
                                    <a href="/about/certification">{{ trans('string.about_3') }}</a>
                                </li>
                                <li>
                                    <a href="/about/location">{{ trans('string.about_4') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 site-map">                            
                            <ul>
                                <h5>{{ trans('string.research') }}</h5>
                                <li>
                                    <a href="">食安中心</a>
                                </li>
                                <li>
                                    <a href="">生物工程中心</a>
                                </li>
                                <li>
                                    <a href="">创新研发中心</a>
                                </li>
                                <li>
                                    <a href="">专利及文献发表</a>
                                </li>
                                <li>
                                    <a href="">世界级工厂</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- footer-info --}}
        </div> 
        {{-- footer-section --}}

    </div>
</section>
<section class="site-copyright">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-5 info" style="">
                        Copyright &copy; Shanghai Grape King Enterprises Corp.
                    </div>
                    <div class="col-md-2 icp">
                        <img class="icp-icon" src="/img/gongan.png" alt="" style="display: inline-block">
                        <span style="display: inline-block">沪ICP备13010123号-1</span>
                        <a href="http://www.miit.gov.cn/" target="_blank"></a>
                    </div>
                    <div class="col-md-5 info" style="text-align: right">
                        <a href="">隐私权政策</a>&nbsp;|&nbsp;<a href="">使用条款</a>
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</section>