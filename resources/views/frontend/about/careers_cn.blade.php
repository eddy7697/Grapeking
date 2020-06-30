<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{SiteMetaView::keyword()}}">
    <meta name="description" content="{{SiteMetaView::description()}}">

    <title>{{ SiteMetaView::title() }}</title>

    <link rel="shortcut icon" href="{{ SiteMetaView::shortcut() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/b4/css/bootstrap.min.css">
    <link href="/css/frontend.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/AOS/aos.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        .paytest {
            display: block;
            font-size: 50pt;
        }

        .fancybox-navigation {
            position: initial;
        }
    </style>

    <style>
        .sub-page-banner {
            background-image: url('/img/about/careers.jpg');
        }
    </style>

    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">


    <div class="loading-bar" style="display: none;">
        <img src="/img/icon/loading-spinner.svg">
    </div>


    <div class="contact-side-link">
        <a href="/contact">
            <img src="/img/contact-icon.png" alt="">
        </a>
    </div>


    <section class="site-header">
        <div class="container-fluid" style="background-color: rgba(255, 255, 255, 1);">
            <div class="row top-bar">
                <div class="col-md-12 mx-auto">
                    <div class="row">
                        <div class="col-md-6 short-cut">
                            <ul style="    margin-top: 18px;">
                                <li style="padding-left: 0"><a href="https://www.pro-partner.com.tw/" target="_blank">葡众企业</a></li>
                                <li><a href="https://www.grapeking.com.tw/tw/home" target="_blank">葡萄王</a></li>
                                <li><a href="https://www.grapekingmuseum.com.tw/" target="_blank">健康活力能量馆</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 site-func">
                            <div class="site-func-container">

                                <div class="mail-btn">
                                    <a href="mailto:gki@grapeking.com.cn"><img src="/img/icon/email.svg"
                                            style="width: 22px; transform: translateY(-1px);" alt=""></a>
                                </div>
                                <div class="dropdown locale-drop-select">
                                    <a href="#" data-toggle="dropdown">
                                        <img src="/img/icon/earth.svg" style="width: 20px; transform: translateY(-2px);"
                                            alt="">&nbsp;&nbsp;
                                        <span>语系切换(简体中文)&nbsp;&nbsp;
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            style="color: #aaa; font-weight: light; margin-top: 5px; text-decoration: none; padding: 5px 10px;"
                                            href="http://localhost:8000/lang/en">English</a>
                                        <a class="dropdown-item"
                                            style="color: #E70034; font-weight: bolder; margin-top: 5px; text-decoration: none; padding: 5px 10px;"
                                            href="http://localhost:8000/lang/zh-CN">简体中文</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid top-menu" style="background-color: rgba(255, 255, 255, 0.85);">
            <div class="row site-header-container">
                <div class="col-md-12 mx-auto">
                    <div class="site-logo">
                        <a href="/"><img src="/img/site-logo/logo_header.png" alt=""></a>
                    </div>
                    <ul class="site-menu">
                        <li><a class="dropdown mega-btn" data-menu-target="about">关于上海葡萄王</a></li>
                        <li><a class="dropdown mega-btn" data-menu-target="product">业务体系</a></li>
                        <li><a class="dropdown mega-btn" data-menu-target="research">专业研发</a></li>
                        <li><a class="dropdown mega-btn" data-menu-target="support">社会责任</a></li>
                        <li><a href="/about/careers">人才招聘</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="site-mega-menu-overlay"></div>
    <section class="site-mega-menu" id="site-mega-menu">
        <div class="container mega-nav">


            <div class="row mega-nav-item" id="about">
                <div class="col-md-2 left-col">
                    <div class="menu-header">
                        <h3>关于上海葡萄王</h3>
                        <hr>
                        <p>About Grape King</p>
                    </div>
                </div>
                <div class="col-md-10 right-col">
                    <ul class="site-mega-menu-container">
                        <li class="site-mega-menu-item">
                            <a href="/about" class="site-mega-menu-link">
                                <img src="/img/menu/about.jpg" alt="关于我们">
                                <p class="header-job-txt">关于我们</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/about/course" class="site-mega-menu-link">
                                <img src="/img/menu/future.jpg" alt="愿景与历程">
                                <p class="header-job-txt">愿景与历程</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/about/founder" class="site-mega-menu-link">
                                <img src="/img/menu/founder.jpg" alt="关于创办人">
                                <p class="header-job-txt">关于创办人</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/about/certification" class="site-mega-menu-link">
                                <img src="/img/menu/global.jpg" alt="国际级安心认证">
                                <p class="header-job-txt">国际级安心认证</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/about/location" class="site-mega-menu-link">
                                <img src="/img/menu/location.jpg" alt="全球布局">
                                <p class="header-job-txt">全球布局</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row mega-nav-item" id="product">
                <div class="col-md-2 left-col">
                    <div class="menu-header">
                        <h3>业务体系</h3>
                        <hr>
                        <p>Business</p>

                    </div>
                </div>
                <div class="col-md-10 right-col">
                    <ul class="site-mega-menu-container">
                        <li class="site-mega-menu-item">
                            <a href="/business/production" class="site-mega-menu-link">
                                <img src="/img/menu/production.jpg" alt="生产服务">
                                <p class="header-job-txt">生产服务</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/business/odm_service" class="site-mega-menu-link">
                                <img src="/img/menu/lump_sum.jpg" alt="统包服务">
                                <p class="header-job-txt">统包服务</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/business/catalog" class="site-mega-menu-link">
                                <img src="/img/menu/catalog.jpg" alt="产品型录">
                                <p class="header-job-txt">产品型录</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row mega-nav-item" id="research">
                <div class="col-md-2 left-col">
                    <div class="menu-header">
                        <h3>专业研发</h3>
                        <hr>
                        <p>Research</p>

                    </div>
                </div>
                <div class="col-md-10 right-col">
                    <ul class="site-mega-menu-container">
                        <li class="site-mega-menu-item">
                            <a href="/research/foodsafty" class="site-mega-menu-link">
                                <img src="/img/menu/food-safty-research.jpg" alt="食品安全中心">
                                <p class="header-job-txt">食品安全中心</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/research/bioengineering" class="site-mega-menu-link">
                                <img src="/img/research/menu-1.jpg" alt="生物科技研究所">
                                <p class="header-job-txt">生物科技研究所</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/research/innovation" class="site-mega-menu-link">
                                <img src="/img/research/menu-2.jpg" alt="创新研发中心">
                                <p class="header-job-txt">创新研发中心</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/research/factory" class="site-mega-menu-link">
                                <img src="/img/research/menu-4.jpg" alt="世界级工厂">
                                <p class="header-job-txt">世界级工厂</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/research/paper" class="site-mega-menu-link">
                                <img src="/img/research/menu-3.jpg" alt="专利及文献发表">
                                <p class="header-job-txt">专利及文献发表</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row mega-nav-item" id="support">
                <div class="col-md-2 left-col">
                    <div class="menu-header">
                        <h3>社会责任</h3>
                        <hr>
                        <p>CSR</p>

                    </div>
                </div>
                <div class="col-md-10 right-col">
                    <ul class="site-mega-menu-container">
                        <li class="site-mega-menu-item">
                            <a href="/csr/relation" class="site-mega-menu-link">
                                <img src="/img/menu/relations.jpg" alt="员工关系">
                                <p class="header-job-txt">员工关系</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/csr/foodSafty" class="site-mega-menu-link">
                                <img src="/img/menu/food-safty.jpg" alt="食品安全">
                                <p class="header-job-txt">食品安全</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/csr/creation" class="site-mega-menu-link">
                                <img src="/img/menu/inovation.jpg" alt="研发创新">
                                <p class="header-job-txt">研发创新</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/csr/green" class="site-mega-menu-link">
                                <img src="/img/menu/green.jpg" alt="绿色环境">
                                <p class="header-job-txt">绿色环境</p>
                            </a>
                        </li>
                        <li class="site-mega-menu-item">
                            <a href="/csr/download" class="site-mega-menu-link">
                                <img src="/img/menu/download.jpg" alt="报告书下载">
                                <p class="header-job-txt">报告书下载</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <section class="mobile-site-header">
        <div id="menu-btn" class="menu-btn"></div>
        <a class="header-logo" href="/"><img src="/img/site-logo/logo_footer.png" alt=""></a>

        <img src="/img/icon/burger-open.svg" style="display: none">
        <img src="/img/icon/burger-close.svg" style="display: none">
    </section>
    <section class="mobile-site-menu hide">
        <ul class="menu-item">
            <li><a class="menu-item-dropdown">关于上海葡萄王</a>
                <ul>
                    <li><a href="/about">关于我们</a></li>
                    <li><a href="/about/course">愿景与历程</a></li>
                    <li><a href="/about/founder">关于创办人</a></li>
                    <li><a href="/about/certification">国际级安心认证</a></li>
                    <li><a href="/about/location">全球布局</a></li>
                </ul>
            </li>
            <li><a class="menu-item-dropdown">业务体系</a>
                <ul>
                    <li><a href="/business/production">生产服务</a></li>
                    <li><a href="/business/odm_service">统包服务</a></li>
                    <li><a href="/business/catalog">产品型录</a></li>
                </ul>
            </li>
            <li><a class="menu-item-dropdown">专业研发</a>
                <ul>
                    <li><a href="/research/foodsafty">食品安全中心</a></li>
                    <li><a href="/research/bioengineering">生物科技研究所</a></li>
                    <li><a href="/research/innovation">创新研发中心</a></li>
                    <li><a href="/research/factory">世界级工厂</a></li>
                    <li><a href="/research/paper">专利及文献发表</a></li>
                </ul>
            </li>
            <li><a class="menu-item-dropdown">社会责任</a>
                <ul>
                    <li><a href="/csr/relation">员工关系</a></li>
                    <li><a href="/csr/foodSafty">食品安全</a></li>
                    <li><a href="/csr/creation">研发创新</a></li>
                    <li><a href="/csr/green">绿色环境</a></li>
                    <li><a href="/csr/download">报告书下载</a></li>
                </ul>
            </li>
            <li><a href="/about/careers">人才招聘</a></li>
        </ul>
    </section>

    <section class="site-content" style="min-height: 413.208px;">
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
                                    <li>首页</li>
                                    <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                    <li>人才招聘</li>
                                </ul>
                                <h2>人才招聘</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 about-content" style="padding-top: 100px;">
                    <h4 class="hilight-title" data-aos="fade-down">菁英招募</h4>
                    <div class="hilight-info-box" data-aos="fade-down">
                        <div class="info-divider"></div>
                        <div class="info-text">
                            <p>葡萄王诚挚欢迎您的加入</p>
                            <p>80分的专业 + 100分的态度 = 葡萄王人才方程式</p>
                        </div>
                    </div>
                    <img class="about-image" src="/img/careers-picture_1.jpg" alt="" data-aos="fade-up">
                    <h4 class="hilight-title" data-aos="fade-up">面试注意事项</h4>
                    <ul class="careers-notice" data-aos="fade-up">
                        <li>不论应征任何职务，面试请穿着正式服装。</li>
                        <li>请务必准时面试，不论临时有事无法前来或中途有事需延后面试，请务必事先通知本公司招募承办人员。</li>
                        <li>面试人员请携带足以证明身分之证件，于进入本公司前于警卫室确认身分数据。</li>
                        <li>本公司提供笔电、投影与网络设备，面试人员若有需要，请提早于面试前通知本公司招募承办人员以利准备。</li>
                        <li>若有陪同面试眷属，请眷属于警卫室等待，避免影响面试流程。</li>
                        <li>请务必透过『<a
                                href="https://company.zhaopin.com/CZ178566810.htm">智联招聘网站</a>』进行履历投递，经审核资格后，将主动通知面试。
                        </li>
                        <li>请于面试前详细确认面试地点，避免发生错误。</li>
                        <li>主动投递履历本公司大约需十个工作天进行初步筛选机制，请耐心等待，造成不便敬请见谅！</li>
                    </ul>
                    <h4 class="hilight-title" data-aos="fade-up">职缺专区</h4>
                    <p class="careers-tip" data-aos="fade-up">我们广征优秀人才，诚挚邀请您以『<a href="https://company.zhaopin.com/CZ178566810.htm">智联招聘网站</a>』进行履历投递，谢谢您！</p>
                    <img class="about-image" src="/img/careers-picture_2.png" alt="" data-aos="fade-up">
                </div>
                <div class="col-md-3 about-content">
                    <img class="about-image" src="/img/hori-logo.png"
                        style="width: 80%; margin-top: 100px; margin-bottom: 20px;" alt="">
                    <hr>
                    <ul class="side-info">
                        <li>地址：上海市松江区车墩镇车新公路518号</li>
                        <li>传真：+86-21-5760-9698</li>
                        <li>网址：www.grapeking.com.cn</li>
                        <li>电邮：gki@grapeking.com.cn</li>
                    </ul>
                    <hr>
                    <div class="row">
                        <div class="col-3 mobile-to-left">
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
    </section>



    <section class="site-footer">
        <div class="container-fluid site-footer-content">

            <div class="col-md-11 mx-auto footer-section">


                <div class="row footer-info">
                    <div class="col-md-5 site-info">
                        <div class="row">
                            <div class="col-md-11 offset-md-1">
                                <div class="footer-logo">
                                    <img src="/img/site-logo/logo_footer.png" alt="">
                                </div>
                                <ul class="contact-info">
                                    <li>地址：中国 上海市松江区车新公路518号</li>
                                    <li>电话：+86-21-5760-9598</li>
                                    <li>传真：+86-21-5760-9698</li>
                                    <li>网址：www.grapeking.com.cn</li>
                                    <li>电邮：gki@grapeking.com.cn</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="row">
                            <div class="col-md-5 offset-md-1 site-map">
                                <ul>
                                    <h5>关于上海葡萄王</h5>
                                    <li>
                                        <a href="/about">关于我们</a>
                                    </li>
                                    <li>
                                        <a href="/about/course">发展历程</a>
                                    </li>
                                    <li>
                                        <a href="/about/founder">关于创办人</a>
                                    </li>
                                    <li>
                                        <a href="/about/certification">国际级安心认证</a>
                                    </li>
                                    <li>
                                        <a href="/about/location">全球布局</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 site-map">
                                <ul>
                                    <h5>专业研发</h5>
                                    <li>
                                        <a href="/research/foodsafty">食品安全中心</a>
                                    </li>
                                    <li>
                                        <a href="/research/bioengineering">生物科技研究所</a>
                                    </li>
                                    <li>
                                        <a href="/research/innovation">创新研发中心</a>
                                    </li>
                                    <li>
                                        <a href="/research/paper">专利及文献发表</a>
                                    </li>
                                    <li>
                                        <a href="/research/factory">世界级工厂</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>
    <section class="site-copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-5 info" style="">
                            Copyright © Shanghai Grape King Enterprises Corp.
                        </div>
                        <div class="col-md-2 icp">
                            <img class="icp-icon" src="/img/gongan.png" alt="" style="display: inline-block">
                            <span style="display: inline-block"><a style="color: #666"
                                    href="https://www.beian.org/website/grapeking.com.cn"
                                    target="_blank">沪ICP备13010123号-1</a></span>

                        </div>
                        <div class="col-md-5 info" style="text-align: right">
                            <a href="/about/privacy ">隐私权政策</a>&nbsp;|&nbsp;<a href="/about/notice">使用条款</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
  
    <script src="http://localhost:8000/js/plugins/moment/moment-with-locales.min.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/frontend.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/popper/popper.min.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/b4/js/bootstrap.min.js"></script>



    <script src="https://grapeking.shuo-guo.net/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/AOS/aos.js" charset="utf-8"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script type="text/javascript">
        AOS.init();


        var headerHeight = $('.site-header').height();
        var footerHeight = $('.site-footer').height();
        var copyrightHeight = $('.site-copyright').height();
        var windowHeight = $(window).height();

        $('.site-content').css({
            'min-height': windowHeight - footerHeight - headerHeight - copyrightHeight
        });

        function updateFooterLayout() {
            if ($(window).width() <= 768) {
                $('.site-footer .site-footer-content .footer-section .footer-logo').removeAttr('style');
            } else {
                $('.site-footer .site-footer-content .footer-section .footer-logo').css('left', $(
                    '.site-footer .site-footer-content .footer-section .footer-info .left-col ul.info').css(
                    "margin-left"))
            }

        };

        function openCartPanel() {
            $('.shopping-Cart-Icon').click()
        }

        updateFooterLayout();

        $(window).resize(function (e) {
            updateFooterLayout();
        });

        $(document).ready(function () {
            $('.device-album').slick({
                dots: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 5,
                centerMode: false,
                cssEase: 'ease-in-out',
                autoplay: true,
                autoplaySpeed: 2000,
            });
            $('.loading-bar').hide()
        });

        $('.search-icon').on('click', function () {
            $('.search-input-group').toggleClass('hide');
        });
    </script>



    <script src="http://localhost:35729/livereload.js"></script>




</body>

</html>