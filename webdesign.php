<?php include 'include/header.php'?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_SlideshowTransitions = [
            {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
            {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
            {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
            {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
            {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
            {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
            {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
            {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
            {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
            {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        var jssor_1_SlideoTransitions = [
            [{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:800,y:-200,o:-1,e:{y:5}}],
            [{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:-200,o:-1,e:{x:5}}],
            [{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:200,o:-1,e:{x:5}}],
            [{b:-1,d:1,o:-1},{b:1600,d:600,x:200,y:-230,o:1,e:{x:3,y:3}},{b:5600,d:800,o:-1}],
            [{b:4600,d:960,x:-204,e:{x:1}}],
            [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1,sY:1},{b:3800,d:300,o:-1,sX:0.1,sY:0.1}],
            [{b:-1,d:1,sX:-1,sY:-1},{b:3520,d:400,sX:1,sY:1},{b:3920,d:300,o:-1,sX:0.1,sY:0.1}],
            [{b:-1,d:1,o:-1},{b:2200,d:1200,x:-135,y:-24,o:1,e:{x:7,y:7}},{b:4600,d:640,x:-130,e:{x:1}}],
            [{b:-1,d:1,o:-1},{b:4600,d:240,x:-75,o:1},{b:4840,d:480,x:-150},{b:5320,d:240,x:-75,o:-1}],
            [{b:2800,d:600,y:70,sX:-0.5,sY:-0.5,e:{y:5}},{b:6000,d:600,y:50,r:-10},{b:7000,d:400,o:-1,rX:10,rY:-10}],
            [{b:0,d:600,x:-742,sX:4,sY:4,e:{x:6}},{b:900,d:600,sX:-4,sY:-4}],
            [{b:-1,d:1,o:-1},{b:400,d:500,o:1,e:{o:5}}],
            [{b:-1,d:1,o:-1,r:-180},{b:1500,d:500,o:1,r:180,e:{r:27}}],
            [{b:-1,d:1,o:-1,r:180},{b:2000,d:500,o:1,r:-180,e:{r:27}}],
            [{b:2800,d:600,y:-270,e:{y:6}}],
            [{b:6000,d:600,y:-100,r:-10,e:{y:6}},{b:7000,d:400,o:-1,rX:-10,rY:10}],
            [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:3800,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
            [{b:-1,d:1,o:-1},{b:3400,d:600,o:1},{b:4000,d:1000,r:360,e:{r:1}}],
            [{b:-1,d:1,o:-1},{b:3400,d:600,y:-70,o:1,e:{y:27}}],
            [{b:-1,d:1,sX:-1,sY:-1},{b:3700,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4100,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
            [{b:-1,d:1,o:-1},{b:3700,d:600,o:1},{b:4300,d:1000,r:360}],
            [{b:-1,d:1,o:-1},{b:3700,d:600,x:-150,o:1,e:{x:27}}],
            [{b:-1,d:1,sX:-1,sY:-1},{b:4000,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4400,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
            [{b:-1,d:1,o:-1},{b:4000,d:600,o:1},{b:4600,d:1000,r:360}],
            [{b:-1,d:1,o:-1},{b:4000,d:600,x:150,o:1,e:{x:27}}],
            [{b:9300,d:600,o:-1,r:540,sX:-0.5,sY:-0.5,e:{r:5}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:6880,d:20,o:1},{b:6900,d:300,sX:-2.08,sY:-2.08,e:{sX:27,sY:27}},{b:7200,d:240,sX:0.08,sY:0.08}],
            [{b:-1,d:1,o:-1,sX:5,sY:5},{b:6300,d:600,o:1,sX:-5,sY:-5}],
            [{b:-1,d:1,o:-1},{b:7200,d:440,o:1}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7420,d:20,o:1},{b:7440,d:200,r:180,sX:0.4,sY:0.4},{b:7640,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:300,r:60,sX:1.1,sY:1.1},{b:7940,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7920,d:20,o:1},{b:7940,d:300,sX:1.4,sY:1.4},{b:8240,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:200,r:180,sX:0.4,sY:0.4},{b:7840,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:300,r:60,sX:1.1,sY:1.1},{b:8140,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8120,d:20,o:1},{b:8140,d:300,sX:1.4,sY:1.4},{b:8440,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:200,r:180,sX:0.4,sY:0.4},{b:8040,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:300,r:60,sX:1.1,sY:1.1},{b:8340,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8320,d:20,o:1},{b:8340,d:300,sX:1.4,sY:1.4},{b:8640,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:200,r:180,sX:0.4,sY:0.4},{b:8240,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:300,r:60,sX:1.1,sY:1.1},{b:8540,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8520,d:20,o:1},{b:8540,d:300,sX:1.4,sY:1.4},{b:8840,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
            [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
            [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:0,d:400,y:330,e:{y:1}},{b:900,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:-1,d:1,o:-0.5},{b:900,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:1700,d:400,y:310,e:{y:1}},{b:2600,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:20,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:19700,d:1000,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:2600,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:3400,d:400,y:290,e:{y:1}},{b:4800,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:40,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:19700,d:1000,o:-1}],
            [{b:-1,d:1,c:{t:-280}},{b:3800,d:100,c:{t:50.40},e:{c:{t:32}}},{b:3900,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4000,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4100,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4200,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4300,d:100,c:{t:22.40},e:{c:{t:32}}},{b:4400,d:100,c:{t:28.00},e:{c:{t:32}}},{b:4500,d:100,c:{t:50.40},e:{c:{t:32}}}],
            [{b:-1,d:1,o:-0.5},{b:4800,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:5700,d:400,y:270,e:{y:1}},{b:6600,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:19700,d:1000,o:-1}],
            [{b:6600,d:400,o:-0.2},{b:14700,d:500,o:-0.8}],
            [{b:-1,d:1,o:-0.5},{b:14700,d:500,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:7500,d:400,y:270,e:{y:1}},{b:8400,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:8400,d:400,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:8400,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:9300,d:400,y:270,e:{y:1}},{b:10200,d:400,y:50,rX:40,e:{y:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:10200,d:400,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:10200,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:11100,d:400,y:270,e:{y:1}},{b:12000,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:12000,d:400,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:12000,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:12900,d:400,y:270,e:{y:1}},{b:13800,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:13800,d:400,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:13800,d:400,o:-0.5}],
            [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:15700,d:400,y:270,e:{y:1}},{b:18800,d:400,y:30,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:80,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
            [{b:19700,d:1000,o:-1}],
            [{b:-1,d:1,o:-0.5},{b:18800,d:400,o:-0.5}],
            [{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:-238,e:{x:6}}],
            [{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:238,e:{x:6}}],
            [{b:-1,d:1,o:-1},{b:16700,d:400,y:200,o:1,e:{y:2,o:6}},{b:17100,d:300,y:-28,e:{y:3}},{b:17400,d:300,y:28,e:{y:2}}],
            [{b:-1,d:1,o:-1},{b:16900,d:400,y:200,o:1,e:{y:2,o:6}},{b:17300,d:300,y:-28,e:{y:3}},{b:17600,d:300,y:28,e:{y:2}}],
            [{b:-1,d:1,o:-1},{b:17100,d:400,y:200,o:1,e:{y:2,o:6}},{b:17500,d:300,y:-28,e:{y:3}},{b:17800,d:300,y:28,e:{y:2}}],
            [{b:-1,d:1,o:-1},{b:17300,d:400,y:200,o:1,e:{y:2,o:6}},{b:17700,d:300,y:-28,e:{y:3}},{b:18000,d:300,y:28,e:{y:2}}]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                    [{d:2000,b:5600,t:2}],
                    [{d:2000,b:9300,t:2}],
                    [{d:2000,b:22700}]
                ]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    });
</script>
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb101 .i {position:absolute;cursor:pointer;}
    .jssorb101 .i .ci {fill:#000;}
    .jssorb101 .i .co {fill:#fff;opacity:.3;}
    .jssorb101 .i:hover .co {fill: #6494c2;opacity: 1;}
    .jssorb101 .i:hover .ci {fill:#fff;}
    .jssorb101 .iav .ci {fill:#fff;stroke-width:0;}
    .jssorb101 .iav .co {fill:#46d1d3;opacity: 1;}
    .jssorb101 .i.idn {opacity:.3;}

    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<style>
    .overlay{
        position:absolute;
        background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/footer_lodyas.png);
        -webkit-animation:100s scroll infinite linear;
        -moz-animation:100s scroll infinite linear;
        -o-animation:100s scroll infinite linear;
        -ms-animation:100s scroll infinite linear;
        animation:100s scroll infinite linear;
        top:0;
        left:0;
        width:100%;
        height:200px;
    }



    @-webkit-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-moz-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-o-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @-ms-keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }

    @keyframes scroll{
        100%{
            background-position:0px -3000px;
        }
    }


    .btn-wrap{
        margin:0 auto;
        width:200px;
        padding-top:50px;
    }
    hr{
        color: #6494c2;
        background: rgb(100, 148, 194) !important;
        height: 5px;
        width: 150px;
        border-top:0px;
    }

</style>
<style>

    .section {
        position: relative;
        display: block;
        margin: 0 auto;
        width: 100%;
        overflow: hidden;
        margin: 0;
    }
    @media (min-width: 40.625rem) {
        .section {
            height: 100vh;
        }
    }
    .section .section__inner {
        display: block;
        margin: 0 auto;
        max-width: 1000px;
        height: 100%;
    }

    .section--portfolio {
        color: #333;
        background: #fff;
        min-height: 300px;
        max-height: 80vh;
        border-bottom: 1px solid #ccc;
    }
    @media (min-width: 40.625rem) {
        .section--portfolio {
            max-height: 80vh;
        }
    }
    .section--portfolio + .section--portfolio {
        padding-top: 5vh;
    }
    .section--portfolio .portfolio-description {
        position: relative;
        z-index: 10;
        font-size: .875rem;
        padding: 5vw 1rem 0;
    }
    @media (min-width: 40.625rem) {
        .section--portfolio .portfolio-description {
            width: 35%;
            padding: 8vw 1rem 0;
        }
    }
    .section--portfolio .portfolio-description .pre {
        display: block;

        font-weight: bold;
        color: #333;
        margin: 0 0 1rem 0;
        letter-spacing: -.04em;
        font-size: .875rem;
    }
    .section--portfolio .portfolio-description .link {
        display: inline-block;
        letter-spacing: 1.4px;
        font-size: .75rem;
        color: #333;
        font-style: italic;
        margin: 1rem 0 0;
        border-bottom: 2px solid rgba(0, 0, 0, 0);
    }
    .section--portfolio .portfolio-description .link:hover {
        border-bottom: 2px solid;
    }
    .section--portfolio .portfolio-description a {
        font-family: "nimbus-sans", sans-serif;
    }
    .section--portfolio .portfolio-description p {
        color: #999999;
        line-height: 1.6;
        font-family: "ff-meta-serif-web-pro", serif;
    }
    .section--portfolio img {
        display: block;
        z-index: 1;
        width: 100%;
        height: auto;
        max-width: 1000px;
        transition: all .5s ease;
    }
    .section--portfolio img:hover {
        -webkit-transform: translateY(-1rem);
        transform: translateY(-1rem);
    }
    @media (min-width: 40.625rem) {
        .section--portfolio img {
            position: absolute;
            top: 5vh;
            right: 0;
            left: auto;
            bottom: 0;
            width: 85%;
        }
    }

    @media (min-width: 40.625rem) {
        .section--documenta .portfolio-description {
            margin: 0 0 0 auto;
        }
    }
    @media (min-width: 40.625rem) {
        .section--documenta img {
            right: auto;
            left: -10vw;
        }
    }
    @media (min-width: 54.375rem) {
        .section--documenta img {
            right: auto;
            left: 0;
        }
    }

    .section--gofreaks {
        background: url(http://i45.imgup.net/gofreaks_b18b3.jpg) no-repeat top center;
        background-size: cover;
        text-align: center;
    }
    @media (min-width: 40.625rem) {
        .section--gofreaks .portfolio-description {
            margin: 0 auto;
            width: 40%;
            padding-top: 5vh;
        }
    }
    .section--gofreaks .portfolio-description p {
        color: #515151;
    }
    .section--gofreaks img {
        position: relative;
        top: auto;
        left: auto;
        right: auto;
        bottom: 0;
        margin: 3vw auto 0;
    }

</style>
<script>
    $(document).ready(function () {
        $('#deleteProductModal').on('show.bs.modal', function (event) { // id of the modal with event
            var button = $(event.relatedTarget) // Button that triggered the modal
            var productid = button.data('productid') // Extract info from data-* attributes
            var productname = button.data('productname')

            var title = 'Confirm Delete #' + productid
            var content = 'Are you sure want to delete ' + productname + '?'
            var content1 = '<label for="message-text" class="form-control-label">Work Order:</label><textarea class="form-control" id="message-text"></textarea>';

            // Update the modal's content.
            var modal = $(this)
            modal.find('.modal-title').text(title)
            modal.find('.modal-body').html(content1)

            // And if you wish to pass the productid to modal's 'Yes' button for further processing
            modal.find('button.btn-danger').val(productid)
        })
    })
</script>
<style>
    #amintion {
        width: 100%;
        padding:10px 0;
    }
    .text {
        margin-top:1%;
        text-align: center;
        display: block;
        overflow: hidden;
    }
    .text h1 {
        color: #6494c2;
        font-size: 30px;
        margin-bottom: 1%;
        font-weight: 400;
    }
    .text h2 {
        color: #212844;
        font-size: 30px;
        word-spacing: 5px;
        margin-bottom: 5px;
    }
    .text a {
        background: #6494c2;
        color: white;
        font-size: 16px;
        padding: 12px 43px;
        margin-top: 10px;
        display: inline-block;
        border-radius: 6px;
        font-weight: 400;
    }
    /************************box-section***************************************/
    #box {
        margin-bottom: 50px;
        display: block;
        overflow: hidden;
    }
    .box-1 {
        overflow: hidden;
        display: block;
        box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.6);
        text-align: center;
        margin-top: 100px;
        height:450px;
    }
    /* .box-1 h4 {
         margin-top: 21px;
         font-size: 22px;
         word-spacing: 8px;
     }*/
    .Read.more {
        background: #4e87c2;
        padding:1px 0px;
        color: white !important;
        margin-top: 10px;
        display: block;
        font-size: 18px;
        cursor: pointer;
    }
    /*************************************SECTION-NAME*******************************************/
    #name {
        display: block;
        overflow: hidden;
        text-align: center;
        margin-top: 50px;
    }
    #name h1 {
        color: red;
        font-size: 48px;
        font-weight: 600;
    }
</style>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>
<style>
    #text,
    #shadow {
        position: absolute;
        margin: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size:3em;
        letter-spacing: 10px;
        font-family: Bad Script;
        color: #fff;
    }

    #text {
        color: #333
    }

    #shadow {
        text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
    }

    #glow {
        animation: neon1 linear infinite 2s;
        will-change: opacity;
    }

    #blink {
        animation: blink linear infinite 2s;
    }


    @keyframes neon1 {
        20% {
            opacity: 1;
        }
        80% {
            opacity: 0.6;
        }
    }


    @keyframes blink {
        70% {
            opacity: 1;
        }
        79% {
            opacity: 0;
        }
        81% {
            opacity: 1;
        }
        82% {
            opacity: 0;
        }
        83% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        92.5% {
            opacity: 1;
        }
    }

</style>

<div class="container-fluid"><div class="overlay">
        <h2 class="text-center" style="color:#eee;padding-top:70px;">تصميم وتطوير مواقع الويب</h2>
    </div></div>


        <div class="" style="padding-top:230px;height: auto;background-image: url('photo/marketting/world.png');background-size: cover;background-repeat: no-repeat;">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="svg/loading/static-svg/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-b="0">
                        <img data-u="image" src="img/present/04.jpg" />
                        <div style="position:absolute;top:77px;left:460px;width:460px;height:210px;z-index:0;">
                            <img data-u="caption" data-t="0" style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;" src=" img/present/02/mock-pc.png" />
                            <img data-u="caption" data-t="1" style="position:absolute;top:55px;left:-200px;width:114px;height:144px;z-index:0;" src=" img/present/02/mock-ipad.png" />
                            <img data-u="caption" data-t="2" style="position:absolute;top:88px;left:420px;width:219px;height:120px;z-index:0;" src=" img/present/02/mock-laptop.png" />
                        </div>
                        <div data-u="caption" data-t="3" data-to="0% 100%" style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">
                            <div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">
                                <img data-u="caption" data-t="4" style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;" src=" img/present/02/mock-phone-slider-flat.jpg" />
                            </div>
                            <img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;" src=" img/present/02/mock-phone.png" />
                            <img data-u="caption" data-t="5" style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;" src=" img/present/02/circle-hollow.png" />
                            <img data-u="caption" data-t="6" style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;" src=" img/present/02/circle-solid.png" />
                            <img data-u="caption" data-t="7" style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;" src=" img/present/02/hand.png" />
                            <img data-u="caption" data-t="8" style="position:absolute;top:-44px;left:255px;width:75px;height:20px;z-index:0;" src=" img/present/02/swipe-arrow.png" />
                        </div>
                        <a href="http://www.jssor.com/help/slideshow-transitions.html" target="_blank" style="display:block; position:absolute;top:22px;left:600px;width:320px;height:36px;z-index:0;font-size:22px;color:#ffffff;line-height:36px;">تصميم المواقع الاحترافية</a>
                    </div>
                    <div data-b="1" data-p="170.00">
                        <img data-u="image" src=" img/present/02.jpg" />
                        <div data-u="caption" data-t="9" data-3d="1" style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">
                            <div data-u="caption" data-t="10" data-to="100% 50%" style="position:absolute;top:0px;left:1030px;width:72px;height:72px;z-index:0;background-color:#6494c2;">
                                <div data-u="caption" data-t="11" style="position:absolute;top:0px;left:0px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">All

                                </div>
                            </div>
                            <div data-u="caption" data-t="12" data-to="0% 50%" style="position:absolute;top:0px;left:360px;width:175px;height:72px;z-index:0;background-color:#6494c2;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">Devices

                            </div>
                            <div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:535px;width:230px;height:72px;z-index:0;background-color:#6494c2;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">Supported

                            </div>
                            <div data-u="caption" data-t="14" style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:24px;color:#ffffff;line-height:30px;text-align:center;">ping tech is one of the companies that program responsive websites</div>
                        </div>
                        <div data-u="caption" data-t="15" data-3d="1" style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">
                            <img data-u="caption" data-t="16" style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;" src=" img/present/03/ios.png" />
                            <img data-u="caption" data-t="17" style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;" src=" img/present/03/circle.png" />
                            <div data-u="caption" data-t="18" style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">IOS</div>
                            <img data-u="caption" data-t="19" style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;" src=" img/present/03/android.png" />
                            <img data-u="caption" data-t="20" style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;" src=" img/present/03/circle.png" />
                            <div data-u="caption" data-t="21" style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Android</div>
                            <img data-u="caption" data-t="22" style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;" src=" img/present/03/windows.png" />
                            <img data-u="caption" data-t="23" style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;" src=" img/present/03/circle.png" />
                            <div data-u="caption" data-t="24" style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Windows</div>
                        </div>
                        <div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">
                            <div data-u="caption" data-t="25" style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">
                                <img data-u="caption" data-t="26" style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;" src=" img/present/03/hexagon-hollow-big.png" />
                                <img data-u="caption" data-t="27" style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;" src=" img/present/03/hexagon-solid-yellow.png" />
                                <div data-u="caption" data-t="28" style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:20px;line-height:30px;text-align:center;">All
                                    <br />
                                    Browsers
                                    <br />
                                    Supported
                                </div>
                            </div>
                            <div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="29" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="30" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="31" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/present/03/opera.png" />
                            </div>
                            <div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="32" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="33" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="34" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/present/03/firefox.png" />
                            </div>
                            <div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="35" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="36" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="37" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/present/03/ie.png" />
                            </div>
                            <div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="38" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="39" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="40" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src=" img/present/03/edge.png" />
                            </div>
                            <div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="41" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="42" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="43" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src=" img/present/03/safari.png" />
                            </div>
                            <div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">
                                <img data-u="caption" data-t="44" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src=" img/present/03/hexagon-hollow.png" />
                                <img data-u="caption" data-t="45" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src=" img/present/03/hexagon-solid.png" />
                                <img data-u="caption" data-t="46" style="position:absolute;top:33px;left:28px;width:38px;height:38px;z-index:0;" src=" img/present/03/chrome.png" />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb101" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                            <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>
           <br><br>

        </div>
<section class="section section--portfolio section--left" id="thepepperhill">
   <!-- <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                   <div class="container">
                       <h4 class="text-center"></h4>
                       <p>
                           الموقع الالكتروني هو مجموعة من الصفحات على شبكة الانترنت ممكن أن تكون خاصة بشخص أو بشركة ممكن أن يستخدم الموقع الالكتروني لأغراض تجارية  أو موقع يقدم خدمات أو موقع ترفيهي  ويعتبر الموقع الالكتروني له أهمية كبيرة بالنسبة لمعظم الشركات لأنه واجهته على الانترنت يقوم بعرض منتجاته أو خدماته طوال الوقت فتستطيع من خلال موقعك الالكتروني جذب أكبر عدد من الزوار و المتابعين وزيادة مبيعاتك  ويتكون الموقع الالكتروني من الصفحات منهم الصفحة الرئيسية ( Home page ) وتحتوي الصفحات الخاصة بالموقع الالكتروني على محتوى أما يكون نصوص أو صور ( ثابتة – متحركة )  أو فيديوهات
                       </p>
                   </div>

                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteProductModal" data-productid="3" data-productname="Product 3">تعريف شامل بالموقع الالكتروني</button>-->
    <div class="section__inner text-center" id="amintion">
        <div class="portfolio-description wow wow bounceInLeft" data-wow-duration="2s">
                <a class="pre" href=" " style="font-size: 24px;text-align: center">Web Site</a>
            <p style="font-size: 20px;padding-right:120px;">الموقع الالكتروني هو مجموعة من الصفحات على شبكة الانترنت ممكن أن تكون خاصة بشخص أو بشركة يمكن أن يستخدم  لأغراض تجارية  أو لتقديم خدمات أومواقع تعليمية وترفيهية وأخبارية .</p>
            <!--<a href=" " class="link" style="font-size: 24px;">thepepperhill.com</a>-->

        </div>


        <img src="http://o31.imgup.net/ph3b9a.jpg" alt="The Pepper Hill" class=" wow wow bounceInRight" data-wow-duration="2s">
    </div>
</section>

<section class="section section--portfolio section--documenta" id="documenta">

    <div class="section__inner text-center" >
        <div class="portfolio-description wow wow bounceInRight" data-wow-duration="2s">
            <a class="pre" href=" " style="font-size: 24px;">SEO</a>
            <p style="font-size: 20px;">معناها تهيئة المواقع لمحركات البحث ومن أشهر محركات البحث جوجل و ياهو و بينج وغيرها من محركات البحث</p>
            <!--<a href=" " class="link" style="font-size: 24px;">thepepperhill.com</a>-->
        </div>

        <img src="http://r45.imgup.net/documentaeb23.jpg" alt="documenta-historie.de" class=" wow wow slideInUp" data-wow-duration="1s">>
    </div>
</section>

<section class="section section--portfolio section--gofreaks" id="gofreaks">

    <div class="section__inner">
        <div class="portfolio-description wow wow bounceInRight" data-wow-duration="2s">
            <a class="pre" href=" " style="font-size: 24px;"></a>
            <p style="font-size: 20px;">
              إذاً   من العناصر المهمة  لأي شركة أو لأي نشاط هو تصميم موقع الكتروني يكون واجهته
                أو متجره الذي يعرض فيه منتجاته أو يقدم خدماته  على الانترنت خلال الأربع و عشرون
                ساعة ليلاً ونهاراً
            </p>
            <!--<a href=" " class="link" style="font-size: 24px;">thepepperhill.com</a>-->
        </div>

        <img src="http://n46.imgup.net/gofreaksb76b.png" alt="gofreaks.eu">
    </div>
</section>
<section style="height: auto;direction: rtl">
    <div class="container">
        <br><br>

        <div class="text-center  col-md-4  col-xs-12 wow wow bounceInLeft">
            <img src="photo/marketting/dynamic-website.png" class="img-responsive">
            <h3 class=""  style="display: inline-block;">

                الموقع الالكتروني الديناميكي

            </h3>
            <br>
            <p class=" " style="font-size: 14px;direction: rtl">
                هو موقع تصميم متغير يستخدم العديد من لغات البرمجة فبالإضافة إلى لغات ((XHTML و CSS) لغات (  PHP و MySQL ) يستطيع صاحب الموقع تغيير كل شيء فيه من خلال لوحة تحكم (  ( Adminوذلك بعمل كلمة سر واسم مستخدم ويستطيع صاحب الموقع عمل أكثر من كلمة سر و اسم مستخدم لأكثر من موظف لوضع منتجات أو أخبار أو التحديث في الموقع
        </div>
        <div class=" text-center col-md-4  col-xs-12 wow wow bounceInLeft" style="padding-top: 100px;">
            <img src="photo/marketting/static-webdesign.png" class="img-responsive">
            <h3 class="text-center "  style="display: inline-block;">

                الموقع الالكتروني الستاتيكي

            </h3>
            <br>
            <p class=" " style="font-size: 14px;direction: rtl">
                هو تصميم موقع مكون من مجموعة صفحات ثابتة تبلغ من 4 إلى 8 صفحات وبرمجته ثابتة وإذا أراد صاحب الموقع عمل أي تغيير في الموقع فأنه يرجع إلى الشركة التي قامت بتصميم الموقع للتغير لا يوجد به لوحة تحكم ولغة برمجته سهلة وبسيطة صفحته ( HTML  ) وليس ( ( PHP يستخدم لأصحاب الأنشطة الثابتة و المحددة يتميز بسرعة التنفيذ
        </div>
        <div class="text-center wow wow bounceInRight col-md-4" style="direction: rtl;" data-wow-duration="1s">
            <h3 class=" neon "  style="display: inline-block;">

                الموقع الالكتروني وأنواعه

            </h3>
            <br>
            <p class=" " style="font-size: 14px;direction: rtl">
                الموقع الالكتروني هو مجموعة من الصفحات على شبكة الانترنت ممكن أن تكون خاصة بشخص أو بشركة ممكن أن يستخدم الموقع الالكتروني لأغراض تجارية  أو موقع يقدم خدمات أو موقع ترفيهي  ويعتبر الموقع الالكتروني له أهمية كبيرة بالنسبة لمعظم الشركات لأنه واجهته على الانترنت يقوم بعرض منتجاته أو خدماته طوال الوقت فتستطيع من خلال موقعك الالكتروني جذب أكبر عدد من الزوار و المتابعين وزيادة مبيعاتك  ويتكون الموقع الالكتروني من الصفحات منهم الصفحة الرئيسية ( Home page ) وتحتوي الصفحات الخاصة بالموقع الالكتروني على محتوى أما يكون نصوص أو صور ( ثابتة – متحركة )  أو فيديوهات         </p>
            <p class="wow wow fadeInRight" data-wow-duration="3s"  style="font-size: 16px;direction: rtl">

            </p>
            <img src="photo/marketting/web.png" class="img-responsive">
        </div>

    </div>
    <br><br>
</section>
<style>

    #custom_carousel .item  .top {
        overflow:hidden;
        max-height:300px;
        margin-bottom:15px;
    }
    #custom_carousel .item {

        color:#000;
        background-color:#fff;
        padding:20px 0;
        overflow:hidden
    }
    #custom_carousel .item img{
        width:100%;
        height:auto
    }

    #custom_carousel .izq
    {
        position:absolute;
        left: -25px;
        top:40%;
        background-image: none;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px;
        height: 40px;
        width : 40px;
        margin-top: 30px;
    }
    /* Next button  */
    #custom_carousel .der
    {
        position:absolute;
        right: -25px !important;
        top:40%;
        left:inherit;
        background-image: none;
        background: none repeat scroll 0 0 #222222;
        border: 4px solid #FFFFFF;
        border-radius: 23px;
        height: 40px;
        width : 40px;
        margin-top: 30px;
    }
    #custom_carousel .controls{

        overflow:hidden;
        padding:0;
        margin:0;
        white-space: nowrap;
        text-align: center;
        position: relative;
        background:#fff;
        border:0;
    }
    #custom_carousel .controls .nav{

        padding:0;
        margin:0;
        white-space: nowrap;
        text-align: center;
        position: relative;
        background:#fff;
        width: auto;
        border: 0;
    }
    #custom_carousel .controls li {
        transition: all .5s ease;
        display: inline-block;
        max-width: 100px;
        height: 90px;
        opacity:.5;
    }
    #custom_carousel .controls li a{
        padding:0;
    }
    #custom_carousel .controls li img{
        width:100%;
        height:auto
    }

    #custom_carousel .controls li.active {
        background-color:#fff;
        opacity:1;
    }
    #custom_carousel .controls a small {
        overflow:hidden;
        display:block;
        font-size:10px;
        margin-top:5px;
        font-weight:bold
    }
</style>
<script>
    $(document).ready(function(ev){
        var items = $(".nav li").length;
        var leftRight=0;
        if(items>5){
            leftRight=(items-5)*50*-1;
        }
        $('#custom_carousel').on('slide.bs.carousel', function (evt) {


            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
        })
        $('.nav').draggable({
            axis: "x",
            stop: function() {
                var ml = parseInt($(this).css('left'));
                if(ml>0)
                    $(this).animate({left:"0px"});
                if(ml<leftRight)
                    $(this).animate({left:leftRight+"px"});

            }

        });
    });
</script>

<section style="height: auto;direction: rtl;background-color: #eeeeee">
    <div class="container">
        <br><br>


        <div class="text-center  col-md-8 col-xs-12 wow wow bounceInLeft" style="padding-top: 40px;">


                <h3 class=""  style="display: inline-block;">

                    السيو seo search engine optimization

                </h3>
                <br>
                <p class=" " style="font-size: 14px;direction: rtl">
                    معناها تهيئة المواقع لمحركات البحث ومن أشهر محركات البحث جوجل و ياهو و بينج ( Google – Yahoo – Bing ) وغيرها من محركات البحث , فعندما يريد أي مستخدم للانترنت البحث عن إجابة سؤال يريد أن يسأله أو البحث عن كورسات أو دورات للتعلم أو البحث عن منتج أو خدمة أو عنوان فإنه يتجه مباشرةً إلى محركات البحث و التي أشهرها محرك البحث جوجل ( Google ) ويكتب فيه ما يريد الاستفسار عنه ليقوم بعد ذلك محرك البحث بإظهار مجموعة من الصفحات تحتوي على العديد من النتائج المختلفة ولكن أغلب المستخدمين لا يتفحصون إلا الصفحات الأولى من النتائج وخاصة الصفحة الأولى لذلك يتنافس العديد من الشركات أو من يقوم بتقديم خدمة أو منتج للظهور في الصفحة الأولى فتجد أن من يظهر في أول ثلاث نتائج يأخذ نصيب الأسد من الزوار و مستخدمي الانترنت
            <p class=" " style="font-size: 14px;direction: rtl">
                لابد من تهيئة المواقع داخلياً و هو ما يعرف ( on- page seo ) ويعتمد ذلك عل كيفية كتابة المحتوى و أن يكون حصري و جيداً و أيضاً تهيئة المواقع خارجياً ( off-page seo ) ويعتمد ذلك نشر الروابط ( backlinks ) في المواقع و المنتديات
            </p>
        </div>
        <div class="text-center  col-md-4  col-xs-12 wow wow bounceInLeft">
            <img src="photo/marketting/SEO-1.png" class="img-responsive">
        </div>
</section>
<section>
    <div class="container-fluid">
        <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="direction: rtl;">
                <div class="item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-6 col-xs-12"><img src="photo/marketting/hostingslider6.png" class="img-responsive"></div>
                            <div class="content col-md-6 col-xs-12">
                                <h3>لمحة عن الدومين </h3>
                                <p>
                                    ماهو الدومين سيرفر DNS. الدومين سيرفر هو السجل المركزي الذي يحتفظ بأسم النطاق و يعمل على إستبداله بعنوان بروتوكول أنترنت IP, و عندما تقوم بكتابة اسم دومين موقع ما فى المتصفح يعمل الدومين سيرفر على ترجمة ما قمت بكتابته لرقم الأي بي IP الخاص بهذا الدومين ليتم تحميل الموقع أمامك و تبداء التصفح.
                                </p>
                                <p>
                                    انواع الدومين
                                </p>
                                <p>
                                    نوع الدومين خاص بالجزء الأخير الخاص بالدومين حيث يتكون الدومين من 3 اجزاء على النحو التالي:
                                </p>
                                <p>Com – مُخصص لإستخدام الشركات و المؤسسات التجارية (commercial business) . ( الشائع و أكثر انواع الدومين إستخداماً)</p>
                                <p>.Net –  للمؤسسات التى تتخذ من الإنترنت مقر لها (network organizations)</p>
                                <p>.Org – خاص بالمنظمات الحكومية و الخاصة (organizations)</p>
                                <p>.Edu – للمؤسسات التعليمية و المعاهد (educational institutions)</p>
                                <p>Gov –  المؤسسات الحكومية (government agencies)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-6 col-xs-12"><img src="photo/marketting/monitoring-1024x426.png.webp" class="img-responsive"></div>
                            <div class="content col-md-6 col-xs-12">
                                <br><br><br>
                                <h3>نظام مراقبة مستمر</h3>
                                <p>
                                    تعتمد استضافتنا على احدث انظمة مراقبة سيرفراتنا وسيرفرات عملائنا بشكل مستمر وعلى مدار اليوم كى نستطيع التدخل بشكل مباشر وقت حدوث اى مشكلة حتى وان لم يخبرنا العميل
                                </p>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-6 col-xs-12"><img src="photo/marketting/servers-hero-1.png.webp" class="img-responsive"></div>
                            <div class="content col-md-6 col-xs-12">
                                <br><br><br>
                                <h3>ما هى استضافة المواقع؟</h3>
                                <p>
                                    استضافة المواقع هى خدمة توفر لك تنظيم و تخزين بعض الملفات لنشر موقع ويب او صفحة انترنت.

                                    القصد منها مشاركة بيانات الموقع مع المستخدمين داخل شبكة الإنترنت العالمية.

                                    هذا هو المقصود بمصطلح إستضافة مواقع، أما شركة استضافة مواقع هى التى تقوم بتوفير خدمة الإستضافة و السيرفرات للأفراد و الشركات.

                                    و تعتبر استضافة المواقع أحد أضلاع المثلث الرئيسي للحصول على موقع انترنت يعمل على شبكة الانترنت و الذي يتكون من:تصميم موقع وشراء دومين وشراء استضافة
                                </p>
                                <p>
                                    سيرفر استضافة المواقع عبارة عن جهاز كمبيوتر CPU مثل التى تعمل به فى منزلك.

                                    بإختلاف المواصفات الخاصة للمكونات الرئيسية (Hardware) مع إضافة بعض البرامج الخاصة (Software) لتحويله إلى سيرفر استضافة Hosting Server (خادم) لإستخدامه فى تخزين و مشاركة البيانات و المعلومات على شبكة محلية (Local) او عالمية مثل الإنترنت.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-6 col-xs-12"><img src="photo/marketting/ddos-1.png.webp" class="img-responsive"></div>
                            <div class="content col-md-6 col-xs-12">
                                <br><br><br>
                                <h3>حماية من الهجمات</h3>
                                <p>
                                    تتيح استضافتنا أفضل خدمة ما بعد البيع،  عن طريق التواصل المستمر و العمل على حل أي مشكلة أو توفير تعديلات إضافية لفتح جسر من التواصل بيننا وبين عملائنا الكرام، لأن عملائنا هم رأس مالنا الحقيقي.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-6 col-xs-12"><img src="photo/marketting/web-hosting-types.png" class="img-responsive"></div>
                            <div class="content col-md-6 col-xs-12">
                                <h3>أنواع الاستضافة من حيث السيرفر</h3>
                                <p>
                                    تقسم انواع الاستضافة إلى قسمين القسم الاول وفقاً لنوع السيرفر الرئيسي. و القسم الثاني حسب نظام التشغيل (Operating System)
                                </p>
                                <p>
                                    من حيث السيرفر
                                </p>
                                <p>سيرفر كامل Dedicated Server</p>
                            </div>
                            <p>سيرفر إفتراضي (Virtual Privet Server (VPS </p>
                        <p>
                            استضافة سحابية cloud Hosting
                        </p>
                            <p>
                                استضافة مشتركة Shared Hosting

                            </p>
                            <p>
                                استضافة ووردبريس WordPress Hosting
                            </p>
                        </div>
                    </div>
                </div>


                <!-- End Item -->
            </div>
            <a data-slide="prev" href="#custom_carousel" class="izq carousel-control">‹</a>
            <a data-slide="next" href="#custom_carousel" class="der carousel-control">›</a>
            <!-- End Carousel Inner -->
            <div class="controls draggable ui-widget-content col-md-6 col-xs-12">
                <ul class="nav ui-widget-header">

                    <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="photo/marketting/hostingslider6.png"><small>Slide One</small></a></li>
                    <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="photo/marketting/monitoring-1024x426.png.webp"><small>Slide Two</small></a></li>
                    <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="photo/marketting/servers-hero-1.png.webp"><small>Slide Three</small></a></li>
                    <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="photo/marketting/ddos-1.png.webp"><small>Slide Four</small></a></li>
                    <li data-target="#custom_carousel" data-slide-to="4"><a href="#"><img src="photo/marketting/web-hosting-types.png"><small>Slide Five</small></a></li>


                </ul>
            </div>
        </div>
        <!-- End Carousel -->
    </div>
</section>
<br><br><br>
<style>
    .product:hover .gradient {
        opacity: 1;
        height: 100%;
    }
    .product .gradient {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        position: absolute;
        width: 100%;
        height: 0;
        left: 0;
        bottom: 0;
        z-index: -1;
        background: #0a0808;
        background: -moz-linear-gradient(to bottom,  rgba(51,137,255,1) 0%,rgba(109,51,255,1) 100%);
        background: -webkit-linear-gradient(to bottom,  rgba(51,137,255,1) 0%,rgba(109,51,255,1) 100%);
        background: linear-gradient(to bottom,  rgba(51,137,255,1) 0%,rgba(109,51,255,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0a0808',endColorstr='#ff0013',GradientType=0);
        opacity: 0;
    }
    .product:after {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translate3d(-50%,0,0);
        -moz-transform: translate3d(-50%,0,0);
        transform: translate3d(-50%,0,0);
        -o-transform: translate3d(-50%,0,0);
        background-color: #fff;
        width: 4px;
        height: 0;
    }



</style>
<section style="background-image: url('photo/marketting/world.png')">
    <br><br>
    <h3 class="text-center">متطلبات ضرورية لتصميم الويب سايت</h3><br><br>
    <div class="container py-5" >

        <div class="row">
            <div class="col-lg-4">
                <div class="product ">

                    <img src="http://www.webcoderskull.com/img/services/htmlcsspsd.png" class="img-fluid wow wow bounceInLeft"
                         data-wow-duration="2s" alt="" style="-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;">
                    <div class="gradient"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product ">
                    <div class="gradient" style=""></div>
                    <img src="http://www.webcoderskull.com/img/services/graphic-design.png" class="img-fluid wow wow bounceInRight" data-wow-duration="3s" alt="" style="

		-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;

">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product ">
                    <div class="gradient"></div>
                    <img src="http://www.webcoderskull.com/img/services/php-mysql.png" class="img-fluid wow wow bounceInLeft"
                         data-wow-duration="1s" alt=""style="-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;">
                </div>
            </div>

            <!--<div class="col-12 text-center mt-5">
                <a href="http://www.webcoderskull.com" class="btn btn-primary text-center" target=_blank>Know More</a>
            </div>-->
        </div>
    </div>
</section>
<br><br>



<?php include 'include/footer.php'?>
