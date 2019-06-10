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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 mx-auto">
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
                <h4 class="hilight-title">菁英招募</h4>
                <div class="hilight-info-box">
                    <div class="info-divider"></div>
                    <div class="info-text">
                        <p>葡萄王诚挚欢迎您的加入</p>
                        <p>80分的专业100分的态度 = 葡萄王人才方程序</p>
                    </div>
                </div>
                <img class="about-image" src="/img/careers-picture_1.jpg" alt="">
                <h4 class="hilight-title">面试注意事项</h4>
                <ul class="careers-notice">
                    <li>不论应征任何职务，面试请穿着正式服装。</li>
                    <li>请务必准时面试，不论临时有事无法前来或中途有事需延后面试，请务必事先通知本公司招募承办人员。</li>
                    <li>面试人员请携带足以证明身分之政见，于进入本公司前于警卫室确认身分数据。</li>
                    <li>本公司提供笔电、投影与网络设备，面试人员若有需要，请提早于面试前通知本公司招募承办人员以利准备。</li>
                    <li>若有陪同面试眷属，请眷属于警卫室等待，避免影响面试流程。</li>
                    <li>请务必透过『<a href="#">智联招聘网站</a>』进行履历投递，经审核资格后，将主动通知面试。</li>
                    <li>请于面试前详细确认面试地点，避免发生错误。</li>
                    <li>主动投递履历本公司大约需十个工作天进行初步筛选机制，请耐心等待，造成不便敬请见谅！</li>
                </ul>
                <h4 class="hilight-title">职缺专区</h4>
                <p class="careers-tip">请务必透过『<a href="#">智联招聘网站</a>』进行履历表投递，经审核资格后，将主动通知面试。</p>
                <img class="about-image" src="/img/careers-picture_2.png" alt="">
            </div>
            <div class="col-md-3 about-content">
                <img class="about-image" src="/img/hori-logo.png" style="width: 80%; margin-top: 100px; margin-bottom: 20px;" alt="">
                <hr>
                <ul class="side-info">
                    <li>地址：上海市松江区车墩镇车新公路518号</li>
                    <li>传真：+86-21-5760-9698</li>
                    <li>网址：www.grapeking.com.cn</li>
                    <li>电邮：gki@grapeking.com.cn</li>
                </ul>
                <hr>
                <div class="row">
                    <div class="col-3" style="text-align: right">
                        <img src="/img/phone-icon.png" width="90%" style="margin-top: 13px;" alt="">
                    </div>
                    <div class="col-9">
                        <p style="font-size: 24px; margin-bottom: 5px;">联系专线</p>
                        <p style="font-size: 24px; margin-bottom: 5px; color: #E70034">021-5760-9598</p>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
