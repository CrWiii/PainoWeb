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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        @media (max-width: 767px) {
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
                padding-right: 7px !important; 
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

<style>
        /*img {
            max-width: 100%;
            height: auto;
            width: auto\9;

        }*/

        .ui-draggable, .ui-droppable {
            background-position: top;
        }

        .contscr{
            text-align: justify;
            font-size: 16px;
            overflow: scroll;
            overflow-x:hidden;
            height: 280px;
            padding: 10px;
        }
        .carrr article {
            width: 420px;
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
            margin: 20px;
            }
        .gg{
            padding-top: 80px;padding-left: 25%;
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
        .heag{
            background: url(images/faq.png) no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100% 110%;
            opacity: 0.7;
            height: 600px !important;
        }
        .panel{
            margin-bottom: 1px !important; 
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
            margin: 40px 230px;
            font-size:20px !important;
            border-radius: 25px;
            box-shadow: 5px 5px 5px #444242;
        }
        .ewq{
            color: white !important;
            line-height: 50px !important;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #4c4848, 0 3px 0 #4c4848, 0 4px 0 #4c4848, 0 5px 0 #4c4848, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
        }
        nav ul ul {
                display: none;
            }
             
            nav ul li:hover > ul {
                display: block;
            }

        nav ul ul {
    background: #88b6d2; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
}
    nav ul ul li {
        float: none; 
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        position: relative;
    }
        nav ul ul li a {
            padding: 5px 10px;
            /*color: #000;*/
        }   
            nav ul ul li a:hover {
                background: #fff;
            }
            nav ul ul ul {
    position: absolute; left: 100%; top:0;
}

    .edcv{
        margin: 50px;
    }


        @media (max-width: 767px) {
            nav ul ul {
                display: none;
            }
             
            nav ul li:hover > ul {
                display: block;
            }

            nav ul ul {
                background: black; border-radius: 0px; padding: 0;
                position: absolute; top: 100%;
            }
            nav ul ul li {
                float: none; 
                border-top: 1px solid #fff;
                border-bottom: 1px solid #fff;
                position: relative;
            }
            nav ul ul li a {
                padding: 5px 10px;
                /*color: #000;*/
                }   
            nav ul ul li a:hover {
                background: white;
                }
             nav ul ul ul {
                position: absolute; left: 100%; top:0;
            }



            .edcv{
                margin: 5px;
            }
            .heag{
                height: 350px !important;
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
                padding-top: 1em;
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
       button.accordion {
    background-color: #88b6d2 !important;
    color: #444 !important;
    cursor: pointer !important;
    padding: 10px !important;
    width: 100% !important;
    text-align: left !important;
    border: none !important;
    outline: none !important;
    transition: 0.4s !important;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
button.accordion.active, button.accordion:hover {
    background-color: #ddd !important;
}

div.panel {
    margin: 0px !important !important;
    padding: 0 18px !important;
    background-color: white !important;
    max-height: 0 !important;
    overflow: hidden !important;
    transition: 0.6s ease-in-out !important;
    opacity: 0 !important;
}

div.panel.show {
    padding: 10px !important;
    opacity: 1 !important;
    max-height: 500px !important; 
}
        </style>
        <script>
            $( "#target" ).scroll();

        </script>

    </head>
    <body>

@include('Menu')

        <div id="Inicio" class="seccion">
            <div class="panel-body heag">
                    <div class="col-md-12 hidden-xs hidden-sm fz"  style="opacity: 100;color:#000000; font-size: 3em; text-align: center;vertical-align: middle;">


                    </div>
            </div>
        </div>

<div id="Preguntas" class="seccion">
    <div class="panel-body">
        <div class="edcv">
            <button class="accordion">1.    ¿Cubrirá mi seguro las consultas Médicas y Cirugía?</button>
            <div class="panel">
              <p style="text-align: justify;">
                Trabajamos con la mayoría de las compañías de seguros de salud mediante el Sistema del reembolso, cualquier duda comunicarse con nosotros al 261-6139/ 261-5615.</p>
            </div>

            <button class="accordion">2.    ¿Qué recomendaciones debo seguir para agendar mi cita?</button>
            <div class="panel">
              <p style="text-align: justify;">
                Anotar los datos de su cita.
                Tener el nombre de la persona para la cual se solicita la cita médica.
                Las anotaciones de su cita o interconsulta las brinda la secretaria.
                De solicitar una cita médica, debe  gestionar una orden de laboratorio o Resonancia y asegurarse de que los resultados estén disponibles y tengan un tiempo máximo de antigüedad de 6 meses.
                Si usted necesita y está preparado para una cita de urgencia, por favor anótese con nuestra secretaria en la lista de espera. Lo atenderemos a la brevedad.
                De no poder asistir a su cita médica le agradeceremos se comunique con nosotros con anticipación para su reprogramación de acuerdo a la disponibilidad.
                Colabore con la información que le solicita la secretaria, brinde su número telefónico fijo o celular y su cuenta de correo.
                </p>
            </div>

            <button class="accordion">3.    ¿Dónde puedo Realizarme los exámenes de RX y Resonancia Magnética?</button>
            <div class="panel">
                <p style="text-align: justify;">
                    Se pueden realizar en DPI, ubicado en Av. Dos de Mayo 602 – San Isidro.
                    Telf.202-33-33 Fax.202-33-42.
                    Trabajan con todas las Compañías de Seguros y EPS.
                </p>
            </div>

            <button class="accordion">4.    ¿Hay instrucciones que debo seguir si tengo una cirugía?</button>
            <div class="panel">
                <p style="text-align: justify;">
                    Sí. Nuestro personal revisará las instrucciones previas al procedimiento en el momento de programar su cirugía.
                    Las siguientes son algunas pautas generales para todos los pacientes programados para un procedimiento:
                    Dejar de tomar Anti-Inflamatorio o Aspirina 10 días antes de la cirugía.
                    El día de la operación tome desayuno a las 6:00 am., consistente en un jugo de papaya o naranja, manzanilla, 2 tostadas, después de eso no puede tomar ningún tipo de líquido.
                    Traer su CORSE RIGIDO BIVALVO – ORTOPEDIA WONG – Técnico Polo.
                    Telf. 4404190-114- 98182689, es a medida y demoran 10 días aproximadamente para entregarlo.
                </p>
            </div>
        </div>
    </div>
</div>

        
    </body>
    <footer id="cms-footer" class="no-margin-top">
        <div class="container">
            <div id="cms-footer-bottom">
                <div class="cms-footer-bottom-social">
                </div>
                &copy; Site by <strong>Play</strong>Media. All Right Reserved.
            </div>
        </div>
    </footer>
    </body>

    <script type="text/javascript">
        var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
    </script>
    </html>