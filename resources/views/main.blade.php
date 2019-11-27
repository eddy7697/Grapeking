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
    <div class="cookies-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-top: 30px; padding-bottom: 30px">
                    {{ trans('string.cookie_definition') }}
                </div>
                <div class="col-md-3 btn-sec" style="text-align: right">
                    <button class="btn cookies-btn">{{ trans('string.accept') }}</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Loading --}}
    <div class="loading-bar">
        <img src="/img/icon/loading-spinner.svg">
    </div>

    {{-- Contact link --}}
    <div class="contact-side-link">
        <a href="/contact">
            @if (App::getLocale() == 'en')
            <img src="/img/contact-icon_en.png" alt="">
            @else
            <img src="/img/contact-icon.png" alt="">    
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

    <textarea style="display: none;" id="i18n-text" cols="30" rows="10">{{ json_encode(trans('string')) }}</textarea>
    <!-- Scripts -->
    <script src="{{ asset('js/plugins/moment/moment-with-locales.min.js') }}"></script>
    
    <script src="/js/frontend.js"></script>

    <script src="/js/plugins/popper/popper.min.js"></script>

    <script src="/js/plugins/b4/js/bootstrap.min.js"></script>    

    {{-- <script src="/js/cart-panel.js"></script> --}}
    
    <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script src="/js/plugins/AOS/aos.js" charset="utf-8"></script>

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
