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

@endsection

@section('custom-style')
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('https://grapeking.shuo-guo.net/img/csr/csr-5.jpg');
}
</style>
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        报告书下载
                    <br>
                    <span style="font-size: 16px;">CSR Report</span>
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
                            <li>{{ trans('string.responsibility') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.download_paper') }}</li>
                        </ul>
                        <h2>{{ trans('string.download_paper') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-{{config('app.sideBar') ? 9 : 12}} about-content">
            <h3 class="about-section-title" id="section_1">{{ trans('string.download_paper') }}</h3>
            {{-- {{json_encode(FeatureView::download())}} --}}
            <div class="row">
                @foreach (FeatureView::download() as $item)
                    <div class="col-md-4 report-item force-center">
                        <div>
                            <a href="{{$item->customField1}}">
                                <div class="report-preview">
                                    <img class="preview-image" src="{{$item->customField2}}" alt="">
                                    <div class="report-mask force-center">
                                        <div style="text-align:center;">
                                            <span style="font-weight:700; color: #fff; text-shadow: 2px 2px 12px rgba(0,0,0,.9); text-align: center">{{$item->locale}}</span>
                                            <br>
                                            <br>
                                            <img src="https://grapeking.shuo-guo.net/img/download-btn.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="report-title force-center">
                                <span style="font-weight:700">{{$item->locale}}</span>
                            </div>
                        </div>
                        
                    </div>
                    {{-- {{base64_encode($item->customField1)}}<br> --}}
                @endforeach
                @foreach (FeatureView::download() as $item)
                    <div class="col-md-4 report-item force-center">
                        <div>
                            <a href="{{$item->customField1}}">
                                <div class="report-preview">
                                    <img class="preview-image" src="{{$item->customField2}}" alt="">
                                    <div class="report-mask force-center">
                                        <div style="text-align:center;">
                                            <span style="font-weight:700; color: #fff; text-shadow: 2px 2px 12px rgba(0,0,0,.9); text-align: center">{{$item->locale}}</span>
                                            <br>
                                            <br>
                                            <img src="https://grapeking.shuo-guo.net/img/download-btn.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="report-title force-center">
                                <span style="font-weight:700">{{$item->locale}}</span>
                            </div>
                        </div>
                        
                    </div>
                    {{-- {{base64_encode($item->customField1)}}<br> --}}
                @endforeach
                <div class="col-md-12 pagination-section">
                    @php
                        $page = json_decode(json_encode(FeatureView::download()));
                        $breakPoint = 1;
        
                        function pageNumVisible($item, $current_page, $breakPoint) {	
                            if ($item > $current_page + ($breakPoint - 1)) {
                                return false;
                            }
                            if ($item + ($breakPoint + 1) < $current_page) {
                                return false;
                            }
                            return true;
                        }
                    @endphp
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            @if ($page->prev_page_url)
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->first_page_url}}" tabindex="-1">&#xAB;</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->prev_page_url}}" tabindex="-1">&#8249;</a>
                                </li>
                            @endif
                            @if ($breakPoint + 1 < $page->current_page)
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->path.'?page='.($page->current_page - $breakPoint - 1)}}">...</a>
                                </li>
                            @endif
                            @for ($i = 0; $i < $page->last_page; $i++)                        
                                @if (pageNumVisible($i, $page->current_page, $breakPoint))
                                    <li class="page-item {{$i + 1 == $page->current_page ? 'active' : ''}}">
                                        <a class="page-link" href="{{$page->path.'?page='.($i + 1)}}">{{$i + 1}}</a>
                                    </li>
                                @endif                        
                            @endfor
                            @if ($page->last_page > $page->current_page + $breakPoint)
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->path.'?page='.($page->current_page + $breakPoint + 1)}}">...</a>
                                </li>
                            @endif
                            @if ($page->next_page_url)
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->next_page_url}}">&#8250;</a>
                                </li>    
                                <li class="page-item">
                                    <a class="page-link" href="{{$page->last_page_url}}" tabindex="-1">&#xBB;</a>
                                </li>
                            @endif
                            
                        </ul>
                    </nav>
                </div>
            </div>
            
        </div>
        
        {{-- side thumd --}}
        @if (config('app.sideBar'))
        <div class="col-md-3 about-thumbnail">
            @include('components.csrThumbnail')
        </div>   
        @endif
        
    </div>
</div>
@endsection
