<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{url('images/fab.png')}}">
        <title>Dr. Paino</title>
        <link href="{{url('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{url('bootstrap/jquery.min.js')}}" type="text/javascript"></script>       
        <script src="{{url('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
        <link href="bootstrap/css/style-menu-play.css" rel="stylesheet" type="text/css"/>
        <!--<link href="bootstrap/logoplay.css" rel="stylesheet" type="text/css"/>-->
        <!--<link rel='stylesheet' id='contact-form-7-css' href='css/styles.css' type='text/css' media='all' />-->
        <link href="{{('fonts/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet' id='rs-plugin-settings-css' href="css/slider/settings.css" type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-inline-css' href="css/slider/rs-plugin-settings-inline.css" type='text/css' media='all' />
        <link rel='stylesheet' id='cms-plugin-stylesheet-css' href="{{url('css/cms-style.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='zkraven-style-css' href="{{url('css/style.css')}}" type='text/css' media='all' />
        <!--[if lt IE 10]>
          <link property="cms-stylesheet" rel='stylesheet' id='zkraven-ie-css'  href='http://raven.zooka.io/demo/wp-content/themes/wp_raven/assets/css/ie.css?ver=screen' type='text/css' media='all' />
          <![endif]-->
        <link rel='stylesheet' id='cms-widget-instagram-css' href="{{url('css/cms_instagram.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='widget_cart_search_scripts-css' href="{{url('css/cms_cart_search.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css' href="{{url('css/js_composer.min.css')}}" type='text/css' media='all' />
        <script type='text/javascript' src="{{url('js/jquery.js')}}"></script>
        <script type='text/javascript' src="{{url('js/jquery-migrate.min.js')}}"></script>
        <!--<script type='text/javascript' src='js/slider/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='js/slider/jquery.themepunch.revolution.min.js'></script>
        <script type="text/javascript" src='js/slider/revolution.extension.slideanims.min.js'></script>
        <script type="text/javascript" src="js/slider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/slider/revolution.extension.navigation.min.js"></script>-->
        <!--[if lte IE 9]>
          <link rel="stylesheet" type="text/css" href="http://raven.zooka.io/demo/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
          <![endif]-->
        <!--[if IE  8]>
          <link rel="stylesheet" type="text/css" href="http://raven.zooka.io/demo/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
          <![endif]-->
        <link rel='stylesheet' id='common-css' href="{{url('css/common.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='index-custom-vc-css' href="{{url('css/index-custom-vc.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='custom-css'  href="{{url('css/custom.css')}}" type='text/css' media='all' />
        <script type='text/javascript' src="{{url('js/modernizr.min.js')}}"></script> 
        <link rel='stylesheet' id='custom-css' href="{{url('css/custom.css')}}" type='text/css' media='all' />
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        <link href="{{url('http://fonts.googleapis.com/css?family=Lato:900')}}" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        <script src="{{url('js/html5shiv.js')}}"></script>
        <script src="{{url('js/flip-carousel.js')}}"></script>
        <link rel="stylesheet" href="{{url('css/bootstrap-submenu.min.css')}}">
        <script src="{{url('js/bootstrap-submenu.min.js')}}" defer></script>
        <link href="{{url('css/flip-carousel.css')}}" rel="stylesheet" />
        <style>
        /*img {
            max-width: 100%;
            height: auto;
            width: auto\9;
        }*/
        .modal-body {
            padding: 0px !important;
        }
        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }
        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }
        .titlePai{
            text-align: center;
            font-size: 2.5em;
            text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 3px 0 #b9b9b9,
               0 3px 0 #aaa,
               0 3px 1px rgba(0,0,0,.1),
               0 0 3px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 3px rgba(0,0,0,.2),
               0 3px 3px rgba(0,0,0,.25),
               0 3px 3px rgba(0,0,0,.2),
               0 3px 3px rgba(0,0,0,.15);
        }
        .subtit{
            text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 3px 0 #b9b9b9,
               0 3px 0 #aaa,
               0 3px 1px rgba(0,0,0,.1),
               0 0 3px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 3px rgba(0,0,0,.2),
               0 3px 3px rgba(0,0,0,.25),
               0 3px 3px rgba(0,0,0,.2),
               0 3px 3px rgba(0,0,0,.15);
        }
        .contscr{
            text-align: justify;
            font-size: 16px;
            overflow: scroll;
            overflow-x:hidden;
            height: 280px;
            padding: 10px;
        }
        .contnoscr{
            text-align: justify;
            font-size: 16px;
            height: 280px;
            padding: 10px;
        }
        .carrr article {
            width: 380px;
        }
        .carrr article > img {
            padding-bottom: 20px;
        }
        article > h1,h2{
            font-size: 28px !important;
            margin-top: 0px !important;
        }
        .target{
                width: 800px; height: 570px; margin: auto 0;margin-left: 10px;
            }
        .tt{
            margin: 10px;
            }
        .gg{
            padding-top: 80px;
        }
        .imgt{
                width: 400px;
                height: 400px;
            }
        .imga{
            display: block;
            margin: auto auto;
            width:350px;
        }
        .im{
            padding-top: 35%;
        }
        .iim{
            padding-top: 38%;
        }
        .iiim{
            padding-top: 45%
        }
        .iiiim{
            padding-top: 15%
        }
        .heas{
            background: url(images/cuidado.png) no-repeat;
            max-width: 100%;
            height: auto;
            width: auto\9;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            opacity: 0.7;
            margin-left: 0px;
            margin-right: 0px;
        }
        .fz{
             padding: 5em;
        }
        .divf{
            height: 700px;
        }
        .btnLogin{
            text-align: center;
            padding: 10px 120px 10px 120px; 
            margin: 40px 230px;
            font-size:20px !important;
            border-radius: 25px;
            box-shadow: 5px 5px 5px #444242;
        }
        .btnRegister{
            text-align: center;
            padding: 10px 100px 10px 100px; 
            margin: 40px 200px;
            font-size:20px !important;
            border-radius: 25px;
            box-shadow: 5px 5px 5px #444242;
        }
        .ewq{
            color: white !important;
            line-height: 50px !important;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #4c4848, 0 3px 0 #4c4848, 0 4px 0 #4c4848, 0 5px 0 #4c4848, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
        }
        .tyti{
            padding-top: 30px !important;
        }
        .fds{
            height: 201px;
            width: 125px;
        }
        .qscw{
            padding-left: 16% !important;
        }
        @media (max-width: 767px) {
            .qscw{
                padding-left: 3% !important;
            }
            .fds{
                height: 180px;
            }
            .subtit{
                font-size: 0.8em !important;
            }
            .tyti{
                padding-top: 0px !important;
            }
            .sazz{
                margin-left: 12px;
            }
            .ewq{
            line-height: 20px !important;
            }

            .fz{
                font-size: 1.5em !important;
            }
            .saff{
                height: 110px !important;
            }
            .safa{
                padding-top: 15px;
            }
            .safb{
                padding-top: 30px;
            }
            .iim{
                padding-top: 30% !important;
                padding-bottom: 40% !important;
            }
            .iiiim{
                padding-bottom: 20% !important;
            }
            .qwdc{
                height: 100%;
            }
            .tett{
                padding-top: 70px;
            }
            .carrr article {
                width: 300px;
            }
            .flip-carousel > ul > li{
                width: 300px;
            }
            article {
                width: 300px;
            }
            article img{
                max-width: 260px;
            }
            article > h1, h2{
                font-size: 22px !important;
            }
            .geg{
                font-size: 15px;
            }
            .btnLogin{
                text-align: center;
                padding: 10px 80px 10px 80px; 
                margin: 10px 50px;
                font-size:20px !important;
            }
            .btnRegister{
                text-align: center;
                padding: 10px 60px 10px 60px; 
                margin: 10px 50px;
                font-size:20px !important;
            }
            .divf{
                height: auto;
            }
            .fz{
                 padding: 1em
            }
            /*.heas{
                background-size: 400px 200px;
            }*/
            .target{
                padding-top: 20px;
                width: 95%; height: 600px; margin: auto 0;margin-left: 10px;
            }
            .tt{
                margin: 0px;
            }
            .gg{
                padding-top: 10px;padding-left: 0px;
            }
            .imgt{
                width: 100%;
                height: 100%;
            }
            .imga{
                padding-top: 10%;
                padding-bottom: 10%;
            }
            .tre{
                /*margin: 0px !important;*/
            }
        }
        ::-webkit-input-placeholder {
           color: #fff;
        }
        :-moz-placeholder { /* Firefox 18- */
           color: #fff;  
        }
        ::-moz-placeholder {  /* Firefox 19+ */
           color: #fff;  
        }
        :-ms-input-placeholder {  
           color: #fff;  
        }
        ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
            ::-webkit-scrollbar-button:start:decrement,
            ::-webkit-scrollbar-button:end:increment  {
                display: none;
            }
            ::-webkit-scrollbar-track-piece  {
                background-color: #fff;
                -webkit-border-radius: 6px;
            }
            ::-webkit-scrollbar-thumb:vertical {
                -webkit-border-radius: 6px;
                background: #5d6f94 url() no-repeat center;
            }
            .seccion{
                padding-top: 5em;
                padding-left: 0px;
                padding-right: 0px;
            }
            .ir-arriba {
                position: fixed;
                display:inline;
                padding:0.5em 0.65em 0.5em 0.65em;
                border-radius: 5em;
                background:rgba(0,0,0, 0.5);
                color:#fff;
                font-size:20px;
                cursor:pointer;                
                bottom: 1.5em;
                right:1.5em;
            }
            .ir-arriba:hover,.ir-arriba:active {                
                background:rgba(255,255,255, 0.5);
                color:#000;
            }
            .nosotros{
            }
           .scrolll{
                width:800px;
                height:500px;
                /*background-color: #88b6d2;*/
                margin-top:40px;
                margin-left:40px;
                overflow-y:scroll;
                float:left;
            }
            .cont{
                height:450px;
            }
            .top-mantain{
                position: fixed;
                right: 0;
                left: 0;
                z-index: 1030;
            }

            .tyti{
                padding-left: 7px !important;
                /*padding-right: 7px !important; */
            }
        </style>
        <script>
        $('#test').click(function(){
                alert('asd');
            });
            $( "#target" ).scroll();
        </script>
    </head>
    <body>
    @include('Menu')





    <script type='text/javascript' src='js/jquery.form.min.js'></script>
    <script type='text/javascript' src='js/modernizr.min.js'></script>
    <script type='text/javascript' src='js/jquery.parallax-1.1.3.js'></script>
    <script type='text/javascript' src='js/main.js'></script>
    <script type='text/javascript' src='js/menu.js'></script>
    <script type='text/javascript' src='js/jquery.fullscreen-popup.js'></script>
    <script type='text/javascript' src='js/imagesloaded.js'></script>
    <script type='text/javascript' src='js/jquery.matchHeight.js'></script>
    <script type='text/javascript' src='js/js_composer_front.js'></script>
    <script type='text/javascript' src='js/cms_custom_css.js'></script>
    <script type='text/javascript' src='js/vc-accordion.js'></script>
    <script type='text/javascript' src='js/vc-tta-autoplay.js'></script>
    <script type='text/javascript' src='js/vc-tabs.js'></script>
    <script type='text/javascript' src='js/waypoints.min.js'></script>
    <script type='text/javascript' src='js/counter.min.js'></script>
    <script type='text/javascript' src='js/counter.cms.js'></script>
    <script type='text/javascript' src='js/cmsgrid.pagination.js'></script>
    <script type='text/javascript' src='js/bootstrap-progressbar.min.js'></script>
    <script type='text/javascript' src='js/bootstrap-progressbar.cms.js'></script>
    <script type='text/javascript' src='js/mislider.js'></script>
    <script type='text/javascript' src='js/jquery.shuffle.js'></script>
    <script type='text/javascript' src='js/jquery.shuffle.cms.js'></script>
</body>
</html>