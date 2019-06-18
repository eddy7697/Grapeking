@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/research/banner-2.jpg');
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
                            <li>{{ trans('string.innovation_rnd_center') }}</li>
                        </ul>
                        <h2>{{ trans('string.innovation_rnd_center') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 about-content">
            <h3 class="about-section-title">{{ trans('string.professional_rnd_lineup') }}</h3>
            <div class="about-text">
                <p>
                    上海葡萄王企业有限公司，位于交通便利的上海市松江工业区，距离市区30公里，附近尚有沪杭高速道路及嘉金高速道路，优越的地理位置为中国及全世界的客户提供了便捷服务。主体厂房占地10,000平方米，拥有符合GMP认证的10万级、30万级生产环境，以高规格进口自动化设备与严密的质量管理，为各类食品及保健食品的生产提供优良的质量保障，帮助您在大健康市场更强壮稳健。
                </p>                                
                <p>
                    生物中心成立于1991年台湾桃园，兼具创新素材研发及生产功能，研发方面主要为自有素材(关键零组件)之开发及应用，故积极与学术界及研究机构合作，进行素材研发、功能验证及制程改良，以建立公司核心技术。另申请并执行经济部技术处及工业局之生技相关科专计划达九件，国科会、农委会与教育部之产学计划约20件，目前已拥有美国一件、中国六件及台湾三十五件关于樟芝、香杉芝、乳酸菌、抗生素、猴头菇、紫丁香蘑、蝉花之专利权。
                </p>                  
            </div>
            <img class="about-image" src="/img/research/research-1.jpg" alt="">

            <h3 class="about-section-title">{{ trans('string.leading_rnd_technology') }}</h3>
            <div class="about-text">
                <p>
                    配合生物中心之独有菇菌类发酵技术，拥有全台最大酦酵产能281吨，领先同业十年，利用数十项专利制程技术，再结合独有素材与外购原料，研开发独特配方，除经典产品：灵芝王、樟芝王、益菌王之外，新产品研发如：人蔘蚬B、晶透雪亮饮、田七玛卡王也广受大众喜爱。
                </p>                                
                <p>
                    此外，多项开发商品荣获肯定，如：葡萄王灵芝王、樟芝王菌丝体胶囊、葡萄王益菌王、葡萄王LGG特益菌、卫杰胶囊、康贝儿Plus乳酸菌、健常活益菌胶囊、醣の安欣胶囊、舒敏优灵芝菌丝体胶囊及葡萄王黄金康贝特能量饮料等十项产品获健康食品字号认证。在2016年，灵芝王及益菌系列更获5000多位网友票选为YAHOO！健康品牌风云赏特优及优等奖。
                </p>                  
            </div>
            <img class="about-image" src="/img/research/research-2.jpg" alt="">

            <div class="row">
                <div class="col-md-6">
                    <h3 class="about-section-title">{{ trans('string.leading_rnd_technology') }}</h3>
                    <div class="about-text">
                        <p>
                            研发独有剂型并代理多项特色原料，实时掌握欧、美、亚保健食品市场最新脉动，剂型包含：生技原料、胶囊/软胶囊、铝箔袋装、颗粒/粉末造粒玻璃瓶液剂、PKL无菌包等，针对客户需求设计最新商品及配方，备受美国、日本、新加坡、马来西亚多国客户肯定，其中有一支产品在泰国更是第一支由官方认证的乳酸菌商品。
                        </p>                  
                    </div>
                    <img class="about-image" src="/img/research/research-3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="about-section-title">{{ trans('string.leading_rnd_technology') }}</h3>
                    <div class="about-text">
                        <p>
                            葡萄王生技符合ISO22000食品安全卫生管理系统认证，导入食品安全管制系统HACCP管理，严格确保生产流程、作业环境质量，并由TAF国际的认证之ISO17025食品安全国际标准实验室监控产品质量。通过严格质量管控标准，层层把关，确保产品稳定制造与质量卫生安全，健康有保障！
                        </p>                  
                    </div>
                    <img class="about-image" src="/img/research/research-4.jpg" alt="">
                </div>
            </div>
        </div>
        
        {{-- side thumd --}}
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
