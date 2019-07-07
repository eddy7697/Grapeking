<h4 style="margin: 70px 0 40px; text-align: center">{{ trans('string.business_11') }}</h4>

<div class="about-text">
    <ul class="nav nav-tabs about-location-tab center" id="myTab_" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home_-tab" data-toggle="tab" href="#home_" role="tab" aria-controls="home_" aria-selected="true"><span>{{ trans('string.business_7') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile_-tab" data-toggle="tab" href="#profile_" role="tab" aria-controls="profile_" aria-selected="false"><span>{{ trans('string.business_8') }}</span></a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" id="contact_-tab" data-toggle="tab" href="#contact_" role="tab" aria-controls="contact_" aria-selected="false"><span>{{ trans('string.business_9') }}</span></a>
        </li> --}}
    </ul>
    @php
        $factPath = public_path('img/business/fact_1');
        $specPath = public_path('img/business/spec_1');
        $resultPath = public_path('img/business/result');

        $facts = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($factPath));
        $specs = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($specPath));
        $results = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($resultPath));
    @endphp
    <div class="tab-content" id="location-tab-content">
        <div class="tab-pane fade show active" id="home_" role="tabpanel" aria-labelledby="home_-tab">
            <div class="row mobile-to-hide" style="margin: 50px 0;">
                @foreach ($facts as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="facts" href="/img/business/fact_1/{{$item}}">
                            <img width="100%" src="/img/business/fact_1/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>  
            <div class="mobile-to-show facts_-album" style="overflow-x: hidden;">
                @foreach ($facts as $item)
                    <a data-fancybox="facts" href="/img/business/fact_1/{{$item}}">
                        <img width="100%" src="/img/business/fact_1/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="profile_" role="tabpanel" aria-labelledby="profile_-tab">
            <div class="row" style="margin: 50px 0;">
                @foreach ($specs as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="specs" href="/img/business/spec_1/{{$item}}">
                            <img width="100%" src="/img/business/spec_1/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>    
            <div class="mobile-to-show specs_-album" style="overflow-x: hidden;">
                @foreach ($specs as $item)
                    <a data-fancybox="specs" href="/img/business/spec_1/{{$item}}">
                        <img width="100%" src="/img/business/spec_1/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>                          
        </div>
        <div class="tab-pane fade" id="contact_" role="tabpanel" aria-labelledby="contact_-tab">
            <div class="row" style="margin: 50px 0;">
                @foreach ($results as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="results" href="/img/business/result/{{$item}}">
                            <img width="100%" src="/img/business/result/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>  
            <div class="mobile-to-show results_-album" style="overflow-x: hidden;">
                @foreach ($results as $item)
                    <a data-fancybox="results" href="/img/business/result/{{$item}}">
                        <img width="100%" src="/img/business/result/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>
        </div>
    </div>
</div>