<h4 style="margin: 70px 0 40px; text-align: center">{{ trans('string.business_6') }}</h4>

<div class="about-text">
    <ul class="nav nav-tabs about-location-tab center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span>{{ trans('string.business_7') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>{{ trans('string.business_8') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span>{{ trans('string.business_9') }}</span></a>
        </li>
    </ul>
    @php
        $linePath = public_path('img/business/line');
        $specPath = public_path('img/business/spec');
        $resultPath = public_path('img/business/result');

        $lines = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($linePath));
        $specs = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($specPath));
        $results = preg_grep('~\.(jpeg|jpg|JPG|png)$~', scandir($resultPath));
    @endphp
    <div class="tab-content" id="location-tab-content">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row mobile-to-hide" style="margin: 50px 0;">
                @foreach ($lines as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="lines" href="/img/business/line/{{$item}}">
                            <img width="100%" src="/img/business/line/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>  
            <div class="mobile-to-show lines-album" style="overflow-x: hidden;">
                @foreach ($lines as $item)
                    <a data-fancybox="lines" href="/img/business/line/{{$item}}">
                        <img width="100%" src="/img/business/line/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" style="margin: 50px 0;">
                @foreach ($specs as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="specs" href="/img/business/spec/{{$item}}">
                            <img width="100%" src="/img/business/spec/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>    
            <div class="mobile-to-show specs-album" style="overflow-x: hidden;">
                @foreach ($specs as $item)
                    <a data-fancybox="specs" href="/img/business/spec/{{$item}}">
                        <img width="100%" src="/img/business/spec/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>                          
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row" style="margin: 50px 0;">
                @foreach ($results as $item)
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <a data-fancybox="results" href="/img/business/result/{{$item}}">
                            <img width="100%" src="/img/business/result/{{$item}}" alt="">
                        </a>
                    </div>                                    
                @endforeach
            </div>  
            <div class="mobile-to-show results-album" style="overflow-x: hidden;">
                @foreach ($results as $item)
                    <a data-fancybox="results" href="/img/business/result/{{$item}}">
                        <img width="100%" src="/img/business/result/{{$item}}" alt="">
                    </a>                                  
                @endforeach
            </div>
        </div>
    </div>
</div>