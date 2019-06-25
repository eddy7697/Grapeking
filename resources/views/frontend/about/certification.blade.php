@extends('main')

@section('custom-script')
<script>
    $('.cert-album').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrow: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrow: true,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrow: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrow: true
                }
            }
        ]
    });
</script>
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/certification/banner.jpg');
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
                                <li>{{ trans('string.about25') }}</li>
                            </ul>
                            <h2>{{ trans('string.about25') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content">
                <h3 class="about-section-title" id="about_1">{{ trans('string.about26') }}</h3>
                <div class="about-text">
                    {!! trans('string.about27') !!}
                </div>
                <img class="about-image" src="/img/about/certification/pic1.jpg" alt="">
                <h3 class="about-section-title" id="about_2">{{ trans('string.about28') }}</h3>
                <div class="about-text">
                    {!! trans('string.about29') !!}
                    <div class="row mobile-to-hide">
                        <div class="col-md-4">
                            <img class="about-image" src="/img/about/certification/pic2.jpg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img class="about-image" src="/img/about/certification/pic3.jpg" alt="">
                        </div>
                        <div class="col-md-4">
                            <img class="about-image" src="/img/about/certification/pic4.jpg" alt="">
                        </div>
                    </div>
                    <div class="cert-album mobile-to-show">
                        <img class="about-image" src="/img/about/certification/pic2.jpg" alt="">
                        <img class="about-image" src="/img/about/certification/pic3.jpg" alt="">
                        <img class="about-image" src="/img/about/certification/pic4.jpg" alt="">
                    </div>
                    
                    {!! trans('string.about30') !!}
                </div>
            </div>
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>
        </div>
    </div>
@endsection
