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
    background-image: url('/img/csr/csr-1.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(4)!!}
</style>
@else
<style>
    {!!PageView::css(3)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                        员工关系
                        <br>
                        <span style="font-size: 16px;">Happy Workplace</span>
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
                                <li>{{ trans('string.responsibility') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.relations') }}</li>
                            </ul>
                            <h2>{{ trans('string.relations') }}</h2>
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
                {!!PageView::show(4)!!}
                @else
                {!!PageView::show(3)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.relations') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                {{ trans('string.relations_d_1') }}
                            </p>     
                        </div>
                        <div class="col-md-5 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/relation-1.jpg" alt="">
                        </div>
                    </div>                    
                </div>

                <h3 class="about-section-title" id="section_2">{{ trans('string.relation_2') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/relation-2.jpg" alt="">
                            
                        </div>
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.relations_d_2') }}
                            </p> 
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.join_us') }}</a>
                        </div>
                    </div>                    
                </div> --}}

            </div>
            
            {{-- side thumd --}}
            @if (config('app.sideBar'))
            <div class="col-md-3 about-thumbnail">
                @include('components.csrThumbnail')
            </div>
            @endif

            
        </div>
    </div>
@endsection
