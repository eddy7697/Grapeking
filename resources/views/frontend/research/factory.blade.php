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
@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('/img/research/banner-4.jpg');
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
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.world_class_factory') }}</li>
                        </ul>
                        <h2>{{ trans('string.world_class_factory') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="nav nav-tabs about-tab" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        {{ trans('string.laboratory_equipment') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        {{ trans('string.production_equipment') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 about-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="about-section-title" id="section_1">{{ trans('string.laboratory_equipment') }}</h3>
                    <div class="row">
                        @foreach (PageView::factoryAlbum()->lab as $item)
                            <div class="col-md-4" style="text-align: center">
                                <img width="100%" src="{{$item->url}}" alt="">
                                <p style="margin: 35px 0;">{{$item->label}}</p>
                            </div>
                        @endforeach
                        {{-- <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-1.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.laminar_flow') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-2.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.optical_microscope') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-3.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.spectrophotometer') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-4.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.pcr_machine') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-5.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.rotary_evaporator') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-6.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.lc_msms') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-7.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.hplc') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-8.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.shake_centrifuge') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-9.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.centrifuge') }}</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-10.jpg" alt="">
                            <p style="margin: 35px 0;">{{ trans('text.hpcpc') }}</p>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="about-section-title" id="section_2">{{ trans('string.production_equipment') }}</h3>
                    <div class="row">
                        @foreach (PageView::factoryAlbum()->production as $item)
                            <div class="col-md-4" style="text-align: center">
                                <img width="100%" src="{{$item->url}}" alt="">
                                <p style="margin: 35px 0;">{{$item->label}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
