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

<script>
    var cards = $('.info-text');
    var finalHeight = 0;
    
    for (let i = 0; i < cards.length; i++) {
        if ($(cards[i]).height() > finalHeight) {
            finalHeight = $(cards[i]).height();
        }
    }
    $('.info-text').height(finalHeight);

    // var titles = $('.about-section-title');
    // var finalHeight = 0;
    
    // for (let i = 0; i < titles.length; i++) {
    //     if ($(titles[i]).height() > finalHeight) {
    //         finalHeight = $(titles[i]).height();
    //     }
    // }
    // $('.about-section-title').height(finalHeight);
</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/research/inno_banner.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(26)!!}
</style>
@else
<style>
    {!!PageView::css(25)!!}
</style>
@endif
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        创新研发中心
                    <br>
                    <span style="font-size: 16px;">Innovative R&D Center</span>
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
                            <li>{{ trans('string.innovation_rnd_center') }}</li>
                        </ul>
                        <h2>{{ trans('string.innovation_rnd_center') }}</h2>
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
            {!!PageView::show(26)!!}
            @else
            {!!PageView::show(25)!!}
            @endif
            {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.professional_rnd_lineup') }}</h3>
            <div class="about-text">
                <p>{{trans('text.invo_d_1')}}</p>                  
            </div>
            <img class="about-image" src="https://grapeking.shuo-guo.net/img/research/research-1.jpg" alt="">

            <h3 class="about-section-title" id="section_2">{{ trans('string.leading_rnd_technology') }}</h3>
            <div class="about-text">
                <p>
                    {{trans('text.invo_d_2')}}
                </p>                                
                <p>
                    {{trans('text.invo_d_3')}}
                </p>                  
            </div>
            <img class="about-image" src="https://grapeking.shuo-guo.net/img/research/research-2.jpg" alt="">

            <div class="row">
                <div class="col-md-6">
                    <h3 class="about-section-title" id="section_3">{{ trans('string.market_trends') }}</h3>
                    <div class="about-text ">
                        <div class="info-text">
                            <p>
                                {{trans('text.invo_d_4')}}
                            </p>  
                        </div>
                                        
                    </div>
                    <img class="about-image" src="https://grapeking.shuo-guo.net/img/research/research-3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="about-section-title" id="section_4">{{ trans('string.international_quality_standards') }}</h3>
                    <div class="about-text ">
                        <div class="info-text">
                            <p>
                                {{trans('text.invo_d_5')}}
                            </p>  
                        </div>
                                        
                    </div>
                    <img class="about-image" src="https://grapeking.shuo-guo.net/img/research/research-4.jpg" alt="">
                </div>
            </div> --}}
        </div>
        
        {{-- side thumd --}}
        @if (config('app.sideBar'))
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div> 
        @endif
        
    </div>
</div>
@endsection
