@extends('main')

@section('custom-script')

@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/banner.jpg');
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
            <div class="col-md-9 about-content">
                <h3 class="about-section-title" id="about_1">{{ trans('string.company_profile') }}</h3>
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
                <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt="">
            </div>
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>
        </div>
    </div>
@endsection
