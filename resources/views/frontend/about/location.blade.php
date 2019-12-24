@extends('main')

@section('custom-script')
<script>
$('[data-target]').on('click', function () {
    var target = $(this).attr('data-target');

    $('a[aria-controls=' + target + ']').tab('show');
});
$('.nav-link').on('shown.bs.tab', function(event){
    var target = $($(event.target).attr('href')).find('iframe');
    
    if (!target.attr('src')) {
        target.attr('src', target.attr('data-link') + '?' + Math.floor(Math.random() * 10000));    
    }
});
</script>
{{-- <script src="/js/plugins/perfect-scrollbar-master/dist/perfect-scrollbar.min.js"></script>
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
</script> --}}

@endsection

@section('custom-style')
{{-- <link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css"> --}}
<style>
.sub-page-banner {
    background-image: url('/img/about/global/banner.jpg');
    background-position: 80% center;
}
</style>
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                            全球布局
                        <br>
                        <span style="font-size: 16px;">Location</span>
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
                                <li>{{ trans('string.about') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.about_4') }}</li>
                            </ul>
                            <h2>{{ trans('string.about_4') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="global-loaction" data-aos="fade-in">
        <div class="flat-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 about-content">
                        <h3 class="about-section-title" id="about_3" style="margin-top: 0">{{ trans('string.about32') }}</h3>
                        <div class="about-text">
                            {!! trans('string.about33') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map">
            <div class="img-container">
                <img src="/img/map/1.png" alt="" data-aos="fade-in">
                <img src="/img/map/{{App::getLocale()}}/m8.png" alt="" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m9.png" alt="" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m7.png" alt="" data-aos="fade-right" data-aos-delay="1100" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m5.png" alt="" data-aos="fade-left" data-aos-delay="1400" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m4.png" alt="" data-aos="fade-left" data-aos-delay="1700" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m3.png" alt="" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m2.png" alt="" data-aos="fade-left" data-aos-delay="2300" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m1.png" alt="" data-aos="fade-left" data-aos-delay="2700" data-aos-duration="1000">
                <img src="/img/map/{{App::getLocale()}}/m6.png" alt="" data-aos="fade-right" data-aos-delay="3000" data-aos-duration="1000">
                <img src="/img/map/2.png" alt="" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
            </div>
        </div>
        
    </div>
    <div class="location-gallary" style="margin-top: -50px">
        @php
            $albumPath = public_path('img/about/global/album/thumb');

            $devices = preg_grep('~\.(jpeg|jpg|png)$~', scandir($albumPath));
        @endphp
        @if (true)
            <div class="device-album" style="margin: 50px 0;">
                @foreach ($devices as $item)
                    <a data-fancybox="devices" href="/img/about/global/album/{{$item}}">
                        <img width="100%" src="/img/about/global/album/thumb/{{$item}}" alt="">
                    </a>
                @endforeach
            </div>    
        @endif
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 mx-auto about-content">
                
                
                <div class="about-text">
                    <ul class="nav nav-tabs about-location-tab mobile-to-hide" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a style="border: none" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span>{{ trans('string.company_tw') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="border: none" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>{{ trans('string.about5') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="border: none" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span>{{ trans('string.about7') }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="border: none" class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false"><span>{{ trans('string.about9') }}</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="location-tab-content">
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="prev-arrow" data-target="location">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next-arrow" data-target="profile">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" style="margin-bottom: 10px; max-width: 200px;" src="/img/about/grapeking.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;" class="location-contact-info">
                                                {!! trans('string.contact_1') !!}
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="mobile-to-hide">
                                        <p>{{ trans('string.production_d_12') }}</p>
                                        <p class="mobile-to-hide">&nbsp;</p>
                                        <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                        <p class="mobile-to-show">&nbsp;</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_tw">
                                        <iframe src="/grapeking_tw" data-link="/grapeking_tw" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-12 mobile-to-show mobile-to-center" style="margin-top: 35px; margin-bottom: -20px">
                                    <p>{{ trans('string.production_d_12') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="prev-arrow" data-target="home">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next-arrow" data-target="contact">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" style="margin-bottom: 10px; max-width: 200px;" src="/img/about/site-logo.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;" class="location-contact-info">
                                                {!! trans('string.contact_2') !!}
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="mobile-to-hide">
                                        <p>{{ trans('string.production_d_12') }}</p>
                                        <p class="mobile-to-hide">&nbsp;</p>
                                        <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                        <p class="mobile-to-show">&nbsp;</p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;">
                                        <iframe data-link="/grapeking_sh" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>

                                <div class="col-md-12 mobile-to-show mobile-to-center" style="margin-top: 35px; margin-bottom: -20px">
                                    <p>{{ trans('string.production_d_12') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="prev-arrow" data-target="profile">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next-arrow" data-target="location">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" style="margin-bottom: 10px; max-width: 200px;" src="/img/about/dong-pu.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;" class="location-contact-info">
                                                {!! trans('string.contact_3') !!}
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="mobile-to-hide">
                                        <p>{{ trans('string.production_d_12') }}</p>
                                        <p class="mobile-to-hide">&nbsp;</p>
                                        <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                        <p class="mobile-to-show">&nbsp;</p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_dongpu">
                                        <iframe data-link="/grapeking_donpu" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-12 mobile-to-show mobile-to-center" style="margin-top: 35px; margin-bottom: -20px">
                                    <p>{{ trans('string.production_d_12') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                            <div class="prev-arrow" data-target="contact">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next-arrow" data-target="home">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" style="margin-bottom: 10px; max-width: 200px;" src="/img/about/pu-zun.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;" class="location-contact-info">
                                                {!! trans('string.contact_4') !!}
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="mobile-to-hide">
                                        <p>{{ trans('string.production_d_12') }}</p>
                                        <p class="mobile-to-hide">&nbsp;</p>
                                        <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                        <p class="mobile-to-show">&nbsp;</p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_fam">
                                        <iframe data-link="/grapeking_fm" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-12 mobile-to-show mobile-to-center" style="margin-top: 35px; margin-bottom: -20px">
                                    <p>{{ trans('string.production_d_12') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div> --}}
        </div>
    </div>
    
    
@endsection
