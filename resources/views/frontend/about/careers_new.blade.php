@extends('main')

@section('custom-script')
<script>
$(function () {
    $('.scrollto').on('click', function () {
        var target = $(this).attr('scroll-target')

        $('html,body').animate({
            scrollTop: $(target).offset().top - $('.site-header').height()
        }, 1000);
    });

    function updateLayout() {
        if ($(window).width() < 576) {
            $('#process').css({
                'min-height': $('.flow-title').height() + $('.flow-image').height() - 200
            });
            $('#description').css({
                'background': 'none'
            });
        } else {
            $('#process').css({
                'min-height': $('.flow-title').height() + $('.flow-image').height() + 300
            });    
            $('#description').css({
                'background': ' linear-gradient(rgba(255,255,255,0), #FFF, #FFF, #FFF, #FFF)'
            });
        }
    }

    updateLayout();

    $(window).resize(function () {
        updateLayout();    
    });
});
</script>
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
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                        人才招聘
                        <br>
                        <span style="font-size: 16px;">Careers</span>
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
                                <li>{{ trans('string.recruiting') }}</li>
                            </ul>
                            <h2>{{ trans('string.recruiting') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="overflow: hidden">
        <article class="title">
            <div class="container">
                <h3 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">菁英招募</h3>
                <p class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">葡萄王诚挚欢迎您的加入 <br>
                    <span class="mobile-to-hide">80分的专业+100分的态度=葡萄王人才方程式</span>
                    <span class="mobile-to-show">80分的专业+100分的态度<br>=葡萄王人才方程式</span>
                </p>
                <ul class="wow fade-in-top list-unstyled row center-xs"
                    style="visibility: visible; animation-name: fade-in-top;">
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" scroll-target="#process" href="#process">招募甄选流程</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" scroll-target="#description" href="#description">招募征选说明</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" href="https://company.zhaopin.com/CZ178566810.htm">焦点职缺项目</a> </li>
                    <li class="col-xs-6 col-sm-3"> <a class="scrollto" scroll-target="#faq" href="#faq">面试常见问题</a> </li>
                </ul>
            </div>
        </article>
        <article class="process" id="process">
            <div class="container-fluid" style="position: initial">
                <div class="bg">
                    <div class="pic">
                        <div class="jqimgFill imgLiquid_bgSize imgLiquid_ready"
                            style="background-image: url(&quot;/img/about/bg-process.jpg&quot;); background-size: cover; background-position: center center !important; background-repeat: no-repeat;">
                            <img alt="background" class="wow fade-in-left left animated" src="/img/about/bg-process.jpg"
                                style="display: none; visibility: visible; animation-name: fade-in-left;"></div>
                    </div>
                </div>
        
                <div class="container info flow-title">
                    <h4 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">招募甄选流程</h4>
        
                    <div class="pic flow-image" style="max-width: 768px; width: 100%" alt="招募甄选流程"> 
                        <div class="process-flow">
                            <img class="process-img left-side" src="/img/about/process/left-side.png" alt="" data-aos="fade-down" data-aos-duration="1500">
                            <img class="process-img right-side-1" src="/img/about/process/right-side-1.png" alt="" data-aos="fade-right" data-aos-duration="1500">
                            <img class="process-img right-side-1-mobile" src="/img/about/process/right-side-1-mobile.png" alt="" data-aos="fade-right" data-aos-duration="1500">
                            <img class="process-img right-side-2 mobile-to-hide" src="/img/about/process/right-side-2.png" alt="" data-aos="fade-left" data-aos-duration="1500">
                            <img class="process-img right-side-2-mobile mobile-to-show" src="/img/about/process/right-side-2-mobile.png" alt="" data-aos="fade-left" data-aos-duration="1500">
                            <img class="process-img success mobile-to-hide" src="/img/about/process/bottom-success.png" alt="" data-aos="fade-up" data-aos-duration="1500">
                            <img class="process-img success-mobile mobile-to-show" src="/img/about/process/bottom-success-mobile.png" alt="" data-aos="fade-up" data-aos-duration="1500">
                            <img class="process-img main" src="/img/about/process/main.png" alt="" data-aos="fade-in" data-aos-duration="1500">
                        </div>
                    </div>
                </div>
            </div>        
        </article>

        <article class="description" id="description" style="background: linear-gradient(rgba(255,255,255,0), #FFF, #FFF, #FFF, #FFF)">
            <div class="row">
                <div class="col-xs">
                    <div class="box wow slideInLeft" data-aos="fade-right" data-aos-duration="1500">
                        <div class="row">
                            <div class="col-xs-12 col-lg-8 column left">
                                <div class="career-notice">
                                    <h4 style="color: #fff;">招募甄选说明</h4>
    
                                    <div class="group">
            
                                        <ul class="list-unstyled">
                                            <li>不论应征任何职务，面试请穿着正式服装。</li>
                                            <li>请务必准时面试，不论临时有事无法前来或中途有事需延后面试，请务必事先通知本公司招募承办人员。</li>
                                            <li>面试人员请携带足以证明身分之证件，于进入本公司前于警卫室确认身分数据。</li>
                                            <li>本公司提供笔电、投影与网络设备，面试人员若有需要，请提早于面试前通知本公司招募承办人员以利准备。</li>
                                            <li>若有陪同面试眷属，请眷属于警卫室等待，避免影响面试流程。</li>
                                            <li>请务必透过『<a href="https://company.zhaopin.com/CZ178566810.htm" target="_blank">智联招聘网站</a>』进行履历表投递，经审核资格后，将主动通知面试。</li>
                                            <li>本公司面试地点区分为中坜、平镇、龙潭或台北，请于面试前详细确认面试地点，避免发生错误。</li>
                                            <li>主动投递履历本公司大约需十个工作天进行初步筛选机制，请耐心等待，造成不便敬请见谅！</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
        
                            <div class="col-xs-12 col-lg-4 column right">
                                <div class="dec">
                                    <img class="bg-layer" alt="description" src="/img/about/description-right.png">
                                    <img class="click-btn" src="/img/about/clicl-text.svg" alt="">
                                    <img class="click-mask" src="/img/about/click-mask.png" alt="">
                                </div>
        
                                <div class="group">
                                    <img src="/img/about/link-text.svg" alt="">
                                </div>
                                <a href="https://company.zhaopin.com/CZ178566810.htm" class="link-mask" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </article>

        <article class="faq" id="faq" data-aos="fade-up" data-aos-duration="1500">
            <div class="container">
                <h4 class="wow fade-in-top" style="visibility: visible; animation-name: fade-in-top;">面试常见问题</h4>
                <div class="article">
                    <div class="panel-group" id="accordion">
                        <div class="panel wow fade-in-bottom active"
                            style="visibility: visible; animation-name: fade-in-bottom;">
                            <div class="panel-heading" id="heading1"> <a data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse1" aria-expanded="true" class="">
                                    <h5>请问我投递履历大约多久可收到消息？</h5>
                                </a> </div>
                            <div id="collapse1" class="panel-collapse collapse in" aria-expanded="true" style="">
                                <div class="panel-body">
                                    <div class="article">
                                        <p>本公司于收到履历后，将进行履历合适性之筛选，并将主动与合适的应征者联系并安排面试。若您于投递履历后一个月内仍未收到任何通知，则建议您可主动询问本公司人资单位承办人员，谢谢！
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel wow fade-in-bottom" style="visibility: visible; animation-name: fade-in-bottom;">
                            <div class="panel-heading" id="heading2"> <a data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse2" aria-expanded="false" class="collapsed">
                                    <h5>请问如果我没有接到面试通知，是否可直接到现场面试？</h5>
                                </a> </div>
                            <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="article">
                                        <p>不好意思，因需事先审视履历之合适性与协调主管工作行程进行面谈，担心浪费您宝贵时间，故目前并无开放直接至本公司进行面谈之方式，谢谢！</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection
