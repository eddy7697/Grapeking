@extends('main')

@section('custom-script')
<script>
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


$('.lines-album').slick({
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

                <h3 class="about-section-title">{{ trans('string.production') }}</h3>
                <div class="about-text">
                    <p>{{ trans('string.business_10') }}</p>                 
                </div>
                <img class="about-image" src="/img/business/factory-1.jpg" alt="">

                <h3 class="about-section-title">{{ trans('string.production') }}</h3>
                <div class="mobile-to-show material-list" style="overflow-x: hidden;">
                    <div class="production_material">
                        <div class="prod_box" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-1.png" alt="">
                                <p>{{ trans('string.business_1') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-2.png" alt="">
                                <p>{{ trans('string.business_2') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-3.png" alt="">
                                <p>{{ trans('string.business_3') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-4.png" alt="">
                                <p>{{ trans('string.business_4') }}</p>
                            </div>                                
                        </div>                            
                    </div>
                    <div class="production_material">
                        <div class="prod_box" style="width: 50%; padding-bottom: 50%; margin: 0 auto 30px auto">
                            <div class="prod_box_inner">
                                <img style="display: inline-block;" src="/img/business/factory-icon-5.png" alt="">
                                <p>{{ trans('string.business_5') }}</p>
                            </div>
                        </div>                            
                    </div>
                </div>
                <div class="about-text mobile-to-hide">
                    <div class="row">
                        <div class="col-md-2 mx-auto production_material">
                            <div class="prod_box">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-1.png" alt="">
                                    <p>{{ trans('string.business_1') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material">
                            <div class="prod_box">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-2.png" alt="">
                                    <p>{{ trans('string.business_2') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material">
                            <div class="prod_box">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-3.png" alt="">
                                    <p>{{ trans('string.business_3') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material">
                            <div class="prod_box">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-4.png" alt="">
                                    <p>{{ trans('string.business_4') }}</p>
                                </div>                                
                            </div>                            
                        </div>
                        <div class="col-md-2 mx-auto production_material">
                            <div class="prod_box">
                                <div class="prod_box_inner">
                                    <img src="/img/business/factory-icon-5.png" alt="">
                                    <p>{{ trans('string.business_5') }}</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>

                <h4 style="margin: 70px 0 40px; text-align: center">{{ trans('string.business_6') }}</h4>

                <div class="about-text">
                    <ul class="nav nav-tabs about-location-tab center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span>{{ trans('string.business_7') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>{{ trans('string.business_8') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span>{{ trans('string.business_9') }}</span></a>
                        </li>
                    </ul>
                    @php
                        $linePath = public_path('img/business/line');
                        $specPath = public_path('img/business/spec');
                        $resultPath = public_path('img/business/result');

                        $lines = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($linePath));
                        $specs = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($specPath));
                        $results = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($resultPath));
                    @endphp
                    <div class="tab-content" id="location-tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mobile-to-hide" style="margin: 50px 0;">
                                @foreach ($lines as $item)
                                    <div class="col-md-4" style="margin-bottom: 20px;">
                                        <a data-fancybox="lines" href="/img/business/line/{{$item}}">
                                            <img width="100%" src="/img/business/line/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>  
                            <div class="mobile-to-show lines-album style="overflow-x: hidden;"">
                                @foreach ($lines as $item)
                                    <a data-fancybox="lines" href="/img/business/line/{{$item}}">
                                        <img width="100%" src="/img/business/line/{{$item}}" alt="">
                                    </a>                                  
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row" style="margin: 50px 0;">
                                @foreach ($specs as $item)
                                    <div class="col-md-4" style="margin-bottom: 20px;">
                                        <a data-fancybox="specs" href="/img/business/spec/{{$item}}">
                                            <img width="100%" src="/img/business/spec/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>    
                            <div class="mobile-to-show specs-album" style="overflow-x: hidden;">
                                @foreach ($specs as $item)
                                    <a data-fancybox="specs" href="/img/business/spec/{{$item}}">
                                        <img width="100%" src="/img/business/spec/{{$item}}" alt="">
                                    </a>                                  
                                @endforeach
                            </div>                          
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row" style="margin: 50px 0;">
                                @foreach ($results as $item)
                                    <div class="col-md-4" style="margin-bottom: 20px;">
                                        <a data-fancybox="results" href="/img/business/result/{{$item}}">
                                            <img width="100%" src="/img/business/result/{{$item}}" alt="">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>  
                            <div class="mobile-to-show results-album" style="overflow-x: hidden;">
                                @foreach ($results as $item)
                                    <a data-fancybox="results" href="/img/business/result/{{$item}}">
                                        <img width="100%" src="/img/business/result/{{$item}}" alt="">
                                    </a>                                  
                                @endforeach
                            </div>
                        </div>
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
