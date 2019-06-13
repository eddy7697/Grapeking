@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/course_banner.jpg');
}
</style>
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
            <div class="col-md-9 about-content">
                <h3 class="about-section-title">{{ trans('string.about13') }}</h3>
                <div class="about-text">
                    {!! trans('string.about14') !!}
                </div>
                <img class="about-image" src="/img/about/course_pic.jpg" alt="">
                <div class="about-text">
                    {!! trans('string.about15') !!}
                </div>
            </div>
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>
        </div>
    </div>
    <a data-fancybox class="fancybox-btn" href="https://www.youtube.com/watch?v=6LNIFuG204s">
        <div class="vdieo-present-section">
            <div class="info">
                <h2>VIDEO</h2>
                <h4>葡萄王生技股份有限公司介紹影片</h4>
                <img class="play-btn" src="/img/site-logo/play-icon.png" alt="">
            </div>
        </div>
    </a>
@endsection
