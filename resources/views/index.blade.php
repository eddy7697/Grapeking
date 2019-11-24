@extends('main')

@php
    use Carbon\Carbon;
@endphp

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/swipe/swiper.min.css">
    <style>
        .swiper-container {
            width: 100%;
            padding-bottom: 41.5%;
            /* z-index: -1; */
        }
        .swiper-wrapper {
            position: absolute;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            width: 100%;
            height: 100%;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color:#000;
            opacity: 1;
            border-radius: 5px;
            margin: 0 10px !important;
            background: rgba(0,0,0,0.2);
            box-shadow: 2px 2px 12px -2px rgba(0, 0, 0, 1);
        }
        .swiper-pagination-bullet-active {
            color: #fff;
            background: #FFF;
            box-shadow: 2px 2px 12px -2px rgba(0, 0, 0, 0.5);
        }
        .swiper-container-horizontal>.swiper-pagination-bullets {
            bottom: 20px;
        }
    </style>
@endsection

@section('custom-script')
    <script src="/js/plugins/swipe/swiper.min.js"></script>
    <script src="/js/plugins/countup/countUp.min.js" type="module"></script>
    <script type="module">
        import { CountUp } from '/js/plugins/countup/countUp.min.js';

        window.onload = function() {
            var countOption = {
                duration: 2,
                useEasing: true
            }
            var countUpYear = new CountUp('count-year', 1969, {
                useGrouping: false,
                duration: 2,
                useEasing: true
            });
            var countUpProd = new CountUp('count-prod', 32, countOption);
            var countUpMem = new CountUp('count-mem', 83, countOption);
            var countUpReturn = new CountUp('count-return', 70, countOption);
            var counted = false
            
            $(window).scroll(function(){
                if ($(window).scrollTop() > $('.swiper-wrapper').height() + $('.about-pro').height() - 400) {
                    if (!counted) {
                        countUpYear.start();
                        countUpProd.start();
                        countUpMem.start();
                        countUpReturn.start();
                        counted = true
                    }
                }
            });

            $('.scrollDown').on('click', function () {
                $("html, body").animate({
                    scrollTop: $('.swiper-wrapper').height() - $('.site-header-container').height() + 1
                }, 2000);
            });
        }
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
                },
            },
            autoplay: {
                delay: 4000
            },
        });

        $('.witness-container').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrow: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.license-container').slick({
            dots: true,
            infinite: true,
            speed: 300,
            arrow: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
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
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrow: true
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        
        $('.about-section-container').slick({
            dots: true,
            infinite: true,
            speed: 300,
            arrow: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrow: true,
                        infinite: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script>
        var cards = $('.info-text');
        var finalHeight = 0;
        
        for (let i = 0; i < cards.length; i++) {
            if ($(cards[i]).height() > finalHeight) {
                finalHeight = $(cards[i]).height();
            }
        }
        $('.info-text').height(finalHeight);
    </script>
@endsection

@section('content')

    {{-- <div class="">
        <img src="/img/banner.jpg" width="100%" alt="">
    </div> --}}

    {{-- banner --}}
    @if (true)
    <div class="swiper-container" data-aos="fade-in">
        <div class="swiper-wrapper">
            @php
                $album = SiteMetaView::album();
                // $album = array([
                //     'url' => '/img/banner-2.jpg',
                //     'title' => 'test',
                //     'content' => 'test'
                // ]);
            @endphp
            @foreach ($album as $item)
                <div class="swiper-slide" style="background-image: url('{{$item->url}}'); background-size: cover;">
                    <div class="slide-item">     
                        {{-- <div class="type-icon mem" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="1500">
                            <img src="/img/banner-logo-1.png" style="max-width: 300px;" alt="">
                        </div>                    --}}
                        {{-- <div class="flex-column" data-aos="fade-left" data-aos-easing="ease-out" data-aos-duration="1500">
                            <div style="text-align: left">
                                <img src="/img/banner-text-1.png" alt="">
                            </div>
                            <div style="text-align: left">
                                <img src="/img/banner-text-2.png" alt="">
                            </div>
                        </div> --}}
                        {{-- <h2>{{$item['title']}}</h2>
                        <div class="slide-info">
                            {!!$item['content']!!}
                        </div>
                        <a class="slide-btn" href="{{$item->link}}">{{$item->button}}</a> --}}
                    </div>
                    <div class="scrollDown">
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <span class="text">Scroll down</span>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
    @endif

    <div class="container-fluid factory-list">
        <div class="row">            
            <div class="col-sm-6 col-md-3 factory-item food-safety">
                <div class="border-bar"></div>
                <div class="factory-item-info">
                    <p>食安中心</p>
                    <p>Food Safety Center</p>
                </div>
                <a href="/research/foodsafty"></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item bioengineering">
                <div class="border-bar"></div>                
                <div class="factory-item-info">
                    <p>生物科技研究所</p>
                    <p>Bioengineering Center</p>
                </div>
                <a href="/research/bioengineering"></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item innovation">
                <div class="border-bar"></div>
                <div class="factory-item-info">
                    <p>创新研发中心</p>
                    <p>Innovation R&D Center</p>
                </div>                
                <a href="/research/innovation"></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item factory">                
                <div class="border-bar"></div>
                <div class="factory-item-info">
                    <p>世界级工厂</p>
                    <p>World Class Factory</p>
                </div>
                <a href="/research/factory"></a>
            </div>
        </div>
    </div>

    <div class="container index-info about-pro">
        <div class="row">
            <div class="col-md-12 index-info-text-section">
                <h2>{{ trans('string.index_d_1') }}</h2>
                <hr>
                {!! trans('string.index_d_11') !!}
            </div>
            <div class="col-md-11 mx-auto cate-type">
                <div class="row">
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-1.jpg')">
                            <div class="text">
                                <p>{{ trans('string.business_1') }}</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-2.jpg')">
                            <div class="text">
                                <p>{{ trans('string.business_2') }}</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-3.jpg')">
                            <div class="text">
                                <p>{{ trans('string.business_3') }}</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-4.jpg')">
                            <div class="text">
                                <p>{{ trans('string.business_4') }}</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-5.jpg')">
                            <div class="text">
                                <p>{{ trans('string.business_5') }}</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 btn-section">
                <a href="/business/production" class="learn-more-btn">{{ trans('string.learn_more') }}</a>
            </div>
        </div> 
    </div>
    
    @if (true)
    {{-- Count down --}}
    <div class="container-fluid index-count-down" data-aos="fade-in">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="row count-down-row">
                    <div class="col-md-12">
                        <h2>{{ trans('string.index_d_2') }}</h2>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-box">
                            {{-- <div class="type-icon drop"></div> --}}
                            <div class="flex-column">
                                <div class="number" id="count-year">
                                    0
                                </div>
                                <div class="text">
                                    {{ trans('string.index_d_3') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-box">
                            {{-- <div class="type-icon box"></div> --}}
                            <div class="flex-column">
                                <div class="number" id="count-prod">
                                    0
                                </div>
                                <div class="text">
                                    {{ trans('string.index_d_4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-box">
                            {{-- <div class="type-icon mem"></div> --}}
                            <div class="flex-column">
                                <div class="number" id="count-mem">
                                    0
                                </div>
                                <div class="text">
                                    {{ trans('string.index_d_5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-box">
                            {{-- <div class="type-icon back"></div> --}}
                            <div class="flex-column">
                                <div class="number" id="count-return">
                                    0
                                </div>
                                <div class="text">
                                    {{ trans('string.index_d_6') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="container index-info about">
        <div class="row">
            <div class="col-md-11 mx-auto index-info-text-section">
                <h2>{{ trans('string.index_d_7') }}</h2>
                <hr>
                {!! trans('string.index_d_12') !!}
            </div>
            <div class="col-md-11 mx-auto">
                @php
                    $abouts = array(
                        [
                            'featureImage' => '/img/about-section-1.jpg',
                            'title' => trans('string.bioengineering_center'),
                            'link' => '/research/bioengineering',
                            'content' => trans('string.index_d_8')
                        ],
                        [
                            'featureImage' => '/img/csr/csr-3.jpg',
                            'title' => trans('string.innovation_rnd_center'),
                            'link' => '/research/innovation',
                            'content' => trans('string.index_d_9')
                        ],
                        [
                            'featureImage' => '/img/about-section-3.jpg',
                            'title' => App::getLocale() == 'en' ? 'Food Safety' : '食品安全​',
                            'link' => '/research/foodsafty',
                            'content' => trans('string.index_d_10')
                        ]
                    );
                @endphp
                <div class="row">
                    <div class="col-md-12 about-section-container">
                        @foreach ($abouts as $item)
                            <div style="padding: 10px">
                                <div class="about-section-item">
                                    <div class="section-item">
                                        <div class="featureImage" style="background-image: url('{{$item['featureImage']}}')"></div>
                                        <h3 class="{{App::getLocale() == 'en' ? 'smaller' : ''}}">{{$item['title']}}</h3>
                                        <div class="text">
                                            <div class="info-text">
                                                {{mb_substr($item['content'],0,100,"utf-8")}}...
                                            </div>
                                        </div>
                                        <div class="btn-section">
                                            <a href="{{$item['link']}}" class="learn-more-btn">{{ trans('string.learn_more') }}</a>
                                        </div>
                                        <a class="cover-link" href="{{$item['link']}}"></a>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    @php
        $albumPath = public_path('img/device');
        $licensePath = public_path('img/license');

        $devices = preg_grep('~\.(jpeg|jpg|png)$~', scandir($albumPath));
        $licenses = preg_grep('~\.(jpeg|jpg|png)$~', scandir($licensePath));
    @endphp
    <div class="device-album">
        @foreach ($devices as $item)
            <a data-fancybox="devices" href="/img/device/{{$item}}">
                <img width="100%" src="/img/device/{{$item}}" alt="">
            </a>
        @endforeach
    </div>

    <div class="container index-info about">
        <div class="row">
            <div class="col-md-12 mx-auto index-info-text-section">
                <h2>{{ trans('string.index_d_13') }}</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 30px;">
                        {!! trans('string.index_d_14') !!}
                    </div>
                    <div class="col-md-10 mx-auto">
                        <div class="row license-container">
                            @foreach ($licenses as $item)
                                <div>
                                    <img src="/img/license/{{$item}}" width="100%" alt="">
                                </div>
                            @endforeach
                        </div>    
                                        
                    </div>
                    <div class="col-md-10">
                        <div class="license-container mobile">
                            @foreach ($licenses as $item)
                                <img src="/img/license/{{$item}}" width="100%" alt="">
                            @endforeach
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <a data-fancybox class="fancybox-btn" href="https://www.youtube.com/watch?v=KAFJLVrKwJQ">
        <div class="vdieo-present-section">
            <div class="info">
                <h2>VIDEO</h2>
                <h4>{{ trans('string.index_d_15') }}</h4>
                <img class="play-btn" src="/img/site-logo/play-icon.png" alt="">
            </div>
        </div>
    </a>
    
@endsection
