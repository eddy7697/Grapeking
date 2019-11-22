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
<script>

// var sections = ['#about_1', '#about_2', '#about_3', '#about_4'];

// $(window).scroll(function () {
//     var offsetSet = []
//     sections.forEach(elm => {
//         offsetSet.push({
//             elm: elm,
//             offset: $(elm).offset().top - $(window).scrollTop() - 200
//         });
//     });

//     console.log(offsetSet)
// });

</script>
@endsection

@section('custom-style')
<link rel="stylesheet" href="/js/plugins/perfect-scrollbar-master/css/perfect-scrollbar.css">
<style>
.sub-page-banner {
    background-image: url('/img/about/banner.jpg');
}
</style>
@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(12)!!}
</style>
@else
<style>
    {!!PageView::css(11)!!}
</style>
@endif
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-page-label">
            <div class="container">
                <div class="col-md-12 container-label">
                    <h2>
                        关于我们
                        <br>
                        <span style="font-size: 16px;">About Us</span>
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
                                <li>{{ trans('string.about') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.about_us') }}</li>
                            </ul>
                            <h2>{{ trans('string.about_us') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-content">
                <div class="row company-section" data-aos="fade-down-right" data-aos-duration="2000">
                    <div class="col-md-5 info-image mobile-to-hide">
                        <img src="/img/about/company-1.jpg" class="company-image" alt="">
                    </div>
                    <div class="col-md-7 info-content">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/grapeking.png" alt="">
                                </div>
                                <div class="label">葡萄王生技集団介绍</div>
                            </div>
                            <div class="content">
                                <p>葡萄王生技集団成立于1969年，历经了三次创新，包含：成立当年推出台湾第一支能量饮料「康贝特口服液」席卷市场; 1991年成立生物科技研究所，跨足保健食品领域;2010年的组织变革及品牌再造。多年以来，逐步发展属于自己的微笑曲线，不但拥有全台湾最大的酦酵产能及领先技术，也是PIC/S GMP药厂，更拥有ISO22000及ISO17025国际质量认证把关食品安全。最重要的是深耕已久的本土品牌优势，商品遍及全国各大通路，如此一条龙的优势皆让同业难以匹敌。「科技、健康、希望」一直是葡萄王生技的精神总指标，我们也将以此为基础，以「健康专家、照顾全家」为使命，提供社会大众更丰富的生命，共同迎向充满希望的未来。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image mobile-to-show">
                        <img src="/img/about/company-1.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section" data-aos="fade-down-left" data-aos-duration="2000">
                    <div class="col-md-7 info-content">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/site-logo.png" alt="">
                                </div>
                                <div class="label">上海葡萄王企业有限公司</div>
                            </div>
                            <div class="content">
                                <p>「上海葡萄王企业有限公司」为葡萄王生技股份有限公司百分之百转投资之子公司。1994年成立于上海市松江区，1997年正式营运。上海葡萄王自成立以来，不仅开发、拓展自有品牌，持续结合母公司的资源及技术能力，也积极进行食品、保健品的OEM和ODM业务。不但可完整提供研发设计、原料制成、生产工程、质量控管的各项客制化服务，也可依客户需求生产和开发差异性商品，使客户更拥有市场优势及竞争力。自2015年开始进行营运策略的调整，将发展目标调整以代工业务为主，使得2015年的营收大幅成长72%，2017年总营收更超过2014年11倍，一条龙式的专业代工服务，使上海葡萄王拥有多家代工客户，包含：保养品牌TST庭秘密、尚赫，跃升为葡萄王最新的成长引擎。</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5 info-image">
                        <img src="/img/about/company-2.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section" data-aos="fade-down-right" data-aos-duration="2000">
                    <div class="col-md-5 info-image mobile-to-hide">
                        <img src="/img/about/company-3.jpg" class="company-image" alt="">
                    </div>
                    <div class="col-md-7 info-content">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/dong-pu.png" alt="">
                                </div>
                                <div class="label">东葡生物科技有限公司</div>
                            </div>
                            <div class="content">
                                <p>东葡生物科技有限公司成立于2017年10月，公司座落于环境优美的东莞松山湖畔。为葡萄王生技股份有限公司全资经营的子公司，主要从事保健食品、食品销售。 做为母公司葡萄王生技于大陆地区整体布局的重要枢纽，并且以立足华南区放眼大陆地区大健康产业的愿景与目标。东葡生物科技(东莞)有限公司延续着母公司葡萄王生技所赋予的「科技、健康、希望」这样的精神总指标，做为公司不断努力的方向。并期盼以此为基础，以「健康专家、照顾全家」为使命，来满足全家人保健需求，并创造更为多元的保健契机。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image mobile-to-show">
                        <img src="/img/about/company-3.jpg" class="company-image" alt="">
                    </div>
                </div>
                <div class="row company-section" data-aos="fade-down-left" data-aos-duration="2000">
                    <div class="col-md-7 info-content">
                        <div class="info-box">
                            <div class="label-section">
                                <div class="logo">
                                    <img src="/img/about/pu-zun.png" alt="">
                                </div>
                                <div class="label">葡众企业股份有限公司</div>
                            </div>
                            <div class="content">
                                <p>葡众创立导因于葡萄王生技创办人曾水照 先生对于保健食品风行及多层次传销时代来临的前瞻远见，于1993年成立以传直销为体系的「葡众企业」专攻保健食品市场。找来六大顾问，并于1998年葡众正式转型为多层次传销公司，奠定葡萄王生技多角化经营的重要里程碑。「葡众企业」目前共有台北、桃园、新竹、丰原、台中、台南、高雄、花莲八处营运中心。2013年更斥资购置台北内湖大楼，打造全新营运总部以满足与日俱增的会员数，提供更优质完善的服务质量。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 info-image">
                        <img src="/img/about/company-4.jpg" class="company-image" alt="">
                    </div>
                </div>
                {{-- @if (App::getLocale() == 'en')
                {!!PageView::show(12)!!}
                @else
                {!!PageView::show(11)!!}
                @endif --}}
                {{-- <h3 class="about-section-title" id="about_1">{{ trans('string.company_profile') }}</h3>
                <div class="about-text">
                    {!! trans('string.about1') !!}
                </div>
                <img class="about-image" src="/img/about/company-1.jpg" alt="">
                <h3 class="about-section-title" id="about_2">{{ trans('string.about5') }}</h3>
                <div class="about-text">
                    {!! trans('string.about6') !!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="about-image" src="/img/about/company-2.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="about-image" style="height: 250px;" src="/img/about/site-logo.png" alt="">
                    </div>
                </div>
                
                <h3 class="about-section-title" id="about_3">{{ trans('string.about7') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-8">
                            {!! trans('string.about8') !!}
                        </div>
                        <div class="col-md-4">
                            <img class="about-image inner" src="/img/about/dong-pu.png" alt="">
                        </div>
                    </div>                    
                </div>
                <h3 class="about-section-title" id="about_4">{{ trans('string.about9') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="about-image inner" src="/img/about/pu-zun.png" alt="">
                        </div>
                        <div class="col-md-8">
                            {!! trans('string.about10') !!}
                        </div>
                    </div>                    
                </div>                
                <h3 class="about-section-title" id="about_5">{{ trans('string.about11') }}</h3>
                <div class="about-text">
                    {!! trans('string.about12') !!}
                </div>
                <img class="about-image" style="max-width: 400px; width: 100%" src="/img/about/pic.png" alt=""> --}}
            </div>
            {{-- <div class="col-md-3 about-thumbnail">
                @include('components.aboutThumbnail')
            </div> --}}
        </div>
    </div>
@endsection
