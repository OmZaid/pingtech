
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Demo CSS-->

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/owl.carousel.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="dist/zoomslider.css"/>
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
   <!--<link rel="stylesheet" href="css/demo.css" type="text/css"/>-->
    <!--<link rel="stylesheet" href="css/demo.css" />-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="lib/css/animate.css"/>
    <link rel="stylesheet" href="css/childpage.css"/>
    <link rel="stylesheet" href="css/chat.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="lib/css/jquery.rotatingSlideshow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
    <!--Font Awesome-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.8/css/all.css'/>
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Prettify-->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <!--Menu Script-->
   <!-- <script src="js/swipe.js"> </script>-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <style>
        /* Basic styling */
        html, body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            width: 100%;
            overflow-x: hidden;

        }
        h1, h2, h3, h4, h5, h6 {

        }



        #demo-1 {
            position: relative; /* can either be relative, absolute or fixed. If position is not set (i.e. static), it would be set to "relative" by script */
            overflow: hidden; /* to bound the empty top space created by inner element's top margin */
            width: 100%;
            min-height: 400px;
            background-color: #999;
        }
        .demo-inner-content {
            position: relative; /* if position is not set, the script will set it to 'relative'. */
            z-index: 2; /* if z-index is not set, the script will set it to '2'. */
            margin: 180px auto;
            padding: 40px;
            max-width: 600px;
            color: #fff;
            text-align: center;
            font-size: 1.5em;
        }
        .demo-inner-content h1 {
            font-size: 2.5em;
            margin: 0;
        }
    </style>
    <script>
        new WOW().init();
    </script>
    <!--Demo Only Script-->

    <!-- BEGIN BUTTON 1 -->
    <style>
        .btn-contain {

            min-height: 100px;
        }
        .btn-diagonal-contain {
            max-width: 160px;
            text-decoration:none;
        }
        .btn-diagonal {
            outline: none;
            cursor: pointer;
            max-width: 270px;
            min-height: 50px;
            background: transparent;
            border: 3px solid #6394ff;
            -webkit-transform: skew(-25deg);
            transform: skew(-25deg);
            margin: 10px auto;
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
        }
        .btn-diagonal-contain:hover .btn-diagonal {
            -webkit-transform: skew(0deg);
            -moz-transform: skew(0deg);
            -o-transform: skew(0deg);
            -ms-transform: skew(0deg);
            transform: skew(0deg);
            border: 3px solid white;
        }
        .btn-diagonal-inner {

            font-weight:bold;
            text-align: center;

            text-transform: uppercase;
            text-decoration: none;
            position: relative;
            top: 50px;
            font-weight: bold;
            color: #6394ff;
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
        }
        .btn-diagonal-contain:hover  .btn-diagonal-inner {
            color: rgba(255,255,255,1);
        }
    </style>
    <style class="cp-pen-styles">@import url("//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css");
        .menu {
            position:absolute;
            top:125px;
            left: 0;
            height: 100%;
            list-style-type: none;
            margin: 0;
            padding: 0;
            background: transparent;
        }
        .menu li a{
            display:block;
            /*height:em;*/
            width:3em;
            text-indent:-250em;
            line-height:5em;
            text-align:center;
            color: #6494c2;
            background: transparent;
            position: relative;
            border-bottom: 1px solid #6494c2;
            transition: background 0.3s ease-in-out;
        }
        .menu li a:before {
            font-family: FontAwesome;
            speak: none;
            text-indent: 0em;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-size: 1.4em;

        }
        .menu li a.search:before {
            content: "\f201";
        }
        .menu li a.archive:before {
            content: "\f121";
        }
        .menu li a.pencil:before {
            content: "\f040";
        }
        .menu li a.contact:before {
            content: "\f20e";
        }
        .menu li a.about:before {
            content: "\f007";
        }
        .menu li a.home:before {
            content: "\f015";
        }
        .menu li a:hover{
            background: #6494c2;
            color: #fff;

        }
        .menu li.current a {
            background: #6494c2;
            color: #fff;
        }
        .menu li a.active {
            background:#6494c2;
            color: #fff;
        }
        .menu li a.active:after{
            position:absolute;

            top:0;
            content:"";
            border:2.5em solid transparent;
            border-left-color:#6494c2;
            border-width: 2.5em 1em
            color: #fff;
        }
        .menu li{
            position:relative;
        }
        .menu li:after{
            content: attr(title);
            position:absolute;
            left:3em;
            top:0;
            height:5em;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            text-transform:uppercase;
            background:transparent;
            padding:1em;
            transition: all 0.3s ease-in-out;
            visibility:hidden;
            opacity:0;
            color:#fff;
        }
        .menu li:hover:after{
            visibility:visible;
            opacity:1;
            width:150px;

        }
        @media screen and (max-height: 34em){
            .menu li{
                font-size:70%;
            }
        }
    </style>
<style>
    #topo {
        z-index: 15;
        background-color: transparent;
        width: 100%;
        position: fixed;

    }#logo-topo img {
             margin: 2.8% 0 4% 0;
     }#menu-topo{
          border-top: 1px solid #6494c2;
          text-align: center;
          padding: 0;
      }#menu-topo li{
           width: 100%;
           list-style: none;
       }#menu-topo li:hover{
        }#menu-topo li a{
             display: block !important;
             width: 100%;
             font-size: 1em;
             padding:2% 0;
             font-weight: bold;
             color: #eee;
         }#menu-topo li a:hover{
              background-color:#D6D6DC;
              text-decoration: none;
               color: #1C79AD;
          }.btn-collapse {
               width:50px;
               height:50px;
               position: relative;
               padding:0.5% 1%;
               float: right;
               margin-top: 3.5%;
           }.lista-collapse {
                width: 100%;
                height:2px;
                background-color: #1C79AD;
                -ms-transition: all 0.5s;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
                transition: all 0.5s;
                position: absolute;
            }.lista-collapse:nth-child(1){top:0;}
    .lista-collapse:nth-child(2){top:14px;}
    .lista-collapse:nth-child(1){top:25px;}

    .botao-lista-cima {
        -ms-transform: rotate(-50deg)
        -webkit-transform: rotate(-50deg);
        -moz-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }.botao-lista-baixo {
         -ms-transform: rotate(50deg);
         -webkit-transform: rotate(50deg);
         -moz-transform: rotate(50deg);
         transform: rotate(50deg);
     }.hidden {
          visibility: hidden;
      }.lista-collapse.botao-lista-cima {
           top: 5px;
       }.lista-collapse.botao-lista-baixo {
            top:5px;
        }
</style>
    <script>
        $(document).ready(function(e) {
            $('#menu-topo').hide();
            var menuaberto = false;
            $('.btn-collapse').click(function(event) {
                event.preventDefault();
                $('#menu-topo').toggle('');
                if(menuaberto == true){
                    menuaberto = false;
                    $(".lista-collapse:nth-child(1)").removeClass('botao-lista-cima');
                    $(".lista-collapse:nth-child(2)").removeClass('hidden');
                    $(".lista-collapse:nth-child(3)").removeClass('botao-lista-baixo');
                }else {
                    menuaberto = true;
                    $(".lista-collapse:nth-child(1)").addClass('botao-lista-cima');
                    $(".lista-collapse:nth-child(2)").addClass('hidden');
                    $(".lista-collapse:nth-child(3)").addClass('botao-lista-baixo');
                }
            });
        });
    </script>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=8d002806-8f6b-4584-97d0-b461baf45c58"> </script>
    <!-- End of  Zendesk Widget script -->

</head>
<body>

<div id="topo">
    <div class="container-fluid" style="padding-left: 20px;padding-right: 25px;">
        <div class="row">
            <div class="col-md-6 col-ms-6 col-xs-6" id="logo-topo">
                <a href="index.php"><img src="img/logo.png" style="height: 60px;width: 60px;"/> </a>
            </div>
            <div class="col-md-6 col-ms-6 col-xs-6" id="abre-menu-topo" style="padding-top: 15px;">

                <a href="#" class="btn-collapse" >
                    <div class="lista-collapse"></div>
                    <div class="lista-collapse"></div>
                    <div class="lista-collapse"></div>
                </a>

            </div>
        </div><!--Fim da Row1 -->
        <div class="row pull-right" style="">
            <ul id="menu-topo" style="background-color:#111;opacity: 0.9;height: 330px;width: 300px;line-height: 30px;">
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="about.php">من نحن</a></li>
                <li><a href="network.php"> الانترنت والشبكات</a></li>
                <li><a href="graphic.php"> التصميم الجرافيكي</a></li>
                <li><a href="webdesign.php">تطوير الويب</a></li>
                <li><a href="digital.php">التسويق الالكتروني</a></li>
               <!-- <li><a href="contact.php">تواصل معنا</a></li>-->
                <!--<li><a href="#contato" class="dentro">FALE CONOSCO</a></li>-->
            </ul>
        </div>
    </div><!--Fim da coontainer -->
</div><!--Fim do topo -->

