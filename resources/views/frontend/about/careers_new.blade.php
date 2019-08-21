@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/about/careers.jpg');
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
    <div class="careers-container">
        <article class="title">
            <div class="container">
                <h3 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">菁英招募</h3>
                <p class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">葡萄王誠摯歡迎您的加入 <br>
                    80分的專業+100分的態度=葡萄王人才方程式</p>
                <ul class="wow fade-in-top list-unstyled row center-xs"
                    style="visibility: visible; animation-name: fade-in-top;">
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#process">招募甄選流程</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#description">招募徵選說明</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#job">焦點職缺項目</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#faq">面試常見問題</a> </li>
                </ul>
            </div>
        </article>
    </div>
@endsection
