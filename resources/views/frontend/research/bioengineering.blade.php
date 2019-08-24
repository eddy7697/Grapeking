@extends('main')

@section('custom-script')
<script>
$('.material-card-list').slick({
    dots: true,
    infinite: true,
    speed: 300,
    arrow: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrow: true,
                infinite: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrow: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrow: true
            }
        }
    ]
});
</script>
<script>
    var cards = $('.material-card');
    var finalHeight = 0;
    
    for (let i = 0; i < cards.length; i++) {
        if ($(cards[i]).height() > finalHeight) {
            finalHeight = $(cards[i]).height();
        }
    }
    $('.material-card').height(finalHeight);
</script>
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/research/banner-1.jpg');
}
</style>

@if (App::getLocale() == 'en')
<style>
    {!!PageView::css(1)!!}
</style>
@else
<style>
    {!!PageView::css(2)!!}
</style>
@endif
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
                                <li>{{ trans('string.bioengineering_center') }}</li>
                            </ul>
                            <h2>{{ trans('string.bioengineering_center') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content">
                @if (App::getLocale() == 'en')
                {!!PageView::show(1)!!}
                @else
                {!!PageView::show(2)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.bioengineering_center') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                上海葡萄王企业有限公司，位于交通便利的上海市松江工业区，距离市区
                                30公里，附近尚有沪杭高速道路及嘉金高速道路，优越的地理位置为中国
                                及全世界的客户提供了便捷服务。主体厂房占地10,000平方米，拥有符合
                                GMP认证的10万级、30万级生产环境，以高规格进口自动化设备与严密的
                                质量管理，为各类食品及保健食品的生产提供优良的质量保障，帮助您
                                在大健康市场更强壮稳健。
                            </p>                                
                             <p>
                                生物中心成立于1991年台湾桃园，兼具创新素材研发及生产功能，研发方
                                面主要为自有素材(关键零组件)之开发及应用，故积极与学术界及研究机
                                构合作，进行素材研发、功能验证及制程改良，以创建公司核心技术。另
                                申请并执行经济部技术处及工业局之生技相关科专计划达九件，国科会、
                                农委会与教育部之产学计划约20件，目前已拥有美国一件、中国六件及台
                                湾三十五件关于樟芝、香杉芝、乳酸菌、抗生素、猴头菇、紫丁香蘑、蝉
                                花之专利权。
                            </p>
                        </div>
                        <div class="col-md-6 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/bio-1.jpg" alt="">
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">更多专利</a>
                        </div>
                    </div>                    
                </div>

                <h3 class="about-section-title" id="section_2">{{ trans('string.professional_equipment') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/bio-2.jpg" alt="">
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">更多设备</a>
                        </div>
                        <div class="col-md-6">
                            <p>
                                生产方面目前拥有六座1吨、一座2吨、一座3吨、三座5吨、一座10吨、三座
                                20吨、三座40吨及一座50吨等大型发酵槽，加上百升级小型发酵槽，共有
                                50座，合计高达285吨的发酵产能，堪称台湾保健食品第一。2015年，更于
                                新竹科学园区龙潭厂区扩建发酵产能105吨，预计于2018年完成。下游制程
                                则有膜浓缩、冻干机、离心机、低温流动床干燥机、压滤机等，供应葡萄王
                                公司、葡众企业、上海萄葡王公司及代工厂商各项保健食品素材原料。
                            </p>                                
                            <p>
                                1997年推出的保健食品代表作「灵芝王」以每颗十元的价格，席卷整个灵芝
                                市场。1999年「樟芝王」上市，除了是全球第一家量产樟芝菌丝体之外，亦
                                成为国内樟芝第一品牌及全球樟芝菌丝体最大生产厂商。2015年更领先全球
                                成为第一家量产猴头素A之公司，积极开发改善神经退化之市场。2017年蝉
                                花护眼产品开始进入美国市场销售，皆为未来的明星产品。
                            </p>
                        </div>
                    </div>                    
                </div>

                <h3 class="about-section-title" id="section_3">{{ trans('string.repeated_success') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                主要素材包括乳酸菌、樟芝、995营养液、灵芝、中华被毛孢等，并利用酦酵技术生产其他不同菇类素材，如：虫草、姬松茸、桑黄、白桦茸、香杉芝、蜜环菌、云芝、舞茸、猴头菇等，再透过独有素材开发，进而商品化，目前保健食品已占公司营业额九成以上。由这些素材延伸的多项产品，如：葡萄王灵芝王、樟芝王菌丝体胶囊、葡萄王益菌王、葡萄王LGG特益菌、卫杰胶囊、康贝儿Plus乳酸菌、健常活益菌胶囊、糖の安欣胶囊、舒敏优灵芝菌丝体胶囊及葡萄王黄金康贝特能量饮料等十项产品荣获健康食品字号。樟芝王、樟芝益、极品灵芝王、卫杰胶囊亦获得国家生技医疗质量奖之殊荣。此外，在2016年，樟芝专利荣获瑞士日内瓦金牌大奖；蝉花于韩国首尔国际发明展亦获得金牌；猴头菇则于台北国际发明奖获得金牌，实属难得。另有保健及美容新素材之开发，如:保护肾脏功能的蝉花菌丝体、富含ErinacineA可诱导神经胶细胞产生NGF(Nervegrowthfactor)之猴头菌丝体、抗气喘之马来西亚国宝虎乳灵芝(Lignosusrhinoceros)以及产生抗皱抗UV成分Ergothionione的紫丁香蘑菌丝体和生产Ectoine的海洋细菌等创新素材。
                            </p> 
                        </div>
                        <div class="col-md-6 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/research/bio-3.jpg" alt="">
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">更多专利</a>
                        </div>
                    </div>                    
                </div> --}}

                {{-- 原料介紹 --}}
                <h3 class="about-section-title" id="section_4">{{ trans('string.raw_material_introduction') }}</h3>
                <div class="material-card mobile-to-hide first" style="background-color: #ABCD03">
                    <h4>{{ trans('text.material_1') }}</h4>
                    <img class="material-img" src="/img/research/bio-icon-1.png" alt="">                    
                    <p class="material-info">
                        {{ trans('text.material_d_1') }}
                    </p>
                    <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/1.Mushroom.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>
                <div class="material-card mobile-to-hide" style="background-color: #F39800">
                    <h4>{{ trans('text.material_2') }}</h4>
                    <img class="material-img" src="/img/research/bio-icon-2.png" alt="">                    
                    <p class="material-info">
                        {{ trans('text.material_d_2') }}
                    </p>
                    <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/2.Probiotic.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>
                <div class="material-card mobile-to-hide last" style="background-color: #38A1DB">
                    <h4>{{ trans('text.material_3') }}</h4>
                    <img class="material-img" src="/img/research/bio-icon-3.png" alt="">                    
                    <p class="material-info">
                        {{ trans('text.material_d_3') }}
                    </p>
                    <a class="material-link" href="">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>

                <div class="mobile-to-show material-card-list" >
                    <div>
                        <div class="material-card " style="background-color: #ABCD03">
                            <h4>{{ trans('text.material_1') }}</h4>
                            <img class="material-img" src="/img/research/bio-icon-1.png" alt="">                    
                            <p class="material-info">
                                {{ trans('text.material_d_1') }}
                            </p>
                            <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/1.Mushroom.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="material-card" style="background-color: #F39800">
                            <h4>{{ trans('text.material_2') }}</h4>
                            <img class="material-img" src="/img/research/bio-icon-2.png" alt="">                    
                            <p class="material-info">
                                {{ trans('text.material_d_2') }}
                            </p>
                            <a class="material-link" href="https://www.grapeking.com.tw/media/odm/microbe/2.Probiotic.pdf">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="material-card " style="background-color: #38A1DB">
                            <h4>{{ trans('text.material_3') }}</h4>
                            <img class="material-img" src="/img/research/bio-icon-3.png" alt="">                    
                            <p class="material-info">
                                {{ trans('text.material_d_3') }}
                            </p>
                            <a class="material-link" href="">{{ trans('text.check_material') }}&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
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
