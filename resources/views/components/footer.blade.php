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
        <div class="row" style="max-width: 1420px; margin: 0 auto">
            <div class="col-md-12 mx-auto footer-section">

                {{-- footer-info --}}
                <div class="row footer-info">
                    <div class="col-md-5 site-info">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="footer-logo">
                                    <img src="/img/site-logo/logo_footer.png" alt="">
                                </div>
                                <ul class="contact-info">
                                    {{-- {!! trans('string.contact_2') !!} --}}
                                    <li>{{ trans('string.contact_inf_1') }}</li>
                                    <li>{{ trans('string.contact_inf_6') }}</li>
                                    <li>{{ trans('string.contact_inf_2') }}</li>
                                    <li>{!! trans('string.contact_inf_3') !!}</li>
                                    <li>{{ trans('string.contact_inf_4') }}</li>
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
                                    @if (App::getLocale() == 'en')
                                        <h5>About Us</h5>
                                    @else
                                        <h5>{{ trans('string.about') }}</h5>    
                                    @endif
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
                            <div class="col-md-5 site-map" style="padding-right: 0">                            
                                <ul>
                                    <h5>{{ trans('string.research') }}</h5>
                                    <li>
                                        <a href="/research/foodsafty">{{ trans('string.food_safty_center') }}</a>
                                    </li>
                                    <li>
                                        <a href="/research/bioengineering">{{ trans('string.bioengineering_center') }}</a>
                                    </li>
                                    <li>
                                        <a href="/research/innovation">{{ trans('string.innovation_rnd_center') }}</a>
                                    </li>
                                    <li>
                                        <a href="/research/paper">{{ trans('string.patent_and_literature') }}</a>
                                    </li>
                                    <li>
                                        <a href="/research/factory">{{ trans('string.world_class_factory') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    
                {{-- footer-info --}}
            </div> 
        </div>
        
        {{-- footer-section --}}

    </div>
</section>
<section class="site-copyright">
    <div class="container-fluid">
        <div class="row" style="max-width: 1420px; margin: 0 auto">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <div class="col-md-5 info" style="">
                        Copyright &copy; Shanghai Grape King Enterprises Corp.
                    </div>
                    <div class="col-md-2 icp">
                        <img class="icp-icon" src="/img/gongan.png" alt="" style="display: inline-block">
                        <span style="display: inline-block"><a style="color: #666" href="https://www.beian.org/website/grapeking.com.cn" target="_blank">沪ICP备13010123号-1</a></span>
                        {{-- <a href="https://www.beian.org/website/grapeking.com.cn" target="_blank"></a> --}}
                    </div>
                    <div class="col-md-5 info" style="text-align: right">
                        <a href="/about/privacy ">隐私权政策</a>&nbsp;|&nbsp;<a href="/about/notice">使用条款</a>
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</section>