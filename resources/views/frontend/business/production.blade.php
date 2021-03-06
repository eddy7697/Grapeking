@extends('main')

@php
    $locale = App::getLocale();
    $material = array(
        [
            'title' => trans('text.material_prod_1'),
            'text' => trans('text.material_prod_1_text'),
            'bg' => 'https://grapeking.shuo-guo.net/img/business/material/material-1_bg.jpg',
            'image' => 'https://grapeking.shuo-guo.net/img/business/material/material-1.png',
            'color' => '#e30133',
        ],[
            'title' => trans('text.material_prod_2'),
            'text' => trans('text.material_prod_2_text'),
            'bg' => 'https://grapeking.shuo-guo.net/img/business/material/material-2_bg.jpg',
            'image' => 'https://grapeking.shuo-guo.net/img/business/material/material-2.png',
            'color' => '#a8ca02',
        ],[
            'title' => trans('text.material_prod_3'),
            'text' => trans('text.material_prod_3_text'),
            'bg' => 'https://grapeking.shuo-guo.net/img/business/material/material-3_bg.jpg',
            'image' => 'https://grapeking.shuo-guo.net/img/business/material/material-3.png',
            'color' => '#f23764',
        ],[
            'title' => trans('text.material_prod_4'),
            'text' => trans('text.material_prod_4_text'),
            'bg' => 'https://grapeking.shuo-guo.net/img/business/material/material-4_bg.jpg',
            'image' => 'https://grapeking.shuo-guo.net/img/business/material/material-4.png',
            'color' => '#e58a2d',
        ],[
            'title' => trans('text.material_prod_5'),
            'text' => trans('text.material_prod_5_text'),
            'bg' => 'https://grapeking.shuo-guo.net/img/business/material/material-5_bg.jpg',
            'image' => 'https://grapeking.shuo-guo.net/img/business/material/material-5.png',
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
var labels = [];

links.map(function (elm) {
    // console.log(elm)
    labels.push($(links[elm]).attr('data-label'));
    return ;
})

var currentTab = labels[0];


var play = setInterval(function() {
    autoPlay();
}, timeOunt);


function tabShow(label) {
    console.log(label)
    count = labels.indexOf(label)
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
    currentTab = labels[count]
    console.log(currentTab);
    
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

function prevTab() {
    var index = labels.indexOf(currentTab)
    
    if (count == 0) {
        tabShow(labels[labels.length - 1]);
    } else {
        tabShow(labels[index - 1]);
    }
}
function nextTab() {
    var index = labels.indexOf(currentTab)

    if (count == labels.length - 1) {
        tabShow(labels[0]);
    } else {
        tabShow(labels[index + 1]);
    }
}
</script>

<script>
$('.material-slide').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    nextArrow: $('.next-arrow'),
    prevArrow: $('.prev-arrow'),
    // slidesToScroll: 5,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                // slidesToScroll: 4,
                infinite: true,
                dots: false
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

function adjustInnerText() {
    var cards = $('.label-inner-text');
    var finalHeight = 0;

    for (let i = 0; i < cards.length; i++) {
        if ($(cards[i]).height() > finalHeight) {
            finalHeight = $(cards[i]).height();
        }
    }
    $('.label-inner-text').height(finalHeight);
}

adjustMaterial();
adjustInnerText()

$(window).resize(function () {
    adjustMaterial()
});



</script>
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/business/banner-1.jpg');
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

    <div class="factory-layout">
        <div class="factory-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-left" data-aos-duration="1500">
                        <h1 style="">{{trans('text.prod_factory')}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="factory-label-container">
            <div class="factory-label">
                <div class="label-item">
                    <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">{!!trans('text.factory_label_1')!!}</h2>
                    <div class="label-inner-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <p>{!!trans('text.factory_label_1_text')!!}</p>
                    </div>
                </div>
                <div class="label-item">
                    <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">{!!trans('text.factory_label_2')!!}</h2>
                    <div class="label-inner-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <p>{!!trans('text.factory_label_2_text')!!}</p>
                    </div>
                </div>
                <div class="label-item">
                    <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">{!!trans('text.factory_label_3')!!}</h2>
                    <div class="label-inner-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <p>{!!trans('text.factory_label_3_text')!!}</p>
                    </div>
                </div>
                <div class="label-item">
                    <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">{!!trans('text.factory_label_4')!!}</h2>
                    <div class="label-inner-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                        <p>{!!trans('text.factory_label_4_text')!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (false)
        <div class="production-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mobile-to-show">
                        <h1 style="text-align: center; font-weight: 700">{{trans('text.prod_factory')}}</h1>
                    </div>
                    <div class="col-md-7 production-left-side">
                        @if (App::getLocale() == 'en')
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500" src="https://grapeking.shuo-guo.net/img/business/production_flow_en.svg" class="production-image" alt="">    
                        @else
                            <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500" src="https://grapeking.shuo-guo.net/img/business/production_flow.svg" class="production-image" alt="">
                        @endif
                    </div>
                    <div class="col-md-5 production-right-side mobile-to-hide">
                        <span class="factory-text">{{trans('text.prod_factory')}}</span>
                    </div>
                </div>
            </div>
            <div class="bottom-mask"></div>
        </div>
    @endif
    
    <div class="material-slide-container {{App::getLocale()}}">
        <div class="material-slide">
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
        <div class="prev-arrow">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
        <div class="next-arrow">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
    </div>
    
    <div class="production-tabs" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" style="margin-top: -7px">
        <ul class="nav nav-tabs mobile-to-hide">
            <li class="nav-item">
                <a class="nav-link active tablet" data-label="tablet" data-toggle="tab" href="#home">{{trans('text.prod_1')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link granule" data-label="granule" data-toggle="tab" href="#menu1">{{trans('text.prod_2')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link aluminum" data-label="aluminum" data-toggle="tab" href="#menu2">{{trans('text.prod_3')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link capsule" data-label="capsule" data-toggle="tab" href="#menu3">{{trans('text.prod_4')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link glass_bottle" data-label="glass_bottle" data-toggle="tab" href="#menu4">{{trans('text.prod_5')}}</a>
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
                        <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-7 image">
                        <img src="https://grapeking.shuo-guo.net/img/business/prod/2-1.jpg" alt="">
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
                        <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-7 image">
                        <img src="https://grapeking.shuo-guo.net/img/business/prod/2-2.jpg" alt="">
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
                        <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-7 image">
                        <img src="https://grapeking.shuo-guo.net/img/business/prod/2-3.jpg" alt="">
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
                        <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-7 image">
                        <img src="https://grapeking.shuo-guo.net/img/business/prod/2-4.jpg" alt="">
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
                        <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-7 image">
                        <img src="https://grapeking.shuo-guo.net/img/business/prod/2-5.jpg" alt="">
                    </div>
                </div>
                <div class="progress-bar glass_bottle">
                    <div class="percentage"></div>
                </div>
            </div>
        </div>

        {{-- <div class="tab-btn prev mobile-to-show-flex" onclick="prevTab()">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
        <div class="tab-btn next mobile-to-show-flex" onclick="nextTab()">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div> --}}
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
