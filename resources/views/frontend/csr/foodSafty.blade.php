@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/csr/csr-2.jpg');
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
                                <li>{{ trans('string.foodSafty') }}</li>
                            </ul>
                            <h2>{{ trans('string.foodSafty') }}</h2>
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
                {!!PageView::show(6)!!}
                @else
                {!!PageView::show(5)!!}
                @endif
                {{-- <h3 class="about-section-title" id="section_1">{{ trans('string.foodSafty') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.foodSafty_d_1') }}
                    </p>                    
                </div>
                <img class="about-image" src="/img/csr/food-safty.png" alt="">

                <h3 class="about-section-title" id="section_2">{{ trans('string.relation_2') }}</h3>
                <div class="about-text">
                    <p>
                        {{ trans('string.foodSafty_d_2') }}
                    </p>                    
                </div>
                <div class="about-text" style="margin-top: 50px;">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <p>
                                {{ trans('string.foodSafty_d_3') }}
                            </p> 
                        </div>
                        <div class="col-md-6 mobile-to-left">
                            <img class="about-image" style="margin: 0; width: 100%; max-width: 500px; display: inline-block" src="/img/csr/food-safty-2.png" alt="">
                        </div>
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
