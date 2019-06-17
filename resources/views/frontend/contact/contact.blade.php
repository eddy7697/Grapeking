@extends('main')

@section('custom-script')
    <script src="{{ asset('js/plugins/jquery.fancytree/dist/jquery.fancytree-all.min.js') }}"></script>
    {{-- <script type="text/javascript">
        $(function () {
            $('#refresh-captcha').on('click', function (e) {
                e.preventDefault();

                refreshCaptcha();
            })
        });
        function refreshCaptcha() {
            axios.get('/cap_str')
                .then(res => {
                    $('#captcha').attr('src', '/captcha?q=' + res.data);
                });
        }
    </script> --}}
    <script src="/js/contact-form.js"></script>
@endsection

@section('custom-style')
    <style media="screen">
        .feature-image {
            background-image: url('/img/logo_grey.png');
            background-position: center;
            background-size: cover;
            padding-bottom: 41.6%;
        }
        .feature-content {
           
        }
        .feature-content p{
            line-height: 2em;
            text-indent : 2em;
        }
        .sub-page-banner {
            background-image: url('/img/about/contact-banner.jpg');
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
                            <li>{{ trans('string.about4') }}</li>
                        </ul>
                        <h2>{{ trans('string.about4') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 about-content">
            <h3 class="about-section-title">{{ trans('string.about4') }}</h3>
            <div class="about-text">
                <div class="row">
                    <div class="col-md-9 mx-auto site-contact-container" id="contact-form">
                        <contact-form></contact-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
