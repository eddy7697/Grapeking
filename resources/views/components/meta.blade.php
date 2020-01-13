<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="{{SiteMetaView::keyword()}}">
<meta name="description" content="{{SiteMetaView::description()}}">
{{--  <link rel="alternate" href="https://www.meansgood.com.tw/" hreflang="zh-TW" />  --}}
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
<title>{{ SiteMetaView::title() }}</title>

<link rel="shortcut icon" href="{{ SiteMetaView::shortcut() }}">

<!-- Fonts -->
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/b4/css/bootstrap.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://grapeking.shuo-guo.net/js/plugins/AOS/aos.css">
<link rel="stylesheet" href="/css/animate.css">
<link href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
<link href="/css/frontend.css" rel="stylesheet">
<!-- Styles -->
<style>
    .paytest {
        display: block;
        font-size: 50pt;
    }
    .fancybox-navigation {
        position: initial;
    }
</style>