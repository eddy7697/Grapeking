@extends('main')

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/security.jpg');
}
</style>
@endsection

@section('content')

<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        使用条款
                    <br>
                    <span style="font-size: 16px;">Terms of Use</span>
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
                            <li>{{ trans('string.notice') }}</li>
                        </ul>
                        <h2>{{ trans('string.notice') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 about-content" style="padding-top: 100px;    line-height: 36px;">
            {!!SiteMetaView::ecNotice()!!}
        </div>
    </div>
</div>

@endsection
