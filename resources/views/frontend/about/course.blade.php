@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
    .sub-page-banner {
        background-image: url('/img/about/course_banner.jpg');
    }
</style>
@if (App::getLocale() == 'en')
<style>
    {
         ! !PageView: :css(14) ! !
    }
</style>
@else
<style>
    {
         ! !PageView: :css(13) ! !
    }
</style>
@endif
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-thumbnail-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="site-thumbnail-container">
                        <ul class="site-thumbnail">
                            <li>{{ trans('string.home') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.about') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.about13') }}</li>
                        </ul>
                        <h2>{{ trans('string.about13') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 about-content wp history">

            <div class="content" style="display:none">
                <div class="years">
                    <div class="slider">
                        <div class="dots slider-nav slick-initialized slick-slider"><button type="button"
                                data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
                                style="display: block;">Previous</button>

                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" role="listbox"
                                    style="opacity: 1; width: 4510px; left: -784px;">
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide022" style="width: 112px;" data-slick-index="-6"
                                        aria-hidden="true">
                                        <p class="year">2014</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide023" style="width: 112px;" data-slick-index="-5"
                                        aria-hidden="true">
                                        <p class="year">2015</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide024" style="width: 112px;" data-slick-index="-4"
                                        aria-hidden="true">
                                        <p class="year">2016</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide025" style="width: 112px;" data-slick-index="-3"
                                        aria-hidden="true">
                                        <p class="year">2017</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide026" style="width: 112px;" data-slick-index="-2"
                                        aria-hidden="true">
                                        <p class="year">2018</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide027" style="width: 112px;" data-slick-index="-1"
                                        aria-hidden="true">
                                        <p class="year">2019</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide00" style="width: 112px;" data-slick-index="0"
                                        aria-hidden="true">
                                        <p class="year">1969</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-current slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide01" style="width: 112px;" data-slick-index="1"
                                        aria-hidden="false">
                                        <p class="year">1971</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide02" style="width: 112px;" data-slick-index="2"
                                        aria-hidden="false">
                                        <p class="year">1979</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide03" style="width: 112px;" data-slick-index="3"
                                        aria-hidden="false">
                                        <p class="year">1982</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide04" style="width: 112px;" data-slick-index="4"
                                        aria-hidden="false">
                                        <p class="year">1987</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide05" style="width: 112px;" data-slick-index="5"
                                        aria-hidden="false">
                                        <p class="year">1991</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-active" tabindex="-1" role="option"
                                        aria-describedby="slick-slide06" style="width: 112px;" data-slick-index="6"
                                        aria-hidden="false">
                                        <p class="year">1993</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide07" style="width: 112px;" data-slick-index="7"
                                        aria-hidden="true">
                                        <p class="year">1994</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide08" style="width: 112px;" data-slick-index="8"
                                        aria-hidden="true">
                                        <p class="year">1997</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide09" style="width: 112px;" data-slick-index="9"
                                        aria-hidden="true">
                                        <p class="year">1998</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide010" style="width: 112px;" data-slick-index="10"
                                        aria-hidden="true">
                                        <p class="year">1999</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide011" style="width: 112px;" data-slick-index="11"
                                        aria-hidden="true">
                                        <p class="year">2000</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide012" style="width: 112px;" data-slick-index="12"
                                        aria-hidden="true">
                                        <p class="year">2002</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide013" style="width: 112px;" data-slick-index="13"
                                        aria-hidden="true">
                                        <p class="year">2004</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide014" style="width: 112px;" data-slick-index="14"
                                        aria-hidden="true">
                                        <p class="year">2005</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide015" style="width: 112px;" data-slick-index="15"
                                        aria-hidden="true">
                                        <p class="year">2007</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide016" style="width: 112px;" data-slick-index="16"
                                        aria-hidden="true">
                                        <p class="year">2008</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide017" style="width: 112px;" data-slick-index="17"
                                        aria-hidden="true">
                                        <p class="year">2009</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide018" style="width: 112px;" data-slick-index="18"
                                        aria-hidden="true">
                                        <p class="year">2010</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide019" style="width: 112px;" data-slick-index="19"
                                        aria-hidden="true">
                                        <p class="year">2011</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide020" style="width: 112px;" data-slick-index="20"
                                        aria-hidden="true">
                                        <p class="year">2012</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide021" style="width: 112px;" data-slick-index="21"
                                        aria-hidden="true">
                                        <p class="year">2013</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide022" style="width: 112px;" data-slick-index="22"
                                        aria-hidden="true">
                                        <p class="year">2014</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide023" style="width: 112px;" data-slick-index="23"
                                        aria-hidden="true">
                                        <p class="year">2015</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide024" style="width: 112px;" data-slick-index="24"
                                        aria-hidden="true">
                                        <p class="year">2016</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide025" style="width: 112px;" data-slick-index="25"
                                        aria-hidden="true">
                                        <p class="year">2017</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide026" style="width: 112px;" data-slick-index="26"
                                        aria-hidden="true">
                                        <p class="year">2018</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide" tabindex="-1" role="option"
                                        aria-describedby="slick-slide027" style="width: 112px;" data-slick-index="27"
                                        aria-hidden="true">
                                        <p class="year">2019</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide00" style="width: 112px;" data-slick-index="28"
                                        aria-hidden="true">
                                        <p class="year">1969</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide01" style="width: 112px;" data-slick-index="29"
                                        aria-hidden="true">
                                        <p class="year">1971</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide02" style="width: 112px;" data-slick-index="30"
                                        aria-hidden="true">
                                        <p class="year">1979</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide03" style="width: 112px;" data-slick-index="31"
                                        aria-hidden="true">
                                        <p class="year">1982</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide04" style="width: 112px;" data-slick-index="32"
                                        aria-hidden="true">
                                        <p class="year">1987</p>
                                        <span class="circle"></span>
                                    </div>
                                    <div class="dot slick-slide slick-cloned" tabindex="-1" role="option"
                                        aria-describedby="slick-slide05" style="width: 112px;" data-slick-index="33"
                                        aria-hidden="true">
                                        <p class="year">1991</p>
                                        <span class="circle"></span>
                                    </div>
                                </div>
                            </div><button type="button" data-role="none" class="slick-next slick-arrow"
                                aria-label="Next" role="button" style="display: block;">Next</button>
                        </div>
                    </div>
                    <div class="slider-for lists slick-initialized slick-slider">
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 30800px;" role="listbox">
                                <div class="list slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide10"
                                    style="width: 1100px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1969</h4>
                                            <ul>
                                                <li>創設「中國扶桑生晃製藥工業股份有限公司」生產【康貝特口服液】</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide slick-current slick-active" data-slick-index="1"
                                    aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide11"
                                    style="width: 1100px; position: relative; left: -1100px; top: 0px; z-index: 999; opacity: 1;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1971</h4>
                                            <ul>
                                                <li>成立「葡萄王食品股份有限公司」生產食品與藥品。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide12"
                                    style="width: 1100px; position: relative; left: -2200px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1979</h4>
                                            <ul>
                                                <li>「中國扶桑生晃製藥工業股份有限公司」、「葡萄王食品股份有限公司」合併改組為「葡萄王企業股份有限公司」技術合作</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide13"
                                    style="width: 1100px; position: relative; left: -3300px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1982</h4>
                                            <ul>
                                                <li>獲財政部證券管理委員會核准正式成股票公開上市公司</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide14"
                                    style="width: 1100px; position: relative; left: -4400px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1987</h4>
                                            <ul>
                                                <li>正式受行政院衛生署認定為「已實施GMP藥廠」</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide15"
                                    style="width: 1100px; position: relative; left: -5500px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1991</h4>
                                            <ul>
                                                <li>成立生物工程中心研發製造以菇菌類醱酵原料為主之生技產品</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide16"
                                    style="width: 1100px; position: relative; left: -6600px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1993</h4>
                                            <ul>
                                                <li>投資成立葡眾企業股份有限公司，邁入生物科技營養食品市場</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide17"
                                    style="width: 1100px; position: relative; left: -7700px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1994</h4>
                                            <ul>
                                                <li>奉經濟部投審會之核准，經第三國轉投資於大陸設立上海葡萄王企業有限公司，產銷各種保健食品、美容產品</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide18"
                                    style="width: 1100px; position: relative; left: -8800px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1997</h4>
                                            <ul>
                                                <li>上海葡萄王正式營運。</li>
                                                <li>以生物科技開發的靈芝產品–【靈芝王】正式上市。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide19"
                                    style="width: 1100px; position: relative; left: -9900px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1998</h4>
                                            <ul>
                                                <li>葡眾企業股份有限公司正式轉型，並向行政院公平交易委員會報備，以合法多層次行銷的方式推廣業務。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide110"
                                    style="width: 1100px; position: relative; left: -11000px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">1999</h4>
                                            <ul>
                                                <li>增資1億9千萬元，擴充生物工程中心，實收資本額13億元</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide111"
                                    style="width: 1100px; position: relative; left: -12100px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2000</h4>
                                            <ul>
                                                <li>【樟芝王】、【姬松茸王】上市</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="12" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide112"
                                    style="width: 1100px; position: relative; left: -13200px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2002</h4>
                                            <ul>
                                                <li>公司更名為葡萄王生技股份有限公司</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="13" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide113"
                                    style="width: 1100px; position: relative; left: -14300px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2004</h4>
                                            <ul>
                                                <li>葡萄王【靈芝王】- 健康食品字A00043號，免疫調節功能。</li>
                                                <li>樟芝獲得二項專利：中華民國發明第204557號、中國發明第198278號</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="14" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide114"
                                    style="width: 1100px; position: relative; left: -15400px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2005</h4>
                                            <ul>
                                                <li>通過cGMP認證</li>
                                                <li>樟芝獲得專利：中華民國發明第I 236480號</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="15" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide115"
                                    style="width: 1100px; position: relative; left: -16500px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2007</h4>
                                            <ul>
                                                <li>葡眾首次邁入全國傳銷排行前10名排行榜中</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="16" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide116"
                                    style="width: 1100px; position: relative; left: -17600px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2008</h4>
                                            <ul>
                                                <li>葡萄王【益菌王】- 健康食品字A00088號，胃腸功能改善。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="17" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide117"
                                    style="width: 1100px; position: relative; left: -18700px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2009</h4>
                                            <ul>
                                                <li>【衛傑膠囊】- 健康食品字A00164號，胃腸功能改善</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="18" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide118"
                                    style="width: 1100px; position: relative; left: -19800px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2010</h4>
                                            <ul>
                                                <li>【樟芝王菌絲體膠囊】- 健康食品字A00182號，護肝功能。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="19" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide119"
                                    style="width: 1100px; position: relative; left: -20900px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2011</h4>
                                            <ul>
                                                <li>【康貝兒Plus乳酸菌】- 健康食品字A00203號，胃腸功能改善。</li>
                                                <li>【健常活益菌】- 健康食品字A00205號，胃腸功能改善。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="20" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide120"
                                    style="width: 1100px; position: relative; left: -22000px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2012</h4>
                                            <ul>
                                                <li>【醣の安欣膠囊】- 健康食品字A00234號，調節血糖功能。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="21" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide121"
                                    style="width: 1100px; position: relative; left: -23100px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2013</h4>
                                            <ul>
                                                <li>【樟芝王菌絲體膠囊】- 再獲得健康食品認證，調節血壓功能。</li>
                                                <li>葡眾【康貝兒Plus乳酸菌】再獲得健康食品認證，輔助調整過敏體質功效</li>
                                                <li>葡眾於台北內湖購置新總部大樓。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="22" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide122"
                                    style="width: 1100px; position: relative; left: -24200px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2014</h4>
                                            <ul>
                                                <li>獲PIC/S GMP認證 (藥物優良製造準則之西藥藥品優良製造規範)</li>
                                                <li>獲ISO22000認證 (食品安全衛生管理系統認證)</li>
                                                <li>5月平鎮新廠動土典禮</li>
                                                <li>7月與中國大陸製藥大廠【雲南白藥集團】簽訂合作意向書</li>
                                                <li>8月獲准於竹科設立龍潭園區分公司</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="23" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide123"
                                    style="width: 1100px; position: relative; left: -25300px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2015</h4>
                                            <ul>
                                                <li>推出多項新品如【田七靈芝王精華飲】、【PowerBOMB 能量飲料】、【靈芝好寶貝】、【優適-專利金盞花萃取物葉黃素複方膠囊】等
                                                </li>
                                                <li>獲TAF頒發ISO17025認證</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="24" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide124"
                                    style="width: 1100px; position: relative; left: -26400px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2016</h4>
                                            <ul>
                                                <li>推出新產品【晶透雪亮飲】、【田七瑪卡王】</li>
                                                <li>9月份平鎮新廠啟用</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="25" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide125"
                                    style="width: 1100px; position: relative; left: -27500px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2017</h4>
                                            <ul>
                                                <li>葡萄王健康活力能量館7月正式開幕</li>
                                                <li>獲TOSHMS認證(台灣職業安全衛生管理系統)</li>
                                                <li>獲ISO 14001認證(環境管理系統)</li>
                                                <li>獲OHSAS 18001認證(職業安全衛生管理系統)</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="26" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide126"
                                    style="width: 1100px; position: relative; left: -28600px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2018</h4>
                                            <ul>
                                                <li>台北營運總部啟用。</li>
                                                <li>獲TQF、馬來西亞GMP擴充方案及二級品管認證。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                                <div class="list slick-slide" data-slick-index="27" aria-hidden="true" tabindex="-1"
                                    role="option" aria-describedby="slick-slide127"
                                    style="width: 1100px; position: relative; left: -29700px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-7 left">
                                            <h4 class="year">2019</h4>
                                            <ul>
                                                <li>獲FSSC 22000認證。</li>
                                                <li>龍潭生物科技研究所於Q2啟用。</li>
                                            </ul>

                                        </div>
                                        <div class="col-xs-12 col-lg-5 right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @if (App::getLocale() == 'en')
                {!!PageView::show(14)!!}
                @else
                {!!PageView::show(13)!!}
                @endif
            {{-- <h3 class="about-section-title" id="about_1">{{ trans('string.about13') }}</h3>
            <div class="about-text">
                {!! trans('string.about14') !!}
            </div>
            <img class="about-image" src="/img/about/course_pic.jpg" alt="">
            <div class="about-text">
                {!! trans('string.about15') !!}
            </div> --}}
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.aboutThumbnail')
        </div>
    </div>
</div>
<a data-fancybox class="fancybox-btn" href="https://www.youtube.com/watch?v=KAFJLVrKwJQ">
    <div class="vdieo-present-section">
        <div class="info">
            <h2>VIDEO</h2>
            <h4>{{ trans('string.index_d_15') }}</h4>
            <img class="play-btn" src="/img/site-logo/play-icon.png" alt="">
        </div>
    </div>
</a>
@endsection