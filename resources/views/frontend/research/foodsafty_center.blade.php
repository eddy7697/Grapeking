@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/research/foodsafty-banner.jpg');
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
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.foodSafty') }}</li>
                        </ul>
                        <h2>{{ trans('string.foodSafty') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 about-content">
            <h3 class="about-section-title">{{ trans('text.research_f_1') }}</h3>

            <div class="about-text">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{ trans('text.research_f_d_1') }}
                        </p> 
                    </div>
                    <div class="col-md-6 mobile-to-left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/foodsafty-1.png" alt="">
                    </div>
                </div>                    
            </div>

            <div class="about-text" style="margin:50px 0 30px;">
                {{ trans('text.research_f_d_2') }}
            </div>

            <img class="about-image" src="/img/research/foodsafty-2.png" alt="{{ trans('text.research_f_d_2') }}">

            <div class="about-text" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-5" style="text-align: left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/foodsafty-3.png" alt="">
                    </div>
                    <div class="col-md-7 force-center">
                        <p>
                            {{ trans('text.research_f_d_1') }}
                        </p> 
                    </div>
                </div>                    
            </div>
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
