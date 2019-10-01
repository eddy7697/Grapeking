@extends('main')

@section('custom-script')
<script>
var s = $("html"),
    e = $("body"),
    n = ($(".fit"), $(".imgfull"), $(".slick-slide")),
    i = $(".slider-nav"),
    a = $(".slider-for"),
    t = $(".date input"),
    r = !1;

    i.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        focusOnSelect: !0,
        infinite: !0,
        responsive: [{
            breakpoint: 1530,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }]
    }), i.on("afterChange", function (o, s, e, n) {
        var i = parseInt($(".slick-slide:first-child").attr("data-slick-index")),
            a = parseInt($(".slick-slide:last-child").attr("data-slick-index")),
            t = parseInt($(s.$slides.get(e)).attr("data-slick-index"));
        t == i ? $(this).addClass("firstIndex") : $(this).removeClass("firstIndex"), t == a ? $(this).addClass("lastIndex") : $(this).removeClass("lastIndex")
    }), a.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: !0,
        asNavFor: ".slider-nav",
        infinite: !0,
        arrows: !1
    }), $('a[data-toggle="tab"]').on("shown.bs.tab", function () {
        $(".slider").slick("setPosition")
    })
$(".slider-nav").on('init', function () {
    $(this).show() 
});
</script>
@endsection

@section('custom-style')
<style>
    .sub-page-banner {
        background-image: url('/img/about/course_banner.jpg');
    }
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(14)!!}
</style>
@else
<style>
    {!!PageView::css(13)!!}
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
            <h3 class="about-section-title" id="about_5">{{ trans('string.about11') }}</h3>
            <div class="about-text">
                {!! trans('string.about12') !!}
            </div>
            <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt="">
            <h3 class="about-section-title" id="about_1">{{ trans('string.about_1') }}</h3>
            <div class="content" id="timeline-content">
                <div class="years">
                    <div class="slider">
                        <div class="dots slider-nav firstIndex">
                            <div class="dot">
                                <p class="year">1994</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">1997</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2003</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2008</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2014</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2016</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2017</p>
                                <span class="circle"></span>
                            </div>
                            <div class="dot">
                                <p class="year">2019</p>
                                <span class="circle"></span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-for lists">
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">1994</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_1') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">1997</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_2') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2003</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_3') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2008</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_4') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2014</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_5') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2016</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_6') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2017</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_7') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 left">
                                    <h4 class="year">2019</h4>
                                    <ul>
                                        <li>{{ trans('string.timeline_8') }}</li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-lg-5 right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if (App::getLocale() == 'en')
            {!!PageView::show(14)!!}
            @else
            {!!PageView::show(13)!!}
            @endif --}}
            {{-- <h3 class="about-section-title" id="about_1">{{ trans('string.about13') }}</h3>
            <div class="about-text">
                {!! trans('string.about14') !!}
            </div> --}}
            {{-- <img class="about-image" src="/img/about/course_pic.jpg" alt=""> --}}
            {{-- <div class="about-text">
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