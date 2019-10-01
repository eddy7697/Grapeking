@extends('main')

@section('custom-script')

@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/global/banner.jpg');
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
                                <li>{{ trans('string.about') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.about31') }}</li>
                            </ul>
                            <h2>{{ trans('string.about31') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content">
                <h3 class="about-section-title" id="about_1">{{ trans('string.about32') }}</h3>
                <div class="about-text">
                    {!! trans('string.about33') !!}
                </div>
                @php
                    $albumPath = public_path('img/about/global/album/thumb');

                    $devices = preg_grep('~\.(jpeg|jpg|png)$~', scandir($albumPath));
                @endphp
                @if (false)
                    <div class="device-album" style="margin: 50px 0;">
                        @foreach ($devices as $item)
                            <a data-fancybox="devices" href="/img/about/global/album/{{$item}}">
                                <img width="100%" src="/img/about/global/album/thumb/{{$item}}" alt="">
                            </a>
                        @endforeach
                    </div>    
                @endif
                
                <div class="about-text">
                    <ul class="nav nav-tabs about-location-tab" id="myTab" role="tablist">
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
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" src="/img/about/grapeking.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;">
                                                <li>{{ trans('string.contact_inf__1') }}</li>
                                                <li>{{ trans('string.contact_inf__2') }}</li>
                                                <li>{{ trans('string.contact_inf__3') }}</li>
                                                <li>{{ trans('string.contact_inf__4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <p>{{ trans('string.location_n_1') }}</p>
                                    <p>{{ trans('string.location_n_2') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_tw">
                                        <iframe src="/grapeking_tw" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" src="/img/about/site-logo.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;">
                                                <li>{{ trans('string.contact_inf_1') }}</li>
                                                <li>{{ trans('string.contact_inf_2') }}</li>
                                                <li>{{ trans('string.contact_inf_3') }}</li>
                                                <li>{{ trans('string.contact_inf_4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <p>{{ trans('string.location_n_1') }}</p>
                                    <p>{{ trans('string.location_n_2') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;">
                                        <iframe src="/grapeking_sh" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" src="/img/about/dong-pu.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;">
                                                <li>{{ trans('string.contact_inf___1') }}</li>
                                                <li>{{ trans('string.contact_inf___2') }}</li>
                                                <li>{{ trans('string.contact_inf___3') }}</li>
                                                <li>{{ trans('string.contact_inf___4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <p>{{ trans('string.location_n_1') }}</p>
                                    <p>{{ trans('string.location_n_2') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_dongpu">
                                        <iframe src="/grapeking_donpu" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                            <div class="row">
                                <div class="col-md-5 mobile-to-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="100%" src="/img/about/pu-zun.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <ul style="font-size: 13px;">
                                                <li>{{ trans('string.contact_inf____1') }}</li>
                                                <li>{{ trans('string.contact_inf____2') }}</li>
                                                <li>{{ trans('string.contact_inf____3') }}</li>
                                                <li>{{ trans('string.contact_inf____4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <p>{{ trans('string.location_n_1') }}</p>
                                    <p>{{ trans('string.location_n_2') }}</p>
                                    <p class="mobile-to-hide">&nbsp;</p>
                                    <a href="/contact" class="location-contact-btn" style="padding: 8px 100px; width: auto">{{ trans('string.about4') }}</a>
                                    <p class="mobile-to-show">&nbsp;</p>
                                </div>
                                <div class="col-md-7">
                                    <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent_fam">
                                        <iframe src="/grapeking_fm" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div>
        </div>
    </div>
    
    
@endsection
