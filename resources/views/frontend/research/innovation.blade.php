@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/research/banner-2.jpg');
}
</style>
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-thumbnail-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="site-thumbnail-container">
                        <ul class="site-thumbnail">
                            <li>{{ trans('string.home') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('text.innovation_rnd_center') }}</li>
                        </ul>
                        <h2>{{ trans('text.innovation_rnd_center') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 about-content">
            <h3 class="about-section-title">{{ trans('string.about7') }}</h3>
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
            <h3 class="about-section-title">{{ trans('string.about9') }}</h3>
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
            <h3 class="about-section-title">{{ trans('string.about11') }}</h3>
            <div class="about-text">
                {!! trans('string.about12') !!}
            </div>
            <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt="">
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
