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

<script src="https://grapeking.shuo-guo.net/js/paper-list.js"></script>
<script src="https://grapeking.shuo-guo.net/js/patent-list.js"></script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/research/banner-3.jpg');
}
</style>
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        专利及文献发表
                    <br>
                    <span style="font-size: 16px;">Patent Literature</span>
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
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.patent_and_literature') }}</li>
                        </ul>
                        <h2>{{ trans('string.patent_and_literature') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-{{config('app.sideBar') ? 9 : 12}}">
            <ul class="nav nav-tabs about-tab" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="patent-list-tab" data-toggle="tab" href="#patent-list" role="tab" aria-controls="patent-list" aria-selected="true">
                        {{ trans('string.patent') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="paper-list-tab" data-toggle="tab" href="#paper-list" role="tab" aria-controls="paper-list" aria-selected="false">
                        {{ trans('string.literature_publication') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-{{config('app.sideBar') ? 9 : 12}} about-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="patent-list" role="tabpanel" aria-labelledby="patent-list-tab">
                    <h3 class="about-section-title" id="section_1">{{ trans('string.patent') }}</h3>
                    <document-list type="patent"></document-list>
                </div>
                <div class="tab-pane fade" id="paper-list" role="tabpanel" aria-labelledby="paper-list-tab">
                    <h3 class="about-section-title" id="section_2">{{ trans('string.literature_publication') }}</h3>
                    <document-list type="paper"></document-list>
                </div>
            </div>
        </div>
        @if (config('app.sideBar'))
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>     
        @endif
        
    </div>
</div>
@endsection
