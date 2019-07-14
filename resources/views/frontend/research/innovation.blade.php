@extends('main')

@section('custom-script')
<script>
    var cards = $('.info-text');
    var finalHeight = 0;
    
    for (let i = 0; i < cards.length; i++) {
        if ($(cards[i]).height() > finalHeight) {
            finalHeight = $(cards[i]).height();
        }
    }
    $('.info-text').height(finalHeight);
</script>
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
            <h3 class="about-section-title" id="section_1">{{ trans('string.professional_rnd_lineup') }}</h3>
            <div class="about-text">
                <p>{{trans('text.invo_d_1')}}</p>                  
            </div>
            <img class="about-image" src="/img/research/research-1.jpg" alt="">

            <h3 class="about-section-title" id="section_2">{{ trans('string.leading_rnd_technology') }}</h3>
            <div class="about-text">
                <p>
                    {{trans('text.invo_d_2')}}
                </p>                                
                <p>
                    {{trans('text.invo_d_3')}}
                </p>                  
            </div>
            <img class="about-image" src="/img/research/research-2.jpg" alt="">

            <div class="row">
                <div class="col-md-6">
                    <h3 class="about-section-title" id="section_3">{{ trans('string.leading_rnd_technology') }}</h3>
                    <div class="about-text ">
                        <div class="info-text">
                            <p>
                                {{trans('text.invo_d_4')}}
                            </p>  
                        </div>
                                        
                    </div>
                    <img class="about-image" src="/img/research/research-3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="about-section-title" id="section_4">{{ trans('string.leading_rnd_technology') }}</h3>
                    <div class="about-text ">
                        <div class="info-text">
                            <p>
                                {{trans('text.invo_d_5')}}
                            </p>  
                        </div>
                                        
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
