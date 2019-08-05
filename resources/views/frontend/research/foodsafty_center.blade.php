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
            @if (App::getLocale() == 'en')
            {!!PageView::show(24)!!}
            @else
            {!!PageView::show(23)!!}
            @endif
            {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.research_f_1') }}</h3>

            <div class="about-text">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{ trans('string.research_f_d_1') }}
                        </p> 
                    </div>
                    <div class="col-md-6 mobile-to-left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/CSR/CSR_{{App::getLocale()}}_1.jpg" alt="">
                    </div>
                </div>                    
            </div>

            <div class="about-text" style="margin:50px 0 30px;">
                {{ trans('string.research_f_d_2') }}
            </div>

            <img class="about-image" src="/img/research/CSR/CSR_{{App::getLocale()}}_3.jpg" alt="{{ trans('string.research_f_d_2') }}">

            <div class="about-text" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-5" style="text-align: left">
                        <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/CSR/CSR_{{App::getLocale()}}_2.jpg" alt="">
                    </div>
                    <div class="col-md-7 force-center">
                        <p>
                            {{ trans('string.research_f_d_1') }}
                        </p> 
                    </div>
                </div>                    
            </div> --}}
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
