@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/founder/banner.jpg');
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
            <div class="col-md-9 about-content">
                <div class="about-text signature">
                    <h3 style="margin: 150px 0 50px; font-weight: 700">{{ trans('string.about17') }}</h3>
                    <img class="about-image pull-right" src="/img/about/founder/signature.jpg" alt="">
                </div>
                <div style="clear: both"></div>
                <h3 class="about-section-title" style="margin-top: 0">{{ trans('string.about18') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="/img/about/founder/person.jpg" class="link-image">
                                <img src="/img/about/founder/person.jpg" alt="">
                                <div class="mask">
                                    <div class="info">
                                        創辦人暨總裁 曾水照 先生
                                        <br>
                                        (1935.04.14 - 2014.12.01)
                                    </div>
                                </div>
                            </a>
                        </div> 
                        <div class="col-md-9">
                            {!! trans('string.about19') !!}
                        </div>
                    </div>
                    
                </div>
                <h3 class="about-section-title">{{ trans('string.about20') }}</h3>
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
                            <a data-fancybox="gallery" href="/img/about/founder/pic.jpg" class="link-image"  style="background-image: url('/img/about/founder/pic.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        棒球队受奖与总裁合影
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5 founder-info">
                            <a data-fancybox="gallery" href="/img/about/founder/pic2.jpg" class="link-image" style="background-image: url('/img/about/founder/pic2.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        总裁(前排左)与葡众六大顾问合影
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 founder-info">
                            <a data-fancybox="gallery" href="/img/about/founder/pic3.jpg" class="link-image" style="background-image: url('/img/about/founder/pic3.jpg');">
                                <div class="mask">
                                    <div class="info">
                                        康贝特经销商大会
                                    </div>
                                </div>
                            </a>
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
                            <a data-fancybox="gallery" href="/img/about/founder/pic4.png" class="link-image">
                                <img style="max-width: 400px;" src="/img/about/founder/pic4.png" alt="">
                                <div class="mask">
                                    <div class="info">
                                        康贝特广告
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>
        </div>
    </div>
@endsection
