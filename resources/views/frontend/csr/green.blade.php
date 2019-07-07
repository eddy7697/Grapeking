@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/csr/csr-4.jpg');
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
                                <li>{{ trans('string.responsibility') }}</li>
                                <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                                <li>{{ trans('string.green') }}</li>
                            </ul>
                            <h2>{{ trans('string.green') }}</h2>
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
                {!!PageView::show(10)!!}
                @else
                {!!PageView::show(9)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.green_1') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.green_d_1') }}
                    </p>
                    <p>{{ trans('string.green_d_2') }}</p>
                    <p>{{ trans('string.green_d_3') }}</p>
                    <p>{{ trans('string.green_d_4') }}</p>
                    <p>{{ trans('string.green_d_5') }}</p>
                    <p>{{ trans('string.green_d_6') }}</p>
                    <p>{{ trans('string.green_d_7') }}</p>
                </div>
                <img class="about-image" src="/img/csr/green-1.jpg" alt="">

                <h3 class="about-section-title" id="section_2">{{ trans('string.green_2') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.green_d_8') }}
                    </p>
                    <p>
                        {{ trans('string.green_d_9') }}
                    </p>
                </div>
                
                <h3 class="about-section-title" id="section_3">{{ trans('string.green_3') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                {{ trans('string.green_d_10') }}
                            </p> 
                        </div>
                        <div class="col-md-5 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/green-2.jpg" alt="">
                        </div>
                        
                    </div>                    
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="row about-session-info">
                    <div class="col-md-4" style="padding: 0">
                        <div class="session-image" style="background: url('/img/csr/session-1.jpg');">
                            <div class="session-mask" style="background-color: rgba(243,152,0,0.5);">
                                <div>
                                    <img src="/img/csr/invo-icon-1.png" alt="">
                                    <p>{{ trans('string.green_d_14') }}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 session-text">
                        <p>{{ trans('string.green_d_11') }}</p>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="row about-session-info">
                    <div class="col-md-4" style="padding: 0">
                        <div class="session-image" style="background: url('/img/csr/session-2.jpg');">
                            <div class="session-mask" style="background-color: rgba(171,205,3,0.5);">
                                <div>
                                    <img src="/img/csr/invo-icon-2.png" alt="">
                                    <p>{{ trans('string.green_d_15') }}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 session-text">
                        <p>{{ trans('string.green_d_12') }}</p>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="row about-session-info">
                    <div class="col-md-4" style="padding: 0">
                        <div class="session-image" style="background: url('/img/csr/session-3.jpg');">
                            <div class="session-mask" style="background-color: rgba(56,161,219,0.5);">
                                <div>
                                    <img src="/img/csr/invo-icon-3.png" alt="">
                                    <p>{{ trans('string.green_d_16') }}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 session-text">
                        <p>{{ trans('string.green_d_13') }}</p>
                    </div>
                </div> --}}

            </div>
            
            {{-- side thumd --}}
            <div class="col-md-3 about-thumbnail">
                @include('components.csrThumbnail')
            </div>
        </div>
    </div>
@endsection
