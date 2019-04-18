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
            var countUpYear = new CountUp('count-year', 1994, {
                useGrouping: false
            });
            var countUpProd = new CountUp('count-prod', 100);
            var countUpMem = new CountUp('count-mem', 93);
            var countUpReturn = new CountUp('count-return', 2006);

            $(window).scroll(function(){
                if ($(window).scrollTop() > $('.swiper-wrapper').height() + $('.about-pro').height() - 200) {
                    countUpYear.start();
                    countUpProd.start();
                    countUpMem.start();
                    countUpReturn.start();
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
                $album = array([
                    'url' => '/img/banner-2.jpg',
                    'title' => 'test',
                    'content' => 'test'
                ]);
            @endphp
            @foreach ($album as $item)
                <div class="swiper-slide" style="background-image: url('{{$item['url']}}')">
                    <div class="slide-item">                        
                        <div class="flex-column" data-aos="fade-right" data-aos-easing="ease-out" data-aos-duration="1500">
                            <div style="text-align: left">
                                <img src="/img/banner-text-1.png" alt="">
                            </div>
                            <div style="text-align: left">
                                <img src="/img/banner-text-2.png" alt="">
                            </div>
                        </div>
                        <div class="type-icon mem" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="1500">
                            <img src="/img/banner-logo-1.png" style="max-width: 300px;" alt="">
                        </div>
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
                    <p>Food safety center</p>
                </div>
                <a href=""></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item bioengineering">
                <div class="border-bar"></div>                
                <div class="factory-item-info">
                    <p>生物工程中心</p>
                    <p>Bioengineering Center</p>
                </div>
                <a href=""></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item innovation">
                <div class="border-bar"></div>
                <div class="factory-item-info">
                    <p>创新研发中心</p>
                    <p>Innovation R&D Center</p>
                </div>                
                <a href=""></a>
            </div>
            <div class="col-sm-6 col-md-3 factory-item factory">                
                <div class="border-bar"></div>
                <div class="factory-item-info">
                    <p>世界级工厂</p>
                    <p>World class factory</p>
                </div>
                <a href=""></a>
            </div>
        </div>
    </div>

    <div class="container index-info about-pro">
        <div class="row">
            <div class="col-md-12 index-info-text-section">
                <h2>我们提供的专业服务</h2>
                <hr>
                <p>上海葡萄王企业有限公司，位于交通便利的上海市松江工业区，距离市区30公里，</p>
                <p>附近尚有沪杭高速道路及嘉金高速道路，优越的地理位置为中国及全世界的客户提供了便捷服务。</p>
            </div>
            <div class="col-md-11 mx-auto cate-type">
                <div class="row">
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-1.jpg')">
                            <div class="text">
                                <p>口服液</p>
                                <p>(玻璃瓶装)</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-2.jpg')">
                            <div class="text">
                                <p>片剂/锭剂</p>
                                <p>(瓶装)</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-3.jpg')">
                            <div class="text">
                                <p>粉剂</p>
                                <p>(颗粒)</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-4.jpg')">
                            <div class="text">
                                <p>咖啡胶囊</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                    <div class="cate-type-item">
                        <div class="info" style="background-image: url('/img/about-5.jpg')">
                            <div class="text">
                                <p>铝箔包</p>
                            </div>
                        </div>
                        <a href=""></a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 btn-section">
                <a href="" class="learn-more-btn">了解更多</a>
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
                        <h2>您最紧密的合作伙伴</h2>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-box">
                            {{-- <div class="type-icon drop"></div> --}}
                            <div class="flex-column">
                                <div class="number" id="count-year">
                                    0
                                </div>
                                <div class="text">
                                    成立于上海市松江区
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
                                    全场员工人数超过
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
                                    累积获奖肯定
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
                                    取得SFDA食品卫生许可证
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
                <h2>我们的专业研发</h2>
                <hr>
                <p>上海葡萄王除在生产制造的OEM与ODM中取得耀眼成绩之外，</p>
                <p>在专业研发上更设有食安中心、生物工程中心、创新研发中心联手提供专业研发。</p>
            </div>
            <div class="col-md-11 mx-auto">
                @php
                    $abouts = array(
                        [
                            'featureImage' => '/img/about-section-1.jpg',
                            'title' => '生物工程中心',
                            'content' => '生物中心成立于1991年台湾桃园，兼具创新素材研发及生产功能，研发方面主要为自有素材(关键零组件)之开发及应用，故积极与学术界及研究机构合作，进行素材研发、功能验证及制程改良，
以建立公司核心技术。另申请并执行经济部技术处及工业局之生技相关科专计划达九件，国科会、农委会与教育部之产学计划约20件，目前已拥有美国一件、中国六件
及台湾三十五件关于樟芝、香杉芝、乳酸菌、抗生素、猴头菇、紫丁香蘑、蝉花之专利权。'
                        ],
                        [
                            'featureImage' => '/img/about-section-2.jpg',
                            'title' => '创新研发中心',
                            'content' => '龙潭生物科技研究所於2018年底新成立，结合原有生物中心近30年的研发经验，兼具创新素材研发及生产功能，研发方面主要为自有素材(关键零组件)之开发及应用，
积极与国内学术界及研究机构合作，进行素材研发丶功能验证及制程改良，以建立公司核心技术。
另申请并执行经济部技术处及工业局之生技相关科专计画达九件，国科会丶农委会与教育部之产学计画约40件，目前已拥有美国丶中国丶日本丶加拿大及台湾
关於樟芝丶香杉芝丶乳酸菌丶抗生素丶猴头菇丶紫丁香蘑及蝉花共 55 件专利权。'
                        ],
                        [
                            'featureImage' => '/img/about-section-3.jpg',
                            'title' => '食安中心',
                            'content' => '葡萄王设有符合国际标准『ISO/IEC 17025 TAF认证实验室』，为公司产品提供最严密的把关。目前自主检验包括：一般物性、化性与食安因子相关检测项目，
检测方式除经TAF(财团法人全国认证基金会)之要求外，并参照台湾行政院卫生福利部与经济部标准检验局订定之方法或国际间认可之检验方法(如AOAC)等。'
                        ]
                    );
                @endphp
                <div class="row">
                    @foreach ($abouts as $item)
                        <div class="col-md-4 about-section-item">
                            <div class="section-item">
                                <div class="featureImage" style="background-image: url('{{$item['featureImage']}}')"></div>
                                <h3>{{$item['title']}}</h3>
                                <div class="text">
                                    {{mb_substr($item['content'],0,100,"utf-8")}}...
                                </div>
                                <div class="btn-section">
                                    <a href="" class="learn-more-btn">了解更多</a>
                                </div>
                                <a class="cover-link" href=""></a>
                            </div>
                            
                        </div>
                    @endforeach
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
                <h2>我们的安全品质</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 30px;">
                        <p>葡萄王生技拥有独立的保健食品及药品生产线，所有产线均以安全与质量兼顾为主要考虑。</p>
                        <p>对于药品的要求葡萄王生技一路秉持着cGMP 制药品管的精神，于整个生产流程中随时监控维持，</p>
                        <p>层层把关，确保药品质量的安全性及有效性，葡萄王更于2014年获得国际制药最高标准PIC/S GMP 认证，</p>
                        <p>对质量如此的坚持，即是期望能供给顾客高质量的产品。</p>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            @foreach ($licenses as $item)
                                <div class="col-md-2">
                                    <img src="/img/license/{{$item}}" width="100%" alt="">
                                </div>
                            @endforeach
                        </div>                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <a data-fancybox class="fancybox-btn" href="https://www.youtube.com/watch?v=6LNIFuG204s">
        <div class="vdieo-present-section">
            <div class="info">
                <h2>VIDEO</h2>
                <h4>葡萄王生技股份有限公司介紹影片</h4>
                <img class="play-btn" src="/img/site-logo/play-icon.png" alt="">
            </div>
        </div>
    </a>
    
@endsection