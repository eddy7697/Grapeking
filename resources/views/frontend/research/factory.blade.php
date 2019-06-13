@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
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
                            <li>{{ trans('text.world_class_factory') }}</li>
                        </ul>
                        <h2>{{ trans('text.world_class_factory') }}</h2>
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
                        {{ trans('text.laboratory_equipment') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        {{ trans('text.production_equipment') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 about-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="about-section-title">{{ trans('text.laboratory_equipment') }}</h3>
                    <div class="row">
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-1.jpg" alt="">
                            <p style="margin: 35px 0;">无菌操作台</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-2.jpg" alt="">
                            <p style="margin: 35px 0;">光学显微镜</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-3.jpg" alt="">
                            <p style="margin: 35px 0;">分光光度计</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-4.jpg" alt="">
                            <p style="margin: 35px 0;">聚合酶链反应器</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-5.jpg" alt="">
                            <p style="margin: 35px 0;">旋转真空减压浓缩机</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-6.jpg" alt="">
                            <p style="margin: 35px 0;">液相层析串联式质谱仪</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-7.jpg" alt="">
                            <p style="margin: 35px 0;">高效液相层析仪</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-8.jpg" alt="">
                            <p style="margin: 35px 0;">培养振荡器</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-9.jpg" alt="">
                            <p style="margin: 35px 0;">离心机</p>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <img width="100%" src="/img/research/factory/factory-10.jpg" alt="">
                            <p style="margin: 35px 0;">高效能离心分配层析仪</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="about-section-title">{{ trans('text.production_equipment') }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
