@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/csr/csr-1.jpg');
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
                                <li>{{ trans('string.relations') }}</li>
                            </ul>
                            <h2>{{ trans('string.relations') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 about-content">
                <h3 class="about-section-title" id="section_1">{{ trans('string.relations') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                {{ trans('string.relations_d_1') }}
                            </p>     
                        </div>
                        <div class="col-md-5 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/relation-1.jpg" alt="">
                        </div>
                    </div>                    
                </div>

                <h3 class="about-section-title" id="section_2">{{ trans('string.relation_2') }}</h3>
                <div class="about-text">
                    <div class="row">
                        <div class="col-md-6" style="text-align: left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 400px; display: inline-block" src="/img/csr/relation-2.jpg" alt="">
                            
                        </div>
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.relations_d_2') }}
                            </p> 
                            <a class="location-contact-btn" style="margin-top: 50px;" href="">{{ trans('string.join_us') }}</a>
                        </div>
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
