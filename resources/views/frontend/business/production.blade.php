@extends('main')

@section('custom-script')


@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/business/banner-1.jpg');
}
.slick-dots {
    /* bottom: 0; */
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(20)!!}
</style>
@else
<style>
    {!!PageView::css(19)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                            生产服务
                        <br>
                        <span style="font-size: 16px;">Production service</span>
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
                                <li>{{ trans('string.business') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.production') }}</li>
                            </ul>
                            <h2>{{ trans('string.production') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row production-content">
            <div class="col-md-7 production-left-side">
                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500" src="/img/business/production_flow.png" class="production-image" alt="">
            </div>
            <div class="col-md-5 production-right-side mobile-to-hide">
                工厂规模
            </div>
        </div>
    </div>
    <div class="production-tabs" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active tablet" data-toggle="tab" href="#home">片劑</a>
            </li>
            <li class="nav-item">
                <a class="nav-link granule" data-toggle="tab" href="#menu1">顆粒粉末</a>
            </li>
            <li class="nav-item">
                <a class="nav-link aluminum" data-toggle="tab" href="#menu2">曲線鋁箔袋</a>
            </li>
            <li class="nav-item">
                <a class="nav-link capsule" data-toggle="tab" href="#menu3">咖啡膠囊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link glass_bottle" data-toggle="tab" href="#menu4">玻璃瓶</a>
            </li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane container-fluid active" id="home">
                <div class="row">
                    <div class="col-md-5 label tablet">
                        <img src="/img/business/prod/2-1.svg" alt="">
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade" id="menu1">
                <div class="row">
                    <div class="col-md-5 label granule">
                        <img src="/img/business/prod/2-2.svg" alt="">
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade" id="menu2">
                <div class="row">
                    <div class="col-md-5 label aluminum">
                        <img src="/img/business/prod/2-3.svg" alt="">
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade" id="menu3">
                <div class="row">
                    <div class="col-md-5 label capsule">
                        <img src="/img/business/prod/2-4.svg" alt="">
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade" id="menu4">
                <div class="row">
                    <div class="col-md-5 label glass_bottle">
                        <img src="/img/business/prod/2-5.svg" alt="">
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 about-content">
            <div class="about-text" style="text-align: center">
                <p style="margin-top: 50px; font-weight: 700">{{ trans('string.production_d_12') }}</p>
                <a class="location-contact-btn" style="margin-top: 20px;" href="/contact">{{ trans('string.catalog_d_17') }}</a>
            </div>
        </div>
    </div>
@endsection
