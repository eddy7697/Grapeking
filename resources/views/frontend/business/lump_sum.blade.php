@extends('main')

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

    var play = setInterval(function() {
        autoPlay();
    }, timeOunt);

    function tabShow(label) {
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
        count = $('.nav-link').index($(event.currentTarget));
        startProgress();
        play = setInterval(function() {
                autoPlay();
            }, timeOunt);
        $('.info-content').addClass('fadeInRight animated');
    });
    $('.nav-link').on('hide.bs.tab', function(event){
        restoreProgress();
        clearInterval(play)
        $('.info-content').removeClass('fadeInRight animated');
    });
</script>
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/business/banner-2.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(22)!!}
</style>
@else
<style>
    {!!PageView::css(21)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                            整合服务
                        <br>
                        <span style="font-size: 16px;">Tunnel Service</span>
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
            <div class="col-md-12 about-content" style="margin: 0">
                <h3 class="about-section-title" id="section_1">一條龍代工服務平台</h3>            
            </div>
        </div>
    </div>

    <div class="production-tabs" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <div class="tab-content tunnel">
            <div class="tab-pane odm_oem container-fluid active" id="home">
                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_1') }}</h3>
                            <p>{{ trans('text.tunnel_1_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="progress-bar odm_oem">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane research fade container-fluid" id="menu1">
                <div class="row">
                    <div class="col-md-7">
                        
                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_2') }}</h3>
                            <p>{{ trans('text.tunnel_2_text') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="progress-bar research">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane formula fade container-fluid" id="menu2">
                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_3') }}</h3>
                            <p>{{ trans('text.tunnel_3_text') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="progress-bar formula">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane package fade container-fluid" id="menu3">
                <div class="row">
                    <div class="col-md-7 ">

                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_4') }}</h3>
                            <p>{{ trans('text.tunnel_4_text') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="progress-bar package">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane production fade container-fluid" id="menu4">
                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_5') }}</h3>
                            <p>{{ trans('text.tunnel_5_text') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="progress-bar production">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="tab-pane deliver fade container-fluid" id="menu5">
                <div class="row">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5 info">
                        <div class="info-content">
                            <h3>{{ trans('text.tunnel_6') }}</h3>
                            <p>{{ trans('text.tunnel_6_text') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="progress-bar deliver">
                    <div class="percentage"></div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs tunnel">
            <li class="nav-item">
                <a class="nav-link active odm_oem" data-toggle="tab" href="#home">ODM/OEM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link research" data-toggle="tab" href="#menu1">專業研發</a>
            </li>
            <li class="nav-item">
                <a class="nav-link formula" data-toggle="tab" href="#menu2">配方設計</a>
            </li>
            <li class="nav-item">
                <a class="nav-link package" data-toggle="tab" href="#menu3">包裝設計</a>
            </li>
            <li class="nav-item">
                <a class="nav-link production" data-toggle="tab" href="#menu4">生產製造</a>
            </li>
            <li class="nav-item">
                <a class="nav-link deliver" data-toggle="tab" href="#menu5">物流配送</a>
            </li>
        </ul>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-content">
                @if (App::getLocale() == 'en')
                {!!PageView::show(22)!!}
                @else
                {!!PageView::show(21)!!}
                @endif

            </div>
            
        </div>
    </div>
@endsection
