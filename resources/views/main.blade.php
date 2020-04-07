<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('custom-meta')

    @include('components.meta')

    {{-- Custom stylesheet --}}
    @yield('custom-style')

</head>
<body>

    @php
        use Carbon\Carbon;
    @endphp

    @if (Carbon::now() > Carbon::parse('2020-04-03 22:00:00') && Carbon::now() < Carbon::parse('2020-04-04 23:59:59'))
    <style>
        body * {
            filter: gray;
            filter: grayscale(1) blur(5px);
        }
        .message-mask {
            background-color: rgba(0, 0, 0, 0.6);
            filter: initial;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999999;
        }
        .message-mask .dialog {
            filter: initial;
            background-color: #fff;
            width: 90%;
            height: auto;
            max-width: 768px;
            max-height: 1024px;
            border-radius: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            padding: 20px 10px;
            text-align: center;
        }
        .message-mask .dialog .close-button {
            width: 25px;
            height: 25px;
            border-radius: 100%;
            background-color: #000;
            position: absolute;
            color: #fff;
            top: 5px;
            right: 5px;
            font-size: 12px;
            cursor: pointer;
        }
        .message-mask * {
            filter: grayscale(1);
        }
        @media screen and (max-width:  768px) {
            .message-mask .dialog h1 {
                font-size: 125%;
            }
            .message-mask .dialog .dialog-text {
                font-size: 70%;
            }
        }
    </style>
    <div class="message-mask force-center">
        <div class="dialog">
            <h1 style="font-weight: 900"><br><br>为抗击新冠肺炎疫情斗争牺牲烈士<br>和逝世同胞深切哀悼<br><br><br><span style="font-size: 70%">上海葡萄王企业有限公司</span></h1>
            <img class="icp-icon" src="/img/gongan.png" alt="" style="display: inline-block">
            <span class="dialog-text" style="display: inline-block"><a style="color: #666" href="https://www.beian.org/website/grapeking.com.cn" target="_blank">沪ICP备13010123号-1</a></span>
        </div>
    </div>

    <script>
        function closeMask() { 
            $('.message-mask').hide();
            $('body *').css({
                filter: 'initial'
            });
        }
    </script>
    @endif
    <div class="cookies-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-top: 30px; padding-bottom: 30px">
                    {!! trans('string.cookie_definition') !!}
                </div>
                <div class="col-md-3 btn-sec" style="text-align: right">
                    <button class="btn cookies-btn">{{ trans('string.accept') }}</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Loading --}}
    <div class="loading-bar">
        <img src="https://grapeking.shuo-guo.net/img/icon/loading-spinner.svg">
    </div>

    {{-- Contact link --}}
    <div class="contact-side-link">
        <a href="/contact">
            @if (App::getLocale() == 'en')
            <img src="https://grapeking.shuo-guo.net/img/contact-icon_en.png" alt="">
            @else
            <img src="https://grapeking.shuo-guo.net/img/contact-icon.png" alt="">    
            @endif
            
        </a>
    </div>

    {{-- Header --}}
    @include('components.header')

    {{-- Content --}}
    <section class="site-content">
        @yield('content')
    </section>
    

    {{-- Footer --}}
    @include('components.footer')

    @php
        $string = json_encode(trans('string'));
        $text = json_encode(trans('text'));

        $res = array_merge(json_decode($string, true), json_decode($text, true));
    @endphp

    <textarea style="display: none;" id="i18n-text" cols="30" rows="10">{{ json_encode($res) }}</textarea>
    <!-- Scripts -->
    <script src="https://grapeking.shuo-guo.net/js/plugins/moment/moment-with-locales.min.js"></script>
    
    <script src="https://grapeking.shuo-guo.net/js/frontend.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/popper/popper.min.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/b4/js/bootstrap.min.js"></script>    

    {{-- <script src="https://grapeking.shuo-guo.net/js/cart-panel.js"></script> --}}
    
    <script src="https://grapeking.shuo-guo.net/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

    <script src="https://grapeking.shuo-guo.net/js/plugins/AOS/aos.js" charset="utf-8"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script type="text/javascript">
        AOS.init();


        var headerHeight = $('.site-header').height();
        var footerHeight = $('.site-footer').height();
        var copyrightHeight = $('.site-copyright').height();
        var windowHeight = $(window).height();

        $('.site-content').css({'min-height': windowHeight - footerHeight - headerHeight - copyrightHeight});

        function updateFooterLayout() {
            if ($(window).width() <= 768) {
                $('.site-footer .site-footer-content .footer-section .footer-logo').removeAttr('style');
            } else {
                $('.site-footer .site-footer-content .footer-section .footer-logo').css('left', $('.site-footer .site-footer-content .footer-section .footer-info .left-col ul.info').css("margin-left"))    
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
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            // slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            // slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.loading-bar').hide()
        });

        $('.search-icon').on('click', function () {
            $('.search-input-group').toggleClass('hide');
        });
        
    </script>

    {{-- Custom scripts --}}
    @yield('custom-script')

    @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif

</body>
</html>
