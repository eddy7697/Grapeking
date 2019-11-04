@extends('main')

@php
    $timeline = SiteMetaView::timeline();
@endphp

@section('custom-script')
<script src="/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
<script>
// new PerfectScrollbar('.thumb-container');

// updatePosition();
updateLayout();

// $(window).scroll(function () {
//     updatePosition();
// });

$(window).resize(function () {
    // updatePosition();
    updateLayout();
});

// function updatePosition() {
//     var windowScrollTop = $(window).scrollTop();
//     var headerHeight = $('#site-header-bar').height() + $('.sub-page-banner').height();
//     var menuHeight = $('.site-header').height();
//     var elmHeight = $(window).scrollTop() < $('.vdieo-present-section').offset().top - $(window).height() ? $(window).height() - $('.site-header').height() : $('.vdieo-present-section').offset().top - $(window).scrollTop() - $('.site-header').height()

//     if (windowScrollTop > headerHeight - 140) {
//         $('.thumb-container').css({
//             'position': 'fixed',
//             'top': (menuHeight - 32) + 'px',
//             'left': $('.about-thumbnail').offset().left + 32,
//             'height': elmHeight
//         });
//     } else {
//         $('.thumb-container').css({
//             'position': 'initial',
//             'top': 'initial',
//             'left': 'initial',
//             'height': 'initial'
//         });
//     }
// }

function updateLayout() {
    var windowWidth = $(window).width();

    if (windowWidth > 768) {
        $('#course-container').attr('class', 'container');
    } else if (windowWidth <= 768) {
        $('#course-container').attr('class', 'container max-xs-size');
    }
}
</script>
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
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 1530,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3
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
        // adaptiveHeight: true,
        infinite: !0,
        arrows: !1
    }), $('a[data-toggle="tab"]').on("shown.bs.tab", function () {
        $(".slider").slick("setPosition")
    })
$(".slider-nav").on('init', function () {
    $(this).show() 
});
$(".slider-for").on('beforeChange', function (event, slick, direction) {

    $('.timeline-text-container').removeClass('animated fadeInLeft').hide();
    $('.timeline-text-container').addClass('animated fadeInLeft').show();
    
    $('.feature-image-container .feature-image').removeClass('animated fadeInRight').hide();
    $('.feature-image-container .feature-image').addClass('animated fadeInRight').show();
    // setTimeout(function () {
    //     $('.timeline-text-container').addClass('animated fadeInLeft').show();
    // }, 1);
});
</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
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
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        愿景与历程
                    <br>
                    <span style="font-size: 16px;">Vision and History</span>
                </h2>
            </div>
        </div>
    </div>
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
<div class="container" id="course-container">
    <div class="row">
        <div class="col-md-12 about-content wp history">
            <h3 class="about-section-title" id="about_5">{{ trans('string.about11') }}</h3>
            <div class="about-text">
                {!! trans('string.about12') !!}
            </div>
            <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt="">
            <h3 class="about-section-title" id="about_1">{{ trans('string.about_1') }}</h3>
            <div class="content" id="timeline-content" style="margin-bottom: 50px;">
                <div class="years">
                    <div class="slider">
                        <div class="dots slider-nav firstIndex">
                            @foreach ($timeline as $item)
                                <div class="dot">
                                    <p class="year">{{$item->year}}</p>
                                    <span class="circle"></span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="slider-for lists">
                        @foreach ($timeline as $item)
                            <div class="list">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-7 left timeline-text-container">
                                        <h4 class="year">{{$item->year}}</h4>
                                        <ul>
                                            <li>{!! $item->content->{App::getLocale()} !!}</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-lg-5 right feature-image-container">
                                        @if (isset($item->featureImage))
                                            <img src="{!! $item->featureImage->{App::getLocale()} !!}" class="feature-image" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@if (false)
<a data-fancybox class="fancybox-btn" href="https://www.youtube.com/watch?v=KAFJLVrKwJQ">
    <div class="vdieo-present-section">
        <div class="info">
            <h2>VIDEO</h2>
            <h4>{{ trans('string.index_d_15') }}</h4>
            <img class="play-btn" src="/img/site-logo/play-icon.png" alt="">
        </div>
    </div>
</a>
@endif

@endsection