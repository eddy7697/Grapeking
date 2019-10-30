@extends('main')

@section('custom-script')
<script src="/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
<script>
new PerfectScrollbar('.thumb-container');

$(window).scroll(function () {
    var windowScrollTop = $(window).scrollTop();
    var headerHeight = $('#site-header-bar').height() + $('.sub-page-banner').height();
    var menuHeight = $('.site-header').height();
    var elmHeight = $(window).scrollTop() < $('.site-footer').offset().top - $(window).height() ? $(window).height() - $('.site-header').height() : $('.site-footer').offset().top - $(window).scrollTop() - $('.site-header').height()

    if (windowScrollTop > headerHeight - 140) {
        $('.thumb-container').css({
            'position': 'fixed',
            'top': (menuHeight - 32) + 'px',
            'left': $('.about-thumbnail').offset().left + 32,
            'height': elmHeight
        });
    } else {
        $('.thumb-container').css({
            'position': 'initial',
            'top': 'initial',
            'left': 'initial',
            'height': 'initial'
        });
    }
});
</script>
<script>
    var albumArr = [
        '.lines-album',
        '.specs-album',
        '.results-album',
        '.facts_-album',
        '.specs_-album',
        '.facts__-album',
        '.specs__-album',
        '.facts___-album',
        '.specs___-album',
        '.facts____-album',
        '.specs____-album'
    ];

    albumArr.forEach(elm => {
        
        $(elm).slick({
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
                        slidesToShow: 1,
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
            ]
        });
    });
$('.material-list').slick({
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
                slidesToShow: 1,
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
    ]
});


// function showPanel(target) {
//     console.log(arguments)
//     $(target).tab('show');
// }

$('.material_box').on('click', function (e) {
    $('.material_box').removeClass('active');
    $(this).addClass('active');
    $($(this).attr('data-material')).tab('show');
    // console.log($(this).attr('data-material')) 
});
</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
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
        <div class="row">
            <div class="col-md-9 about-content">
                @if (App::getLocale() == 'en')
                {!!PageView::show(20)!!}
                @else
                {!!PageView::show(19)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.production') }}</h3>
                <div class="about-text">
                    <p>{{ trans('string.business_10') }}</p>                 
                </div>
                <img class="about-image" src="/img/business/factory-1.jpg" alt=""> --}}

                <div class="mobile-to-show material-list" style="overflow-x: hidden;">
                    <div class="production_material">
                        <div class="prod_box material_box active" data-material="#material_1" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto" >
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-1.png" alt="">
                                <p>{{ trans('string.business_1') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box material_box" data-material="#material_2" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-2.png" alt="">
                                <p>{{ trans('string.business_2') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box material_box" data-material="#material_3" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-3.png" alt="">
                                <p>{{ trans('string.business_3') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box material_box" data-material="#material_4" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-4.png" alt="">
                                <p>{{ trans('string.business_4') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box material_box" data-material="#material_5" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-5.png" alt="">
                                <p>{{ trans('string.business_5') }}</p>
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="about-text mobile-to-hide">
                    <div class="row">
                        <div class="col-md-2 mx-auto production_material tabs">
                            <div class="prod_box material_box active" data-material="#material_1">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-1.png" alt="">
                                    <p>{!! trans('string.business_1') !!}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material tabs">
                            <div class="prod_box material_box" data-material="#material_2">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-2.png" alt="">
                                    <p>{{ trans('string.business_2') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material tabs">
                            <div class="prod_box material_box" data-material="#material_3">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-3.png" alt="">
                                    <p>{{ trans('string.business_3') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material tabs">
                            <div class="prod_box material_box" data-material="#material_4">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-4.png" alt="">
                                    <p>{{ trans('string.business_4') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material tabs">
                            <div class="prod_box material_box" data-material="#material_5">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-5.png" alt="">
                                    <p>{{ trans('string.business_5') }}</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="material-tab" role="tablist" style="display: none">
                    <li class="nav-item">
                    <a class="nav-link active" id="material_1" data-toggle="tab" href="#material_panel_1" role="tab" aria-controls="material_panel_1" aria-selected="true">material_panel_1</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="material_2" data-toggle="tab" href="#material_panel_2" role="tab" aria-controls="material_panel_2" aria-selected="false">material_panel_2</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="material_3" data-toggle="tab" href="#material_panel_3" role="tab" aria-controls="material_panel_3" aria-selected="false">material_panel_3</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="material_4" data-toggle="tab" href="#material_panel_4" role="tab" aria-controls="material_panel_4" aria-selected="false">material_panel_4</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="material_5" data-toggle="tab" href="#material_panel_5" role="tab" aria-controls="material_panel_5" aria-selected="false">material_panel_5</a>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="material_panel_1" role="tabpanel" aria-labelledby="material_1">
                        @include('components.material_1')
                    </div>
                    <div class="tab-pane fade" id="material_panel_2" role="tabpanel" aria-labelledby="material_2">
                        @include('components.material_2')
                    </div>
                    <div class="tab-pane fade" id="material_panel_3" role="tabpanel" aria-labelledby="material_3">
                        @include('components.material_3')
                    </div>
                    <div class="tab-pane fade" id="material_panel_4" role="tabpanel" aria-labelledby="material_4">
                        @include('components.material_4')
                    </div>
                    <div class="tab-pane fade" id="material_panel_5" role="tabpanel" aria-labelledby="material_5">
                        @include('components.material_5')
                    </div>
                </div>

                

            </div>
            
            {{-- side thumd --}}
            <div class="col-md-3 about-thumbnail">
                @include('components.businessThumbnail')
            </div>
        </div>
    </div>
@endsection
