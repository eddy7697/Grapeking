@extends('main')

@section('custom-script')
@if (config('app.sideBar'))
<script src="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
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
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/research/banner-foodsafty.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(24)!!}
</style>
@else
<style>
    {!!PageView::css(23)!!}
</style>
@endif
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        食品安全中心
                    <br>
                    <span style="font-size: 16px;">Centre for Food Safety</span>
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
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.food_safty_center') }}</li>
                        </ul>
                        <h2>{{ trans('string.food_safty_center') }}</h2>
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
            {!!PageView::show(24)!!}
            @else
            {!!PageView::show(23)!!}
            @endif
            {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.research_f_1') }}</h3>

            <div class="about-text">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{ trans('string.research_f_d_1') }}
                        </p> 
                    </div>
                    <div class="col-md-6 mobile-to-left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="https://grapeking.shuo-guo.net/img/research/CSR/CSR_{{App::getLocale()}}_1.jpg" alt="">
                    </div>
                </div>                    
            </div>

            <div class="about-text" style="margin:50px 0 30px;">
                {{ trans('string.research_f_d_2') }}
            </div>

            <img class="about-image" src="https://grapeking.shuo-guo.net/img/research/CSR/CSR_{{App::getLocale()}}_3.jpg" alt="{{ trans('string.research_f_d_2') }}">

            <div class="about-text" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-5" style="text-align: left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="https://grapeking.shuo-guo.net/img/research/CSR/CSR_{{App::getLocale()}}_2.jpg" alt="">
                    </div>
                    <div class="col-md-7 force-center">
                        <p>
                            {{ trans('string.research_f_d_1') }}
                        </p> 
                    </div>
                </div>                    
            </div> --}}
        </div>
        @if (config('app.sideBar'))
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
        @endif
        
    </div>
</div>
@endsection
