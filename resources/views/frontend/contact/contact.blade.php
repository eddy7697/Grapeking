@extends('main')

@section('custom-script')
    <script src="{{ asset('js/plugins/jquery.fancytree/dist/jquery.fancytree-all.min.js') }}"></script>
    <script src="https://grapeking.shuo-guo.net/js/contact-form.js"></script>
    {{-- <script src="https://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <script>
        $(function () {
        
            //创建和初始化地图函数：
            function initMap(){
                createMap();//创建地图
                setMapEvent();//设置地图事件
                addMapControl();//向地图添加控件
                addMarker();//向地图中添加marker
            }
            
            //创建地图函数：
            function createMap(){
                var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                var point = new BMap.Point(121.530151,31.234715);//定义一个中心点坐标
                map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
                window.map = map;//将map变量存储在全局
            }
            
            //地图事件设置函数：
            function setMapEvent(){
                map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                map.enableKeyboard();//启用键盘上下左右键移动地图
            }
            
            //地图控件添加函数：
            function addMapControl(){
                //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(ctrl_nav);
                //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
            map.addControl(ctrl_ove);
                //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
            }
            
            //标注点数组
            var markerArr = [{title:"我的标记",content:"我的备注",point:"121.455228|31.214071",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                ,{title:"上海葡萄王",content:"我的备注",point:"121.530102|31.234638",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                ];
            //创建marker
            function addMarker(){
                for(var i=0;i<markerArr.length;i++){
                    var json = markerArr[i];
                    var p0 = json.point.split("|")[0];
                    var p1 = json.point.split("|")[1];
                    var point = new BMap.Point(p0,p1);
                    var iconImg = createIcon(json.icon);
                    var marker = new BMap.Marker(point,{icon:iconImg});
                    var iw = createInfoWindow(i);
                    var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                    marker.setLabel(label);
                    map.addOverlay(marker);
                    label.setStyle({
                                borderColor:"#808080",
                                color:"#333",
                                cursor:"pointer"
                    });
                    
                    (function(){
                        var index = i;
                        var _iw = createInfoWindow(i);
                        var _marker = marker;
                        _marker.addEventListener("click",function(){
                            this.openInfoWindow(_iw);
                        });
                        _iw.addEventListener("open",function(){
                            _marker.getLabel().hide();
                        })
                        _iw.addEventListener("close",function(){
                            _marker.getLabel().show();
                        })
                        label.addEventListener("click",function(){
                            _marker.openInfoWindow(_iw);
                        })
                        if(!!json.isOpen){
                            label.hide();
                            _marker.openInfoWindow(_iw);
                        }
                    })()
                }
            }
            //创建InfoWindow
            function createInfoWindow(i){
                var json = markerArr[i];
                var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                return iw;
            }
            //创建一个Icon
            function createIcon(json){
                var icon = new BMap.Icon("https://api.map.baidu.com/lbsapi/creatmap/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                return icon;
            }
            
            initMap();//创建和初始化地图 
        });
        </script> --}}
@endsection

@section('custom-style')
    <style media="screen">
        .feature-image {
            background-image: url('https://grapeking.shuo-guo.net/img/logo_grey.png');
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
            background-image: url('https://grapeking.shuo-guo.net/img/about/contact-banner.jpg');
        }
    </style>
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-page-label">
        <div class="container">
            <div class="col-md-12 container-label">
                <h2>
                        联系我们
                    <br>
                    <span style="font-size: 16px;">Contact Us</span>
                </h2>
            </div>
        </div>
    </div>
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <img class="about-image mobile-to-hide" style="width: 80%;" src="https://grapeking.shuo-guo.net/img/hori-logo.png" alt=""> --}}
                                {!! trans('text.contact_text') !!}
                                <hr>
                                {!! trans('text.contact_info') !!}
                                <hr>
                                <div style="width: 320px;">
                                    <div class="row">
                                        <div class="col-3 mobile-to-left">
                                            <img src="https://grapeking.shuo-guo.net/img/phone-icon.png" width="100%" style="margin-top: 3px;" alt="">
                                        </div>
                                        <div class="col-9">
                                            <p style="font-size: 24px; margin-bottom: 5px;">{{ trans('string.contact_inf_5') }}</p>
                                            <p style="font-size: 24px; margin-bottom: 5px; color: #E70034">+86-021-5760-9598</p>
                                        </div>
                                        <div class="col-12">        
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p>{{ trans('text.service_hour') }}</p>
                            </div>
                            <div class="col-md-6">
                                {{-- <div style="width:100%;height:430px;border:#ccc solid 1px;" id="dituContent"></div> --}}
                                <iframe src="/grapeking_sh" data-link="/grapeking_sh" style="width: 100%; height: 430px;border:#ccc solid 1px;" frameborder="0"></iframe>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
                        <div style="position: absolute; border-top: #E70034 solid 1px; top: 50%; left: 15px; right: 15px;"></div>
                        <div style="background: white; margin: 20px auto; width: fit-content; padding: 0 20px">
                            {{ trans('text.contact_notice') }}
                        </div>
                        
                    </div>
                    <div class="col-md-12 mx-auto site-contact-container" id="contact-form" style="margin-top: 10px">
                        <contact-form></contact-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
