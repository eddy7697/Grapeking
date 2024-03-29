@extends('main')

@section('custom-meta')
    <meta property="og:url" content="{{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}}"></meta>
    <meta property="og:title" content="{{$post->seoTitle}}" />
    <meta property="og:description" content="{{$post->seoDescription}}" />
    <!--分享用圖片在這，一樣有保留-->
    {{-- <meta property="og:image" content="https://www.meansgood.com.tw{{$post->featureImage}}"/>
    <meta property="fb:app_id" content="1758202757809745" />
    <!--**************************-->
    <meta property="og:type" content="website" /> --}}
@endsection

@section('custom-script')
    <script>
    jQuery('#line-share').on('click', function() {
      window.open("http://line.me/R/msg/text/?" + document.title + '%0D%0A' + window.location.href);
    });

    jQuery('#facebook-share').on('click', function() {
      window.open("https://www.facebook.com/sharer/sharer.php?u=" + window.location.href + '&src=sdkpreparse');
    });
    </script>
@endsection

@section('custom-style')
    <div id="fb-root"></div>
    {{-- <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=124798941401730";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> --}}
    <style media="screen">
        .blog-featureImage {
            background-image: url('{{$post->featureImage}}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <a href="/">首頁</a>
        &nbsp;&nbsp;>&nbsp;&nbsp;
        <a href="/blog">最新消息</a>
        {{-- {{$post->postCategory}} --}}
        @if ($post->postCategory)
            &nbsp;&nbsp;>&nbsp;&nbsp;
            <a href="/blog/category/{{$post->postCategory}}">{{CategoryView::get($post->postCategory)->categoryTitle}}</a>                
        @else
            {{-- &nbsp;&nbsp;>&nbsp;&nbsp;
            <a href="/blog">所有最新消息</a>                 --}}
        @endif
        &nbsp;&nbsp;>&nbsp;&nbsp;{{$post->postTitle}}
    </div>
</div>
<div class="container mg-site-thumbnail">
    <div class="row">
        <div class="col-md-8 blog-container">
            <div class="blog-featureImage">
                <img src="/img/16x9.png" alt="">
            </div>
            <h2>{{$post->postTitle}}</h2>
            <h4>{{$post->authorName}} 發表於 {{$post->created_at}}</h4>
            <table style="width: 80px;">
                <tr>
                    <td width="50%" align="left" style="border-bottom: none;"><img id="facebook-share" class="alignleft" src="/img/icon/facebook-icon.svg" alt="" width="80%" /></td>
                    <td width="50%" align="left" style="border-bottom: none;"><img id="line-share" class="aligncenter" src="/img/icon/line-icon.svg" alt="" width="80%" /></td>
                </tr>
            </table>
            <hr>
            <div class="blog-content">
                {!!$post->content!!}
            </div>
        </div>
        <div class="col-md-4 blog-container">
            <div class="center-hr">
                <span>
                    其他最新消息
                </span>
            </div>
            <ul class="blog-list">
                @foreach (PostView::getNewestPosts(5) as $key => $value)
                    <li>
                        <a href="/blog/{{$value->postGuid}}">{{$value->postTitle}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
