@extends('main')

@section('custom-script')
@if (config('app.sideBar'))
<script src="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
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
@endif

<script>
var cards = $('.material-card');
var finalHeight = 0;

for (let i = 0; i < cards.length; i++) {
    if ($(cards[i]).height() > finalHeight) {
        finalHeight = $(cards[i]).height();
    }
}
$('.material-card').height(finalHeight);
</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/business/banner-3.jpg');
}
</style>
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                            产品型录
                        <br>
                        <span style="font-size: 16px;">Product Catalog</span>
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
                                <li>{{ trans('string.catalog') }}</li>
                            </ul>
                            <h2>{{ trans('string.catalog') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-{{config('app.sideBar') ? 9 : 12}} about-content">
                <h3 class="about-section-title" id="section_1">{{ trans('string.p_slogan') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.catalog_d_1') }}
                    </p>                    
                </div>
                <img class="about-image" src="https://grapeking.shuo-guo.net/img/business/product-1.jpg" alt="">


                <h3 class="about-section-title" id="section_2">{{ trans('string.raw_material_introduction') }}</h3>
                <div class="material-card first" style="background-color: #ABCD03">
                    <img class="material-img" src="https://grapeking.shuo-guo.net/img/business/product-btn-1.png" alt="">                    
                    <h4>
                        <span style="border-bottom: #FFF 2px solid">{{ trans('string.catalog_d_2') }}</span>
                    </h4>
                    <p class="material-info" style="margin-top: 40px;">
                        <p>{{ trans('string.business_1') }}</p>
                        <p>{{ trans('string.business_3') }}</p>
                        <p>{{ trans('string.business_2') }}</p>
                        <p>{{ trans('string.business_5') }}</p>
                    </p>
                </div>
                <div class="material-card" style="background-color: #F39800">
                    <img class="material-img" src="https://grapeking.shuo-guo.net/img/business/product-btn-2.png" alt="">                    
                    <h4>
                        <span style="border-bottom: #FFF 2px solid">{{ trans('string.catalog_d_3') }}</span>
                    </h4>
                    <p class="material-info" style="margin-top: 40px;">
                        <p>{{ trans('string.business_3') }}</p>
                        <p>{{ trans('string.business_2') }}</p>
                    </p>
                </div>
                <div class="material-card last" style="background-color: #38A1DB">
                    <img class="material-img" src="https://grapeking.shuo-guo.net/img/business/product-btn-3.png" alt="">                    
                    <h4>
                        <span style="border-bottom: #FFF 2px solid">{{ trans('string.catalog_d_4') }}</span>
                    </h4>
                    <p class="material-info" style="margin-top: 40px;">
                        <p>{{ trans('string.business_3') }}</p>
                        <p>{{ trans('string.business_2') }}</p>
                    </p>
                </div>
                <div class="clearfix"></div>

                <div class="row spec-section">
                    <div class="col-md-4 title">
                        <h4>{{ trans('string.catalog_d_5') }}</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6" style="padding: 10px; padding-left: 20px;">
                                <p>{{ trans('string.catalog_d_6') }}</p>
                                <p>{{ trans('string.catalog_d_8') }}</p>
                                <p>{{ trans('string.catalog_d_10') }}</p>
                            </div>
                            <div class="col-md-6" style="padding: 10px; padding-left: 20px;">
                                <p>{{ trans('string.catalog_d_7') }}</p>
                                <p>{{ trans('string.catalog_d_9') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="about-section-title" id="section_3">{{ trans('string.product_item') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.catalog_d_11') }}
                    </p>     
                    <p>
                        {{ trans('string.catalog_d_12') }}
                    </p>                  
                </div>
                <img class="about-image" src="https://grapeking.shuo-guo.net/img/business/product-2.jpg" alt="">


                <div class="about-text">
                    <ul class="nav nav-tabs about-location-tab center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span>{{ trans('string.catalog_d_13') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>{{ trans('string.catalog_d_14') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span>{{ trans('string.catalog_d_15') }}</span></a>
                        </li>
                    </ul>
                    @php
                        $linePath = public_path('img/business/license');
                        $specPath = public_path('img/business/quality');
                        $resultPath = public_path('img/business/International');

                        $lines = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($linePath));
                        $specs = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($specPath));
                        $results = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($resultPath));
                    @endphp
                    <div class="tab-content" id="location-tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row" style="margin: 50px 0;">
                                @foreach ($lines as $item)
                                    <div class="col-md-3 license-img-item" style="margin-bottom: 20px;">
                                        <a data-fancybox="lines" href="https://grapeking.shuo-guo.net/img/business/license/{{$item}}">
                                            <img width="100%" src="https://grapeking.shuo-guo.net/img/business/license/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>  
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row" style="margin: 50px 0;">
                                @foreach ($specs as $item)
                                    <div class="col-md-3 license-img-item" style="margin-bottom: 20px;">
                                        <a data-fancybox="specs" href="https://grapeking.shuo-guo.net/img/business/quality/{{$item}}">
                                            <img width="100%" src="https://grapeking.shuo-guo.net/img/business/quality/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>                              
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row" style="margin: 50px 0;">
                                @foreach ($results as $item)
                                    <div class="col-md-3 license-img-item" style="margin-bottom: 20px;">
                                        <a data-fancybox="results" href="https://grapeking.shuo-guo.net/img/business/International/{{$item}}">
                                            <img width="100%" src="https://grapeking.shuo-guo.net/img/business/International/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>  
                        </div>
                    </div>
                </div>

                <div class="about-text" style="text-align: center">
                    <p style="margin-top: 0px; font-weight: 700">{{ trans('string.catalog_d_16') }}</p>
                    <a class="location-contact-btn" style="margin-top: 20px;" href="/contact">{{ trans('string.catalog_d_17') }}</a>
                </div>

            </div>
            
            {{-- side thumd --}}
            @if (config('app.sideBar'))
            <div class="col-md-3 about-thumbnail">
                @include('components.businessThumbnail')
            </div>
            @endif
            
        </div>
    </div>
@endsection
