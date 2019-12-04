@extends('main')

@section('custom-script')
@if (config('app.sideBar'))
<script src="/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
<script>
new PerfectScrollbar('.thumb-container');

$(window).scroll(function () {
    var windowScrollTop = $(window).scrollTop();
    var headerHeight = $('#site-header-bar').height() + $('.sub-page-banner').height();
    var menuHeight = $('.site-header').height();
    var elmHeight = $(window).scrollTop() < $('.site-footer').offset().top - $(window).height() ? $(window).height() - $('.site-header').height() : $('.site-footer').offset().top - $(window).scrollTop() - $('.site-header').height()

    if (windowScrollTop > headerHeight - 140) {
        $('.thumb-container').css({
            'position': 'fixed',
            'top': (menuHeight - 32) + 'px',
            'left': $('.about-thumbnail').offset().left + 32,
            'height': elmHeight
        });
    } else {
        $('.thumb-container').css({
            'position': 'initial',
            'top': 'initial',
            'left': 'initial',
            'height': 'initial'
        });
    }
});
</script>                
@endif

@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('/img/about/founder/banner.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(16)!!}
</style>
@else
<style>
    {!!PageView::css(15)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                            关于创办人
                        <br>
                        <span style="font-size: 16px;">Founder</span>
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
                                <li>{{ trans('string.about16') }}</li>
                            </ul>
                            <h2>{{ trans('string.about16') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-{{config('app.sideBar') ? 9 : 12}} about-content">
                @if (App::getLocale() == 'en')
                {!!PageView::show(16)!!}
                @else
                {!!PageView::show(15)!!}
                @endif
                {{-- <div class="about-text signature" id="about_1">
                    <h3 style="margin: 150px 0 50px; font-weight: 700">{{ trans('string.about17') }}</h3>
                    <img class="about-image pull-right" src="/img/about/founder/signature.jpg" alt="">
                </div>
                <div style="clear: both"></div>
                <h3 class="about-section-title" id="about_3" style="margin-top: 0">{{ trans('string.about18') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-3">
                            <div data-fancybox="gallery" href="/img/about/founder/person.jpg" class="link-image">
                                <img src="/img/about/founder/person.jpg" alt="">
                                <div class="mask">
                                    <div class="info">
                                        {{ trans('string.founder_d_1') }}
                                        <br>
                                        (1935.04.14 - 2014.12.01)
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-9">
                            {!! trans('string.about19') !!}
                        </div>
                    </div>
                    
                </div>
                <h3 class="about-section-title" id="about_2">{{ trans('string.about20') }}</h3>
                <div class="about-text">
                    {!! trans('string.about21') !!}
                </div>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6 mobile-to-left">
                            <img class="about-image" style="height: 400px; display: inline" src="/img/about/founder/bottle.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <img class="about-image" style="height: 350px; display: inline" src="/img/about/founder/paper.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    {!! trans('string.about22') !!}
                </div>
                <div class="about-text" style="margin-top: 50px;" >
                    <div class="row">
                        <div class="col-md-7 founder-info">
                            <div data-fancybox="gallery" href="/img/about/founder/pic.jpg" class="link-image"  style="background-image: url('/img/about/founder/pic.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        {{ trans('string.founder_d_2') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 founder-info">
                            <div data-fancybox="gallery" href="/img/about/founder/pic2.jpg" class="link-image" style="background-image: url('/img/about/founder/pic2.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        {{ trans('string.founder_d_3') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 founder-info">
                            <div data-fancybox="gallery" href="/img/about/founder/pic3.jpg" class="link-image" style="background-image: url('/img/about/founder/pic3.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        {{ trans('string.founder_d_4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="about-section-title" style="margin-top: 50px;">{{ trans('string.about23') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-8">
                            {!! trans('string.about24') !!}
                        </div>
                        <div class="col-md-4">
                            <div data-fancybox="gallery" href="/img/about/founder/pic4.png" class="link-image">
                                <img style="max-width: 400px;" src="/img/about/founder/pic4.png" alt="">
                                <div class="mask">
                                    <div class="info">
                                        {{ trans('string.founder_d_5') }}
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                </div> --}}
            </div>
            @if (config('app.sideBar'))
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>    
            @endif
            
        </div>
    </div>
@endsection
