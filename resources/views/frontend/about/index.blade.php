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

<script>

// var sections = ['#about_1', '#about_2', '#about_3', '#about_4'];

// $(window).scroll(function () {
//     var offsetSet = []
//     sections.forEach(elm => {
//         offsetSet.push({
//             elm: elm,
//             offset: $(elm).offset().top - $(window).scrollTop() - 200
//         });
//     });

//     console.log(offsetSet)
// });

</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('/img/about/banner.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(12)!!}
</style>
@else
<style>
    {!!PageView::css(11)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                        关于我们
                        <br>
                        <span style="font-size: 16px;">Introduction</span>
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
                                <li>{{ trans('string.about_us') }}</li>
                            </ul>
                            <h2>{{ trans('string.about_us') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-content">
                @if (App::getLocale() == 'en')
                {!!PageView::show(12)!!}
                @else
                {!!PageView::show(11)!!}
                @endif
                {{-- <div class="row company-section">
                    <div class="col-md-5 info-image force-center mobile-to-hide" data-aos="fade-right" data-aos-duration="2000">
                        <img src="/img/about/company-1.jpg" class="company-image" alt="">
                    </div>
                    <div class="col-md-7 info-content" data-aos="fade-left" data-aos-duration="2000">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/grapeking.png" alt="">
                                </div>
                                <div class="label">{{ trans('string.company_profile') }}</div>
                            </div>
                            <div class="content">
                                <p>{{ trans('string.about1') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image mobile-to-show">
                        <img src="/img/about/company-1.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section">
                    <div class="col-md-7 info-content" data-aos="fade-right" data-aos-duration="2000">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/site-logo.png" alt="">
                                </div>
                                <div class="label">{{ trans('string.about5') }}</div>
                            </div>
                            <div class="content">
                                <p>{!! trans('string.about6') !!}</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5 info-image force-center" data-aos="fade-left" data-aos-duration="2000">
                        <img src="/img/about/company-2.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section">
                    <div class="col-md-5 info-image force-center mobile-to-hide" data-aos="fade-right" data-aos-duration="2000">
                        <img src="/img/about/company-3.jpg" class="company-image" alt="">
                    </div>
                    <div class="col-md-7 info-content" data-aos="fade-left" data-aos-duration="2000">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/dong-pu.png" alt="">
                                </div>
                                <div class="label">{{ trans('string.about7') }}​</div>
                            </div>
                            <div class="content">
                                <p>{!! trans('string.about8') !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image mobile-to-show">
                        <img src="/img/about/company-3.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section">
                    <div class="col-md-7 info-content" data-aos="fade-right" data-aos-duration="2000">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/pu-zun.png" alt="">
                                </div>
                                <div class="label">{!! trans('string.about9') !!}</div>
                            </div>
                            <div class="content">
                                <p>{!! trans('string.about10') !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image force-center" data-aos="fade-left" data-aos-duration="2000">
                        <img src="/img/about/company-4.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section">
                    <div class="col-md-5 info-image force-center mobile-to-hide" data-aos="fade-right" data-aos-duration="2000">
                        <img src="/img/about/company-5.jpg" class="company-image" alt="">
                    </div>
                    <div class="col-md-7 info-content" data-aos="fade-left" data-aos-duration="2000">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/bio-center.png" alt="">
                                </div>
                                <div class="label">{{ trans('string.bioengineering_center') }}​</div>
                            </div>
                            <div class="content">
                                <p>{!! trans('string.index_d_8') !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image mobile-to-show">
                        <img src="/img/about/company-5.jpg" class="company-image" alt="">
                    </div>
                </div> --}}
                {{-- @if (App::getLocale() == 'en')
                {!!PageView::show(12)!!}
                @else
                {!!PageView::show(11)!!}
                @endif --}}
                {{-- <h3 class="about-section-title" id="about_1">{{ trans('string.company_profile') }}</h3>
                <div class="about-text">
                    {!! trans('string.about1') !!}
                </div>
                <img class="about-image" src="/img/about/company-1.jpg" alt="">
                <h3 class="about-section-title" id="about_2">{{ trans('string.about5') }}</h3>
                <div class="about-text">
                    {!! trans('string.about6') !!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="about-image" src="/img/about/company-2.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="about-image" style="height: 250px;" src="/img/about/site-logo.png" alt="">
                    </div>
                </div>
                
                <h3 class="about-section-title" id="about_3">{{ trans('string.about7') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-8">
                            {!! trans('string.about8') !!}
                        </div>
                        <div class="col-md-4">
                            <img class="about-image inner" src="/img/about/dong-pu.png" alt="">
                        </div>
                    </div>                    
                </div>
                <h3 class="about-section-title" id="about_4">{{ trans('string.about9') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="about-image inner" src="/img/about/pu-zun.png" alt="">
                        </div>
                        <div class="col-md-8">
                            {!! trans('string.about10') !!}
                        </div>
                    </div>                    
                </div>                
                <h3 class="about-section-title" id="about_5">{{ trans('string.about11') }}</h3>
                <div class="about-text">
                    {!! trans('string.about12') !!}
                </div>
                <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt=""> --}}
            </div>
            {{-- <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div> --}}
        </div>
    </div>
@endsection
