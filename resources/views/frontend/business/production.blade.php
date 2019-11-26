@extends('main')

@php
    $locale = App::getLocale();
    $material = array(
        [
            'title' => trans('text.material_prod_1'),
            'text' => trans('text.material_prod_1_text'),
            'bg' => '/img/business/material/material-1_bg.jpg',
            'image' => '/img/business/material/material-1.png',
            'color' => '#e30133',
        ],[
            'title' => trans('text.material_prod_2'),
            'text' => trans('text.material_prod_2_text'),
            'bg' => '/img/business/material/material-2_bg.jpg',
            'image' => '/img/business/material/material-2.png',
            'color' => '#a8ca02',
        ],[
            'title' => trans('text.material_prod_3'),
            'text' => trans('text.material_prod_3_text'),
            'bg' => '/img/business/material/material-3_bg.jpg',
            'image' => '/img/business/material/material-3.png',
            'color' => '#f23764',
        ],[
            'title' => trans('text.material_prod_4'),
            'text' => trans('text.material_prod_4_text'),
            'bg' => '/img/business/material/material-4_bg.jpg',
            'image' => '/img/business/material/material-4.png',
            'color' => '#e58a2d',
        ],[
            'title' => trans('text.material_prod_5'),
            'text' => trans('text.material_prod_5_text'),
            'bg' => '/img/business/material/material-5_bg.jpg',
            'image' => '/img/business/material/material-5.png',
            'color' => '#369fd9',
        ]
    );
@endphp

@section('custom-script')
<script>
var links = $('.nav-link');
var count = 0;
var timeOunt = 5000;
var autoPlay = function () {
    if (count == links.length - 1) {
        count = 0;
    } else {
        count += 1;
    }
    
    $(links.get(count)).tab('show');
}

var play = setInterval(function() {
    autoPlay();
}, timeOunt);


function tabShow(label) {
    $(`.nav-link.` + label).tab('show');
}

function startProgress() {
    $('.tab-pane .progress-bar').show();
    $('.tab-pane .progress-bar').addClass('full');
}

function restoreProgress() {
    $('.tab-pane .progress-bar').hide();
    $('.tab-pane .progress-bar').removeClass('full');
}

startProgress();

$('.tab-pane .progress-bar .percentage').css({
    'transition-duration': timeOunt - 100 + 'ms'
});

$('.nav-link').on('shown.bs.tab', function(event){
    count = $('.nav-link').index($(event.currentTarget));
    startProgress();
    play = setInterval(function() {
            autoPlay();
        }, timeOunt);
    $('.prod-material').addClass('fadeInLeft animated');
});
$('.nav-link').on('hide.bs.tab', function(event){
    restoreProgress();
    clearInterval(play)
    $('.prod-material').removeClass('fadeInLeft animated');
});
</script>

<script>
$('.material-slide').slick({
    // dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    // slidesToScroll: 5,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                // slidesToScroll: 4,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                // slidesToScroll: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                // slidesToScroll: 2
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                // slidesToScroll: 1
            }
        }
    ]
});

function adjustMaterial() {
    if ($(window).width() < 1080) {
        $('.material-item').addClass('active');
    } else {
        $('.material-item').removeClass('active');
    }
}

adjustMaterial();

$(window).resize(function () {
    adjustMaterial()
});
</script>
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
                        <span style="font-size: 16px;">OEM Service</span>
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
    <div class="production-content">
        <div class="container">
            <div class="row">
                {{-- <div class="bg-img"></div> --}}
                <div class="col-md-12 mobile-to-show">
                    <h1 style="text-align: center; font-weight: 700">{{trans('text.prod_factory')}}</h1>
                </div>
                <div class="col-md-7 production-left-side">
                    @if (App::getLocale() == 'en')
                        <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500" src="/img/business/production_flow_en.svg" class="production-image" alt="">    
                    @else
                        <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500" src="/img/business/production_flow.svg" class="production-image" alt="">
                    @endif
                </div>
                <div class="col-md-5 production-right-side mobile-to-hide">
                    <span class="factory-text">{{trans('text.prod_factory')}}</span>
                </div>
            </div>
        </div>
        <div class="bottom-mask"></div>
    </div>
    <div class="material-slide" style="overflow: hidden">
        @foreach ($material as $index => $item)
            <div class="material-item">
                <div class="material-bg" style="background-image: url('{{$item['bg']}}')"></div>
                <div class="material-mask">
                    <div class="material-info">
                        <div class="material-logo" style="background-color: {{$item['color']}}">
                            <img src="{{$item['image']}}" alt="">
                        </div>
                        <h4>{{$item['title']}}</h4>
                        <div class="text">
                            {{$item['text']}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="production-tabs" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active tablet" data-toggle="tab" href="#home">{{trans('text.prod_1')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link granule" data-toggle="tab" href="#menu1">{{trans('text.prod_2')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link aluminum" data-toggle="tab" href="#menu2">{{trans('text.prod_3')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link capsule" data-toggle="tab" href="#menu3">{{trans('text.prod_4')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link glass_bottle" data-toggle="tab" href="#menu4">{{trans('text.prod_5')}}</a>
            </li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane container-fluid active" id="home">
                <div class="row">
                    <div class="col-md-5 label tablet">
                        @if ($locale == 'en')
                                @include('components.prod_en.prod_thumb', ['index' => 1, 'prev' => 'glass_bottle', 'next' => 'granule'])
                                @include('components.prod_en.01')
                        @else
                                @include('components.prod.prod_thumb', ['index' => 1, 'prev' => 'glass_bottle', 'next' => 'granule'])
                                @include('components.prod.01')
                        @endif
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-1.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar tablet">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane fade container-fluid" id="menu1">
                <div class="row">
                    <div class="col-md-5 label granule">
                        @if ($locale == 'en')
                            @include('components.prod_en.prod_thumb', ['index' => 2, 'prev' => 'tablet', 'next' => 'aluminum'])
                            @include('components.prod_en.02')    
                        @else
                            @include('components.prod.prod_thumb', ['index' => 2, 'prev' => 'tablet', 'next' => 'aluminum'])
                            @include('components.prod.02')
                        @endif
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-2.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar granule">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane fade container-fluid" id="menu2">
                <div class="row">
                    <div class="col-md-5 label aluminum">
                        @if ($locale == 'en')
                            @include('components.prod_en.prod_thumb', ['index' => 3, 'prev' => 'granule', 'next' => 'capsule'])
                            @include('components.prod_en.03')
                        @else
                            @include('components.prod.prod_thumb', ['index' => 3, 'prev' => 'granule', 'next' => 'capsule'])
                            @include('components.prod.03')
                        @endif
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-3.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar aluminum">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane fade container-fluid" id="menu3">
                <div class="row">
                    <div class="col-md-5 label capsule">
                        @if ($locale == 'en')
                            @include('components.prod_en.prod_thumb', ['index' => 4, 'prev' => 'aluminum', 'next' => 'glass_bottle'])
                            @include('components.prod_en.04')
                        @else
                            @include('components.prod.prod_thumb', ['index' => 4, 'prev' => 'aluminum', 'next' => 'glass_bottle'])
                            @include('components.prod.04')
                        @endif
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-4.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar capsule">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane fade container-fluid" id="menu4">
                <div class="row">
                    <div class="col-md-5 label glass_bottle">
                        @if ($locale == 'en')
                        @include('components.prod_en.prod_thumb', ['index' => 5, 'prev' => 'capsule', 'next' => 'tablet'])
                        @include('components.prod_en.05')
                        @else
                        @include('components.prod.prod_thumb', ['index' => 5, 'prev' => 'capsule', 'next' => 'tablet'])
                        @include('components.prod.05')
                        @endif
                    </div>
                    <div class="col-md-7 image">
                        <img src="/img/business/prod/2-5.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar glass_bottle">
                    <div class="percentage"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 about-content">
            <div class="about-text" style="text-align: center">
                <p style="margin-top: 50px; font-weight: 700">{!! trans('string.production_d_12') !!}</p>
                <a class="location-contact-btn" style="margin-top: 20px;" href="/contact">{{ trans('string.catalog_d_17') }}</a>
            </div>
        </div>
    </div>
@endsection
