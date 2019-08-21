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
    <div class="content">
        <article class="title">
            <div class="container">
                <h3 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">菁英招募</h3>
                <p class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">葡萄王诚挚欢迎您的加入 <br>
                    80分的专业+100分的态度=葡萄王人才方程序</p>
                <ul class="wow fade-in-top list-unstyled row center-xs"
                    style="visibility: visible; animation-name: fade-in-top;">
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#process">招募甄选流程</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#description">招募征选说明</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#job">焦点职缺项目</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="#faq">面试常见问题</a> </li>
                </ul>
            </div>
        </article>
        <article class="process" id="process">
            <div class="container-fluid" style="position: initial">
                <div class="bg">
                    <div class="pic">
                        <div class="jqimgFill imgLiquid_bgSize imgLiquid_ready"
                            style="background-image: url(&quot;/img/about/bg-process.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                            <img alt="background" class="wow fade-in-left left animated" src="/img/about/bg-process.jpg"
                                style="display: none; visibility: visible; animation-name: fade-in-left;"></div>
                    </div>
                </div>
        
                <div class="container info">
                    <h4 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">招募甄选流程</h4>
        
                    <div class="pic"><img alt="招募甄选流程" class="wow fade-in-bottom" src="/img/about/process.png"
                            style="visibility: visible; animation-name: fade-in-bottom;">
                        <div class="wow fade-in-left  left" style="visibility: visible; animation-name: fade-in-left;">
                            <span>大约十个工作天</span></div>
        
                        <div class="wow fade-in-right  right" style="visibility: visible; animation-name: fade-in-right;">
                            <span>没通过<br>
                                感谢您的应征，欢迎再次<br>
                                投递您的履历，谢谢！</span></div>
                    </div>
                </div>
            </div>        
        </article>

        <article class="description" id="description" data-aos="fade-right" data-aos-duration="1500">
            <div class="row">
                <div class="col-xs">
                    <div class="box wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="row">
                            <div class="col-xs-12 col-lg-8 column left">
                                <h4 style="color: #fff;">招募甄选说明</h4>
        
                                <div class="group"><label>面试注意事项：</label>
        
                                    <ul class="list-unstyled">
                                        <li>不论应征任何职务，面试请穿着正式服装。</li>
                                        <li>请务必准时面试，不论临时有事无法前来或中途有事需延后面试，请务必事先通知本公司招募承办人员。</li>
                                        <li>面试人员请携带足以证明身分之证件，于进入本公司前于警卫室确认身分数据。</li>
                                        <li>本公司提供笔电、投影与网络设备，面试人员若有需要，请提早于面试前通知本公司招募承办人员以利准备。</li>
                                        <li>若有陪同面试眷属，请眷属于警卫室等待，避免影响面试流程。</li>
                                        <li>请务必透过『104人力网站』或『本公司菁英招募网站』进行履历表投递，经审核资格后，将主动通知面试。</li>
                                        <li>本公司面试地点区分为中坜、平镇、龙潭或台北，请于面试前详细确认面试地点，避免发生错误。</li>
                                        <li>主动投递履历本公司大约需十个工作天进行初步筛选机制，请耐心等待，造成不便敬请见谅！</li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="col-xs-12 col-lg-4 column right">
                                <div class="dec"><img alt="description" src="/img/about/description-right.png"></div>
        
                                <div class="group">
                                    <label style="font-size: 36px;">點擊前往<br>投遞履歷</label>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </article>
    </div>
@endsection
