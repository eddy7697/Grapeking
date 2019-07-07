@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/certification/banner.jpg');
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
                                <li>{{ trans('string.recruiting') }}</li>
                            </ul>
                            <h2>{{ trans('string.recruiting') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content" style="padding-top: 100px;">
                <h4 class="hilight-title">{{ trans('string.career_d_1') }}</h4>
                <div class="hilight-info-box">
                    <div class="info-divider"></div>
                    <div class="info-text">
                        <p>{{ trans('string.career_d_2') }}</p>
                        <p>{{ trans('string.career_d_3') }}</p>
                    </div>
                </div>
                <img class="about-image" src="/img/careers-picture_1.jpg" alt="">
                <h4 class="hilight-title">{{ trans('string.career_d_4') }}</h4>
                <ul class="careers-notice">
                    <li>{{ trans('string.career_d_5') }}</li>
                    <li>{{ trans('string.career_d_6') }}</li>
                    <li>{{ trans('string.career_d_7') }}</li>
                    <li>{{ trans('string.career_d_8') }}</li>
                    <li>{{ trans('string.career_d_9') }}</li>
                    <li>{{ trans('string.career_d_10') }}</li>
                    <li>{{ trans('string.career_d_11') }}</li>
                    <li>{{ trans('string.career_d_12') }}</li>
                </ul>
                <h4 class="hilight-title">{{ trans('string.career_d_13') }}</h4>
                <p class="careers-tip">{{ trans('string.career_d_14') }}</p>
                <img class="about-image" src="/img/careers-picture_2.png" alt="">
            </div>
            <div class="col-md-3 about-content">
                <img class="about-image" src="/img/hori-logo.png" style="width: 80%; margin-top: 100px; margin-bottom: 20px;" alt="">
                <hr>
                <ul class="side-info">
                    <li>{{ trans('string.contact_inf_1') }}</li>
                    <li>{{ trans('string.contact_inf_2') }}</li>
                    <li>{{ trans('string.contact_inf_3') }}</li>
                    <li>{{ trans('string.contact_inf_4') }}</li>
                </ul>
                <hr>
                <div class="row">
                    <div class="col-3 mobile-to-left">
                        <img src="/img/phone-icon.png" width="90%" style="margin-top: 13px;" alt="">
                    </div>
                    <div class="col-9">
                        <p style="font-size: 24px; margin-bottom: 5px;">{{ trans('string.contact_inf_5') }}</p>
                        <p style="font-size: 24px; margin-bottom: 5px; color: #E70034">{{ trans('string.contact_inf_6') }}</p>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
