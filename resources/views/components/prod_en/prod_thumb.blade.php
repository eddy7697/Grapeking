<svg class="thumb mobile-to-hide" viewBox="0 0 42 472">
        <defs>
            <style>
                .cls_thumb-1,
                .cls_thumb-2,
                .cls_thumb-3,
                .cls_thumb-5 {
                    fill: #fff;
                }
    
                .cls_thumb-1 {
                    opacity: 0.3;
                }
    
                .cls_thumb-3 {
                    font-size: 30.51px;
                    font-family: MicrosoftJhengHeiBold, Microsoft JhengHei;
                }
    
                .cls_thumb-4 {
                    opacity: 0.8;
                }
    
                .cls_thumb-5 {
                    stroke: #fff;
                    stroke-miterlimit: 10;
                    stroke-width: 2px;
                }
            </style>
        </defs>
        <title>thumbnail</title>
        <circle class="cls_thumb-{{$index == 1 ? '2' : '1'}}" cx="20.9" cy="294.67" r="4.17" />
        <circle class="cls_thumb-{{$index == 2 ? '2' : '1'}}" cx="20.9" cy="316.58" r="4.17" />
        <circle class="cls_thumb-{{$index == 3 ? '2' : '1'}}" cx="20.9" cy="338.49" r="4.17" />
        <circle class="cls_thumb-{{$index == 4 ? '2' : '1'}}" cx="20.9" cy="360.41" r="4.17" />
        <circle class="cls_thumb-{{$index == 5 ? '2' : '1'}}" cx="20.9" cy="382.32" r="4.17" />
        
        <text class="cls_thumb-3" transform="rotate(90)">
            <tspan x="65" y="-10">Dosage Forms</tspan>
            
            {{-- 五
            <tspan x="0" y="36.61">大</tspan>
            <tspan x="0" y="73.22">劑</tspan>
            <tspan x="0" y="109.83">型</tspan> --}}
        </text>
        <circle class="cls_thumb-1" cx="21" cy="21" r="21" onclick="tabShow('{{$prev}}')"/>
        <g class="cls_thumb-4" onclick="tabShow('{{$prev}}')">
            <polyline class="cls_thumb-2" points="16.06 18.43 21 13.49 25.94 18.43" />
            <line class="cls_thumb-5" x1="21.21" y1="18.23" x2="21.21" y2="28.51" />
        </g>
        <circle class="cls_thumb-1" cx="21" cy="451" r="21" onclick="tabShow('{{$next}}')" />
        <g class="cls_thumb-4" onclick="tabShow('{{$next}}')">
            <polyline class="cls_thumb-2" points="25.94 453.57 21 458.51 16.06 453.57" />
            <line class="cls_thumb-5" x1="20.79" y1="453.77" x2="20.79" y2="443.49" />
        </g>
    </svg>