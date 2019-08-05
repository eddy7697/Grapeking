@extends('main')

@section('custom-script')
<script>
$('.material-card-list').slick({
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
    background-image: url('/img/business/banner-2.jpg');
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
                                <li>{{ trans('string.lump_sum') }}</li>
                            </ul>
                            <h2>{{ trans('string.lump_sum') }}</h2>
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
                {!!PageView::show(22)!!}
                @else
                {!!PageView::show(21)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.professional') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.production_d_1') }}
                    </p>                    
                </div>
                <hr style="margin-top: 50px;">
                <h3 class="about-section-title" id="section_2">{{ trans('string.foundry') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                {{ trans('string.production_d_2') }}
                            </p>     
                        </div>
                        <div class="col-md-5 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/business/package-1.png" alt="">
                        </div>
                    </div>  
                    <div class="row" style="margin-top: 50px">
                        <div class="col-md-5" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/business/package-2.jpg" alt="">
                        </div>
                        <div class="col-md-7">
                            <p>
                                {{ trans('string.production_d_3') }}
                            </p>     
                        </div>
                        
                    </div>                    
                </div>
                <hr style="margin-top: 50px;">
                <div class="about-text">
                    <ul class="nav nav-tabs about-location-tab center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span>{{ trans('string.production_d_4') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>{{ trans('string.production_d_5') }}</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="location-tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>{{ trans('string.production_d_6') }}</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="about-image" src="/img/business/package-3.png" alt="{{ trans('string.production_d_6') }}">
                                </div>
                                <div class="col-md-6">
                                    <img class="about-image" src="/img/business/package-4.png" alt="{{ trans('string.production_d_6') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="text-align: center">
                                    <img style="margin-bottom: 10px;" class="about-image" src="/img/business/package-5-1.jpg" alt="{{ trans('string.production_d_7') }}">
                                    <p>{{ trans('string.production_d_7') }}</p>
                                </div>
                                <div class="col-md-3" style="text-align: center">
                                    <img style="margin-bottom: 10px;" class="about-image" src="/img/business/package-5-2.jpg" alt="{{ trans('string.production_d_8') }}">
                                    <p>{{ trans('string.production_d_8') }}</p>
                                </div>
                                <div class="col-md-3" style="text-align: center">
                                    <img style="margin-bottom: 10px;" class="about-image" src="/img/business/package-5-3.jpg" alt="{{ trans('string.production_d_9') }}">
                                    <p>{{ trans('string.production_d_9') }}</p>
                                </div>
                                <div class="col-md-3" style="text-align: center">
                                    <img style="margin-bottom: 10px;" class="about-image" src="/img/business/package-5-4.jpg" alt="{{ trans('string.production_d_10') }}">
                                    <p>{{ trans('string.production_d_10') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="text-align: center">
                            <p style="margin-bottom: 50px;">{{ trans('string.production_d_13') }}</p>
                            <div class="material-card mobile-to-hide first" style="background-color: #ABCD03">
                                <h4>{{ trans('text.material_1') }}</h4>
                                <img class="material-img" src="/img/research/bio-icon-1.png" alt="">                    
                                <p class="material-info">
                                    {{ trans('text.material_d_1') }}
                                </p>
                                <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/1.Mushroom.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="material-card mobile-to-hide" style="background-color: #F39800">
                                <h4>{{ trans('text.material_2') }}</h4>
                                <img class="material-img" src="/img/research/bio-icon-2.png" alt="">                    
                                <p class="material-info">
                                    {{ trans('text.material_d_2') }}
                                </p>
                                <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/2.Probiotic.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="material-card mobile-to-hide last" style="background-color: #38A1DB">
                                <h4>{{ trans('text.material_3') }}</h4>
                                <img class="material-img" src="/img/research/bio-icon-3.png" alt="">                    
                                <p class="material-info">
                                    {{ trans('text.material_d_3') }}
                                </p>
                                <a class="material-link" href="">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="mobile-to-show material-card-list" >
                                <div>
                                    <div class="material-card " style="background-color: #ABCD03">
                                        <h4>{{ trans('text.material_1') }}</h4>
                                        <img class="material-img" src="/img/research/bio-icon-1.png" alt="">                    
                                        <p class="material-info">
                                            {{ trans('text.material_d_1') }}
                                        </p>
                                        <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/1.Mushroom.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div>
                                    <div class="material-card" style="background-color: #F39800">
                                        <h4>{{ trans('text.material_2') }}</h4>
                                        <img class="material-img" src="/img/research/bio-icon-2.png" alt="">                    
                                        <p class="material-info">
                                            {{ trans('text.material_d_2') }}
                                        </p>
                                        <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/2.Probiotic.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div>
                                    <div class="material-card " style="background-color: #38A1DB">
                                        <h4>{{ trans('text.material_3') }}</h4>
                                        <img class="material-img" src="/img/research/bio-icon-3.png" alt="">                    
                                        <p class="material-info">
                                            {{ trans('text.material_d_3') }}
                                        </p>
                                        <a class="material-link" href="">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="about-text" style="margin-top: 50px;">
                                <div class="row">
                                    <div class="col-md-6" style="text-align: left">
                                        <h3 style="margin-bottom: 50px">{{ trans('string.production_d_14') }}</h3>
                                        <p>
                                            {{ trans('string.production_d_15') }}
                                        </p> 
                                        <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.production_d_16') }}</a>
                                    </div>
                                    <div class="col-md-6" style="text-align: left">
                                        <img class="about-image" style="margin: 0; width: 100%; display: inline-block" src="/img/business/package-7.jpg" alt="">
                                    </div>
                                    
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 50px;">
                <h3 class="about-section-title" id="section_3">{{ trans('string.foundry_flow') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.production_d_11') }}
                    </p>                    
                </div>
                <img class="about-image" src="/img/business/package-{{App::getLocale()}}.jpg" alt="">
                <hr style="margin-top: 50px;">

                <div class="about-text" style="text-align: center">
                    <p style="margin-top: 50px; font-weight: 700">{{ trans('string.production_d_12') }}</p>
                    <a class="location-contact-btn" style="margin-top: 20px;" href="/contact">{{ trans('string.catalog_d_17') }}</a>
                </div>
                 --}}


            </div>
            
            {{-- side thumd --}}
            <div class="col-md-3 about-thumbnail">
                @include('components.businessThumbnail')
            </div>
        </div>
    </div>
@endsection
