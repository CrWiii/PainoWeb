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
                width: 800px; 
                height: 570px; 
                margin: auto 0;
                margin-left: 10px;
                overflow: scroll;
                overflow-x:hidden;
                background-color:white;
                color:black;
                padding-left: 20px;
                padding-top: 20px;
                padding-bottom: 30px;
            }
        @media (max-width: 1210px){
            .target{
                /*margin:auto auto !important;*/
                padding-top: 20px;
                width: 95%; 
                height: 600px; 
                margin: auto auto;
            }   
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
        .footFix{
            padding-top: 30px !important;padding-bottom: 0px !important;
            
        }
        .citasFix{
            padding-top: 50px !important;
            padding-top: 0px !important;
        }
        .citasFix2{
            padding-top: 0px !important;
        }

        .newBtn{
            text-align: center;
            padding: 10px 60px 10px 60px;
            font-size:20px !important;
            border-top: 3px solid #88b6d2;
            border-bottom: 3px solid #88b6d2;
            border-left: 3px solid #88b6d2;
            border-right: 3px solid #88b6d2;
            background-color: #a0a0a0;
            color: #ffffff;
            overflow: visible;
        }
        .restto{
            padding-top: 0px !important;
        }
        @media (max-width: 1280px){
            .mvc{
                height: 300px !important;
            }
            .imga{
                width: 280px;
            }
        }
        @media (max-width: 1280px){
            .alianzaimg{
                max-width: 80% !important;
            }
        }
        @media (max-width: 320px) {
            .newBtn{
                padding: 8px 20px 8px 20px;
            }
            .btnnFix{
                padding: 0px !important;
                margin: 0px !important;
            }
        }
        @media (max-width: 767px) {
            .btnFix{
                padding: 0px !important;
                margin: 0px !important;
            }
            .citasFix2{
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .citasFix{
                padding-top: 0px !important;
            }
            .footFix{
                padding-top: 0px !important;padding-bottom: 0px !important;
            }
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
            /*.heas{
                background-size: 400px 200px;
            }*/
            .target{
                padding-top: 20px;
                width: 95%; 
                height: 600px; 
                margin: auto auto;
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

            .fz{
                padding: 5em 1em;
            }
            @media (min-width: 1380px) {
                .fz{
                padding: 7em 5em;
                }
            }
            @media (max-width: 767px) {
                .fz{
                font-size: 1.5em !important;
                }
            }
            .subtitle{
                color:#ffffff;
                font-size: 2.5em;
                text-transform: uppercase;
                line-height: normal; 
                padding-top: 20px;
                padding-left: 0px;
                padding-right: 0px;
            }

            .pfoot{font-size: 15px;}
            .ifoot{
                float: left;width: 76px;
                height: 76px;
                line-height: 72px !important;
                border: 2px solid #fff;
                font-size: 50px;
                color: #fff;
                text-align: center;
                display: inline-block;
                font-family: 'Pe-icon-7-stroke';
                speak: none;
                font-style: normal;
                font-weight: normal;
                font-variant: normal;
                text-transform: none;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
            }
            @media(max-width: 1365px){.pfoot{font-size: 0.95em;}}
        @media (min-width: 1208px) {
            .container{
            max-width: 970px;
            }
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
    <div id="Inicio" class="seccion" style="padding-top: 80px !important;">
        <div class="panel-body  heas">
            <div class="col-md-12 fz"  style="opacity: 100;color:#000000; font-size: 3em; text-align: center;vertical-align: middle;">
                <span><strong class="ewq">{{trans('message.tit')}} </strong></span>
                <span><strong class="ewq">{{trans('message.tit2')}}</strong></span>
            </div>
        </div>
    </div>

<div id="DrPaino" class="seccion"  style="background-color: #88b6d2;height: : 720px;padding-top: 2.5em !important;" >
        <div class="col-md-4" style="float: left;padding-top: 0px;padding-left: 5%;">
            <img id="imgDoc" src="images/doc.png" style="max-width: 55%;height: auto;">
        </div>
 <div class="divf">
                <div>
                    
                        <div id="target" class="target">
                            <h1 class="titlePai"><strong>Dr. Paino</strong></h1>
                                <p style="text-align: justify;font-size: 0.8em;padding-right: 80px;">
                                    <ul style="list-style-type: none;">
                                        <li><strong>{{trans('message.subtit1')}}</strong></li>
                                        <li>{{trans('message.li1')}}</li>
                                        <li>{{trans('message.li2')}}</li>
                                        <li>{{trans('message.li3')}}</li>
                                        <li>{{trans('message.li4')}}</li>
                                        <li>{{trans('message.li5')}}</li>
                                        <li>{{trans('message.li6')}}</li>
                                        <li>{{trans('message.li7')}}</li>
                                        <li>{{trans('message.li8')}}</li>


                                        <li><strong>{{trans('message.li9')}}</strong></li>
                                        <li>{{trans('message.li10')}}</li>
                                        <li>{{trans('message.li11')}}</li>
                                        <li>{{trans('message.li12')}}</li>
                                        <li>{{trans('message.li13')}}</li>

                                        <li><strong>{{trans('message.li14')}}</strong></li>
                                        <li>{{trans('message.li15')}}</li>
                                        <li>{{trans('message.li16')}}</li>
                                        <li>{{trans('message.li17')}}</li>
                                        <li>{{trans('message.li18')}}</li>

                                        <li><strong>{{trans('message.li19')}}</strong></li>
                                        <li>{{trans('message.li20')}}</li>
                                        <li>{{trans('message.li21')}}</li>
                                        <li>{{trans('message.li22')}}</li>
                                        <li>{{trans('message.li23')}}</li>
                                        <li>{{trans('message.li24')}}</li>
                                        <li>{{trans('message.li25')}}</li>

                                        <li><strong>{{trans('message.li26')}}</strong></li>
                                        <li>{{trans('message.li27')}}</li>
                                        <li>{{trans('message.li28')}}</li>
                                        <li>{{trans('message.li29')}}</li>
                                        <li>{{trans('message.li30')}}</li>
                                        <li>{{trans('message.li31')}}</li>
                                        <li>{{trans('message.li32')}}</li>
                                        <li>{{trans('message.li33')}}</li>

                                        <li><strong>{{trans('message.li34')}}</strong></li>
                                        <li>{{trans('message.li35')}}</li>
                                        <li><strong>{{trans('message.li36')}}</strong></li>
                                        <li>{{trans('message.li37')}}</li>
                                        <li>{{trans('message.li38')}}</li>
                                        <li>{{trans('message.li39')}}</li>

                                        <li><strong>{{trans('message.li40')}}</strong></li>
                                        <li>{{trans('message.li41')}}</li>
                                        <li>{{trans('message.li42')}}</li>
                                        <li>{{trans('message.li43')}}</li>
                                        <li>{{trans('message.li44')}}</li>
                                        <li>{{trans('message.li45')}}</li>
                                        <li>{{trans('message.li46')}}</li>
                                        <li>{{trans('message.li47')}}</li>
                                        <li>{{trans('message.li48')}}</li>
                                        <li>{{trans('message.li49')}}</li>

                                        <li><strong>{{trans('message.li50')}}</strong></li>
                                        <li>{{trans('message.li51')}}</li>
                                        <li>{{trans('message.li52')}}</li>
                                        <li>{{trans('message.li53')}}</li>
                                        <li>{{trans('message.li54')}}</li>
                                        <li>{{trans('message.li55')}}</li>

                                        <li><strong>{{trans('message.li56')}}</strong></li>
                                        <li>{{trans('message.li57')}}</li>
                                        <li>{{trans('message.li58')}}</li>
                                        <li>{{trans('message.li59')}}</li>
                                        <li>{{trans('message.li60')}}</li>
                                        <li>{{trans('message.li61')}}</li>
                                        <li>{{trans('message.li62')}}</li>
                                        <li>{{trans('message.li63')}}</li>
                                    </ul>
                                </p>
                        </div>
                    </div>
                </div>
</div>




    <div id="Especializaciones" class="seccion">
    <div id="cms-row-15679b50e7b8a3">
            <div class="panel-body" style="background-color: #88b6d2;">
                <div style="text-align: center;">
                    <p class="subtitle"><strong class="subtit">{{trans('message.li64')}}</strong></p>
                </div>                                
                <div class="wpb_text_column wpb_content_element ">
                </div>
            </div>
            <div class="panel-body" style="padding-top: 0px !important;">
            <div class="carrr">
    <article title="item12">
        <h1>{{trans('message.li65')}}</h1>
        <img src="images/Especialidades/Neurocirugiacolumnaa.jpg">
        <p class="contscr">
            {{trans('message.li66')}}
        </p>
    </article>
    <article title="item12">
        <h1>{{trans('message.li67')}}</h1>
        <img src="images/Especialidades/Diagnosticotratamiento.jpg">
        <p class="contscr">
            {{trans('message.li68')}}  
        </p>
    </article>
    <article title="item12">
        <h1>{{trans('message.li69')}}</h1>
        <img src="images/Especialidades/rehabilitacion.jpg">
        <p class="contnoscr">
            {{trans('message.li70')}}
        </p>
    </article>
    <article title="item12">
        <h1>{{trans('message.li71')}}</h1>
        <img src="images/Especialidades/TumoresCerebrales.jpeg">
        <p class="contscr">
            {{trans('message.li72')}} 
        </p>
    </article>
    <article title="item12">
        <h1 style="padding-bottom: 40px;">{{trans('message.li73')}}</h1>
        <img src="images/Especialidades/Investigaciona.jpg">
        <p class="contscr">
            {{trans('message.li74')}} 
        </p>
    </article>
    <article title="item12">
        <h2>{{trans('message.li75')}}</h2>
        <img src="images/Especialidades/Alzheimer.jpeg">
        <p class="contscr">
            {{trans('message.li76')}}
        </p>
    </article>
    <article title="item12">
        <h2>{{trans('message.li77')}}Trabajo Social - Misión Huascarán</h2>

        <video width="320" controls preload="none">
            <source src="video/MH.mp4" type="video/mp4">
            {{trans('message.li78')}}
            <img alt="" src="images/previewForVideo.png" width="640" height="360"  title="" />
        </video>
        <p class="contnoscr">{{trans('message.li79')}}
        </p>
    </article>
</div>
        </div>
        </div>
            <div class="panel-body hidd">
                <div class="vc_col-sm-6 vc_col-lg-3 vc_col-md-3  wpb_column vc_column_container      vc_custom_1446426772176  vc_custom_1446426772176">
                    <div class="wpb_wrapper">
                        <div class="cms-counter-wraper cms-counter text-center template-cms_counter content-align-center  mvc" id="cms-counter">
                            <div class="cms-counter-inner">
                                <div class=" cms-counter-body">
                                    <div class="cms-fancy-box-item">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-middle">
                                                <span class="cms-counter-icon">
                                                    <i class="paciente">
                                                    </i>
                                                </span>
                                                <div id="counter_cms-counter_item_1" class="h3 cms-counter cms-counter-digit zero" data-suffix="" data-prefix="+" data-type="zero" data-digit="1347">
                                                </div>
                                                <h3 class="cms-counter-title">
                                                    <span>{{trans('message.li80')}}</span><br>
                                                    <span>1500+</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-6 vc_col-lg-3 vc_col-md-3  wpb_column vc_column_container      vc_custom_1446426772176  vc_custom_1446426772176">
                    <div class="wpb_wrapper">
                        <div class="cms-counter-wraper cms-counter text-center template-cms_counter content-align-center  mvc" id="cms-counter-2">
                            <div class="cms-counter-inner">
                                <div class=" cms-counter-body">
                                    <div class="cms-fancy-box-item">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-middle">
                                                <span class="cms-counter-icon">
                                                    <i class="investigacion">
                                                    </i>
                                                </span>
                                                <div id="counter_cms-counter-2_item_1" class="h3 cms-counter cms-counter-digit zero" data-suffix="" data-prefix="+" data-type="zero" data-digit="153">
                                                </div>
                                                <h3 class="cms-counter-title">
                                                    <span>{{trans('message.li81')}}</span><br>
                                                    <span></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-6 vc_col-lg-3 vc_col-md-3  wpb_column vc_column_container      vc_custom_1446426772176  vc_custom_1446426772176">
                    <div class="wpb_wrapper">
                        <div class="cms-counter-wraper cms-counter text-center template-cms_counter content-align-center mvc" id="cms-counter-3">
                            <div class="cms-counter-inner">
                                <div class=" cms-counter-body">
                                    <div class="cms-fancy-box-item">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-middle">
                                                <span class="cms-counter-icon">
                                                    <i class="rehabilitacion">
                                                    </i>
                                                </span>
                                                <div id="counter_cms-counter-3_item_1" class="h3 cms-counter cms-counter-digit zero" data-suffix="" data-prefix="+" data-type="zero" data-digit="3567">
                                                </div>
                                                <h3 class="cms-counter-title">
                                                    <span>{{trans('message.li82')}}</span><br>
                                                    <span>0</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-6 vc_col-lg-3 vc_col-md-3  wpb_column vc_column_container      vc_custom_1446426772176  vc_custom_1446426772176">
                    <div class="wpb_wrapper">
                        <div class="cms-counter-wraper cms-counter text-center template-cms_counter content-align-center mvc" id="cms-counter-4">
                            <div class="cms-counter-inner">
                                <div class=" cms-counter-body">
                                    <div class="cms-fancy-box-item">
                                        <div class="cms-counter-content">
                                            <div class="cms-counter-middle">
                                                <span class="cms-counter-icon">
                                                    <i class="articulos">
                                                    </i>
                                                </span>
                                                <div id="counter_cms-counter-4_item_1" class="h3 cms-counter cms-counter-digit zero" data-suffix="" data-prefix="+" data-type="zero" data-digit="322">
                                                </div>
                                                <h3 class="cms-counter-title">
                                                    <span>{{trans('message.li83')}}</span><br>
                                                    <span style="margin: 10%;"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="" class="seccion" style="padding-top: 0px !important">
            <div class="panel-body" style="background-color: #88b6d2;">
                <div style="text-align: center;" class=" clearfix" id="cms-custom-headding-15679b50e50b82">
                    <p style="color:#ffffff;font-size: 2.5em; text-transform: uppercase; line-height: normal; padding-top: 20px;padding-left: 0px;padding-right: 0px;"><strong class="subtit">{{trans('message.li84')}}</strong></p>                                   
                </div>                                
                <div class="wpb_text_column wpb_content_element ">
                </div>
            </div>
            <div class="panel-body gg" style="background-color: white;" >
                <div class="col-md-12 qscw">
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                         <a href="{{url('pdf/AF_DolorDeCuello(NoImprimible).pdf')}}" target="_blank">
                         <img src="images/covers/DolordeCuello-01.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.li85')}}</p>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                        <a href="{{url('pdf/LowBackPain.pdf')}}" target="_blank">
                        <img src="images/covers/Dolorlumbar-01.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.li86')}}</p>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                        <a href="{{url('pdf/SpinalStenosis.pdf')}}" target="_blank">
                        <img src="images/covers/SpinalStenosis-01.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.li87')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 qscw">
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                        <a href="http://www.youblisher.com/p/867089-Guia-Paciente-Proposit/" target="_blank">
                        <img src="images/covers/GuiadelPaciente-01.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.li88')}}</p></a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                        <a href="{{url('pdf/Cerebral-Aneurysms.pdf')}}" target="_blank">
                        <img src="images/covers/c.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.lii88')}}</p></a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tt">
                        <a href="{{url('pdf/Stereotactic Surgery.pdf')}}" target="_blank">
                        <img src="images/covers/s.png" style="display: block;margin: auto auto;" class="fds" /><br>
                        <p style="text-align: center;padding: 0px !important;font-size: 0.8em !important;">{{trans('message.liii88')}}</p></a>
                    </div>
                </div>

            </div>
        </div>

        <div id="Alianzas" class="seccion" style="padding-top: 0px !important">
            <div class="panel-body" style="background-color: #88b6d2;">
                <div style="text-align: center;" class=" clearfix">
                    <p style="color:#ffffff;font-size: 2.5em; text-transform: uppercase; line-height: normal; padding-top: 20px;padding-left: 0px;padding-right: 0px;"><strong class="subtit">{{trans('message.li89')}}</strong></p>
                </div>                                
            </div>
            <div class="panel-body" style="background-color: white;text-align: center">
                <div class="col-md-12" >
                    <div class="col-md-4 col-sm-6 col-xs-6" style="background-color: #e6e6e6;" >
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17105913_10158405960640232_495444227_o.png" width="180" height="80" style="margin: 8% 8%" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6" >
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17101364_10158405960630232_2085448199_o.png" width="180" height="80" style="margin: 8% 8%" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6" style="background-color: #e6e6e6;">
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17121860_10158405960635232_1499560311_o.png" width="180" height="80" style="margin: 8% 8%" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6" >
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17122333_10158405960620232_2020956849_o.png" width="180" height="80" style="margin: 8% 8%" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6" style="background-color: #e6e6e6"> 
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17121743_10158405960625232_471517569_o.png" width="180" height="80" style="margin: 8% 8%" /></a>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6" > 
                        <a href="https://www.gwu.edu/" target="_blank"><img class="alianzaimg" src="images/Alianzas/17093218_10158405960660232_1619091191_o.png" width="180" height="80" style="margin: 8% 8%" /></a>
                    </div>
                </div>
            </div>
        </div>
       

        <div id="Citas" class="seccion restto">
            <div class="col-md-12" style="padding-top: 115px !important;padding-bottom: 65px !important;background-image: url(../images/azul03.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">
                <div class="col-md-6 citasFix2">
                    <div class="panel-body citasFix2">

                        <div id="" class="citasFix" style="padding-bottom: 0px !important;">
                            <div class="panel-header">
                                <h2 style="color: #ffffff;padding-bottom: 0px;margin-bottom: 40px;">{{trans('message.li90')}}</h2>
                        <h4 style="color: #ffffff;margin-bottom: 40px;">{{trans('message.li91')}}</h4>
                        <p style="color: #ffffff;text-align: justify;"> <strong>{{trans('message.li92')}}</strong>
                            </div>
                            <div class="panel-body citasFix2">
                                <div class=" wpb_column vc_column_container cf7-zk-raven4 vc_custom_1442199020596  vc_custom_1442199020596" style="padding-left: 0px !important; padding-right: 0px !important">
                                    <div class="wpcf7" id="wpcf7-f1613-p1186-o1" lang="en-US" dir="ltr" style="padding-left: 0px !important;padding-right: 0px !important">
                                        <div class="screen-reader-response"></div>
                                        <form id="enviarCorreo" action="enviarCorreo.php" method="POST" class="wpcf7-form">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                    <input type="text" name="nombre" value="" size="40" 
                                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" 
                                                           aria-required="true" aria-invalid="false" title="Ingresar Nombre" placeholder="NOMBRE Y APELLIDO:" required/>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                                    <input type="text" name="telefono" value=""  pattern="[0-9]{7,9}" 
                                                           class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" 
                                                           aria-invalid="false" title="Ingresar un Número Teléfonico Valido" placeholder="TELÉFONO:" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="email" name="correo" value="" size="40" 
                                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                           aria-required="true" aria-invalid="false" title="Ingresar E-mail Valido" placeholder="CORREO ELECTRÓNICO:" required/>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea name="mensaje" cols="40" rows="10"                                                           
                                                                  class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" 
                                                                  aria-required="true" aria-invalid="false" placeholder="ASUNTO:" 
                                                                  title="Ingresar Mensaje" required></textarea></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <button id="btnReserva" name="btnReserva" type="submit" value="Send Message"  style="background: rgba(114,156,177,0.5) !important; border-color: #6f6767 !important;">{{trans('message.li93')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wpb_wrapper" style="color:#ffffff; border-radius: 0.3em; padding-top: 0.5em;">
                                            <p style="text-align: justify;padding-left: 0px !important"> <strong>{{trans('message.li94')}}</strong>
                                            </p>
                                        </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-header">
                        <h2 class="tett" style="color:#ffffff;text-align: center;">{{trans('message.li95')}}</h2>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: center;color:#ffffff;font-size: 18px;letter-spacing: -0.4px;font-weight: 900;"> <strong>{{trans('message.li96')}}</strong>
                    </div>
                    <div class="panel-body" style="margin: 0 auto !important;">
                        <div class="col-md-12 btnnFix">
                            <div class="col-md-2 btnFix"></div>
                            <div class="col-md-8 btnFix" style="text-align: center !important;">
                               <a class="newBtn" id="btncalendar" data-toggle="modal" data-src="{{URL::to('/Calendario')}}" data-height=650 data-width=450 data-target="#myModal">{{trans('message.li97')}}</a>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div id="footer" class="seccion" style="padding-top: 0px !important">
            <div id="cms-row-15679b50e7de29" class="clearfix vc_custom_1446427805341 full-width cms-custom-css">
            <div class="col-md-12">
                <div class="panel-body  footFix">
                    <div class="row">

                        <div class="col-md-3 col-md-6 col-md-6" style="color:#ffffff; margin-bottom: 0px !important;">
                            <div class="cms-fancybox-item clearfix">
                                <div class="fancy-box-icon pull-left icon-60">
                                    <i class="pe-7s-call ifoot"></i>
                                </div>
                                <div class="cms-single-fancybox-content" style="padding-top: 0px !important">
                                    <div class="fancy-box-content geg" style="padding-left: 100px;">
                                        <p style="padding: 0px !important;margin: 0px !important"><strong>{{trans('message.li98')}}</strong> 
                                        <p class="pfoot" style="padding: 0px !important;margin: 0px !important">{{trans('message.li99')}}</p>
                                        <p class="pfoot" style="padding: 0px !important;margin: 0px !important">{{trans('message.li100')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-md-6 col-md-6" style="color:#ffffff; margin-bottom: 0px !important; margin-top: 0px !important">
                            <div class="cms-fancybox-item clearfix" style="margin-bottom: 30px;">
                                <div class="fancy-box-icon pull-left icon-60">
                                    <i class="pe-7s-mail-open-file ifoot"></i>
                                </div>
                                <div class="cms-single-fancybox-content" style="padding-top: 0px !important">
                                    <div class="fancy-box-content geg" style="padding-left: 100px;">
                                        <p style="padding: 0px !important;margin: 0px !important"><strong>{{trans('message.li101')}}</strong> 
                                        <p class="pfoot" style="padding: 0px !important;margin: 0px !important">{{trans('message.li102')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-md-6 col-md-6" style="color:#ffffff; margin-bottom: 0px !important;">
                            <div class="cms-fancybox-item clearfix" style="margin-bottom: 30px;">
                                <div class="fancy-box-icon pull-left icon-60">
                                    <i class="pe-7s-map-2 ifoot"></i>
                                </div>
                                <div class="cms-single-fancybox-content" style="padding-top: 0px !important">
                                    <div class="fancy-box-content geg" style="padding-left: 100px;">
                                        <p style="padding: 0px !important;margin: 0px !important"><strong>{{trans('message.li103')}}</strong> 
                                        <p class="pfoot" style="padding: 0px !important;margin: 0px !important">{{trans('message.li104')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-md-6 col-md-6" style="color:#ffffff; margin-bottom: 0px !important;">
                            <div class="cms-fancybox-item clearfix" style="margin-bottom: 30px;">
                                <div class="fancy-box-icon pull-left icon-60">
                                    <a href="http://www.facebook.com/javierpainoneurocirugia" target="_blank"><i class=" ifoot"><i class="fa fa-facebook"></i></i></a>
                                </div>
                                <div class="cms-single-fancybox-content" style="padding-top: 0px !important">
                                    <div class="fancy-box-content geg" style="padding-left: 100px;">
                                        <p style="padding: 0px !important;margin: 0px !important"><strong>{{trans('message.li105')}}</strong> 
                                        <p class="pfoot" style="padding: 0px !important;margin: 0px !important">/{{trans('message.li106')}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>




<div class="container">
   <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{trans('message.li108')}}</h4>
           </div>
         <div class="modal-body">
              <iframe frameborder="0"></iframe>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('message.li109')}}</button>
         </div>
        </div>
     </div>
  </div>
</div>
<div id="Login" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="post" action='' name="login_form" style="margin:20px;">
              <p>{{trans('message.li110')}}<input type="text"  name="eid" id="email" placeholder="Email"></p>
              <p>{{trans('message.li111')}} <input type="password"  name="passwd" placeholder="Password"></p>
              <p><button type="submit" >{{trans('message.li112')}}</button>
                <a href="">{{trans('message.li113')}}</a>
              </p>
            </form>
    </div>
  </div>
</div>
    <footer id="cms-footer" class="no-margin-top">
        <div class="container">
            <div id="cms-footer-bottom">
                <div class="cms-footer-bottom-social">
                </div>
                &copy; {{trans('message.li114')}} <strong>{{trans('message.li115')}}</strong>{{trans('message.li116')}}
            </div>
        </div>
    </footer>

<script>
$('a.newBtn').on('click', function(e) {
    var src = $(this).attr('data-src');
    var height = $(this).attr('data-height') || 300;
    var width = $(this).attr('data-width') || 400;
    
    $("#myModal iframe").attr({'src':src,
                        'height': height,
                        'width': width});
});

$(document).ready(function(){
    resize();
    resizingImg();
});
    function resize(){
        if($(window).innerWidth() <= 751) {
            $('.hidd').hide();
            $('article').flipcarousel({
                pagination : false,
                loader : true,
                itemsperpage: 1,
                randomizer: 0.7
            });
        } else {
            $('.hidd').show(); 
            $('article').flipcarousel({
                pagination : false,
                loader : true,
                itemsperpage: 3,
                randomizer: 0.7
            });
        }
    }

    function resizingImg(){
        if($(window).innerWidth() <= 1210){
            $('#imgDoc').hide();
        } else{
            $('#imgDoc').show();
        }
    }



</script>
    <script type='text/javascript' src='js/jquery.form.min.js'></script>
    <script type='text/javascript' src='js/modernizr.min.js'></script>
    <script type='text/javascript' src='js/jquery.parallax-1.1.3.js'></script>
    <!--<script type='text/javascript' src='js/main.js'></script>-->
    <script type='text/javascript' src='js/menu.js'></script>
    <script type='text/javascript' src='js/jquery.fullscreen-popup.js'></script>
    <script type='text/javascript' src='js/imagesloaded.js'></script>
    <script type='text/javascript' src='js/jquery.matchHeight.js'></script>
    <script type='text/javascript' src='js/js_composer_front.js'></script>
     <script type='text/javascript'>
        var cms_custom_css_object = {};
    </script>
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