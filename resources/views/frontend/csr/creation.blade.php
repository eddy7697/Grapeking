@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/csr/csr-3.jpg');
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
                                <li>{{ trans('string.creation') }}</li>
                            </ul>
                            <h2>{{ trans('string.creation') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content">

                <h3 class="about-section-title">{{ trans('string.creation_1') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.creation_d_1') }}
                            </p> 
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.go_center') }}</a>
                        </div>
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/invo-1.jpg" alt="">
                        </div>
                        
                    </div>                    
                </div>

                <h3 class="about-section-title">{{ trans('string.creation_2') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/invo-2.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.creation_d_2') }}
                            </p> 
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.go_creation') }}</a>
                        </div>
                        
                        
                    </div>                    
                </div>

                <h3 class="about-section-title">{{ trans('string.creation_3') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.creation_d_3') }}
                            </p> 
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.go_pro') }}</a>
                        </div>
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/invo-3.jpg" alt="">
                        </div>
                        
                    </div>                    
                </div>

                <h3 class="about-section-title">{{ trans('string.creation_4') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.creation_d_4') }}
                    </p> 
                    <p>
                        {{ trans('string.creation_d_5') }}
                    </p> 
                </div>
                <div class="material-list">
                    <div class="item">
                        <img class="img" src="/img/csr/invo-material-1.svg" alt="">
                    </div>
                    <div class="item">
                        <img class="img" src="/img/csr/invo-material-2.svg" alt="">
                    </div>
                    <div class="item">
                        <img class="img" src="/img/csr/invo-material-3.svg" alt="">
                    </div>
                    <div class="item">
                        <img class="img" src="/img/csr/invo-material-4.svg" alt="">
                    </div>
                    <div class="item">
                        <img class="img" src="/img/csr/invo-material-5.svg" alt="">
                    </div>
                </div>

            </div>
            
            {{-- side thumd --}}
            <div class="col-md-3 about-thumbnail">
                @include('components.csrThumbnail')
            </div>
        </div>
    </div>
@endsection
