<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!--<link href="bootstrap/logoplay.css" rel="stylesheet" type="text/css"/>-->

        
        
       
        <!--<script type='text/javascript' src='js/slider/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='js/slider/jquery.themepunch.revolution.min.js'></script>
        <script type="text/javascript" src='js/slider/revolution.extension.slideanims.min.js'></script>
        <script type="text/javascript" src="js/slider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/slider/revolution.extension.navigation.min.js"></script>-->
        <link href="{{('fonts/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
        <!--<script src="{{url('bootstrap/jquery.min.js')}}" type="text/javascript"></script>-->
        <link href="bootstrap/css/style-menu-play.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{url('css/bootstrap-submenu.min.css')}}">

        <script type='text/javascript' src='js/jquery.js'></script>
        <script src="{{url('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{url('js/html5shiv.js')}}"></script>
        <link rel="stylesheet" href="{{url('css/bootstrap-submenu.min.css')}}">
        <script src="{{url('js/bootstrap-submenu.min.js')}}" defer></script>
        <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
        <script src="bootstrap/jquery.min.js" type="text/javascript"></script>       
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        
        <style>
        @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
        @font-face {
            font-family: 'codropsicons';
        }
        body{
            font-family: 'Lato' !important;
            line-height: 27.2px !important;
            letter-spacing: 0.4 !important;
            font-weight: 300 !important;
            font-style: normal !important;
            color: #777777 !important;
            font-size: 17px !important;
        }
        input{
            background-color: #fff;
            color: #000;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            padding: 0 15px;
            height: 43px;
            line-height: 37px;
            border: 3px solid #eee;
            width: 100%;
            outline: none;
            -webkit-border-radius: 3px;
            -khtml-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            letter-spacing: 1px;
        }
        .tyti {
            padding-top: 30px !important;
        }
        .navbar{
            border: 0px solid transparent !important;
            /*padding-left: 0px !important;*/
        }   
        article{
            display: block;
            margin: 10px;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            box-sizing: border-box;
        }
        .widget{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            display: block;
        }
        .share-wrapper {
            width: 130px;
            /*overflow: hidden;*/
        }
        .blog-content ul, .page ul {
            /*list-style: none;*/
            margin-left: 20px;
        }

        .post-type-icon {
            position: absolute;
            right: 25px;
            top: 50px;
        }
        .post-materials {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .post-materials span:first-child {
            margin-left: 0 !important;
            padding-left: 0 !important;
        }
        .post-materials span {
            padding-right: 0px;
            padding-left: 0px;
        }

        .pull-right {
            float: right!important;
        }

        .post-title-container {
            text-align: center;
            padding-left: 25px;
            padding-top: 30px;
            padding-right: 40px;
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        .blog-post{
            position: relative;
            background: #FFF;
            border: solid 1px #f1f1f1;
            margin-bottom: 60px;
            box-sizing: border-box;
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
        @media (max-width: 1208px){
            .tyti{
                padding-top: 0px !important;
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
            $( "#target" ).scroll();

        </script>
    </head>
    <body>
    @include('Menu')
@if (Auth::guest())
@else
<div class="seccion" >
    <div class="panel-body" style="padding-top: 20px !important;">
        <button id="createNewbtn" class="btn btn-primary">Crear</button>
        <button id="ListsNewsbtn" class="btn btn-primary">Lista de Noticias</button>
    </div>
</div>
@endif
<div class="seccion" style="padding-top: 0px !important;">
    <div class="panel-body" style="padding-top: 0px !important;">
        <div class="vc_tta-container" data-vc-action="collapse">
            <div>
                <div class="vc_tta-tabs-container">
                    
                @foreach($news as $new)

                    <div class="widget Blog" data-version="1" id="Blog1">
                        <article>
                            <div class="blog-post clearfix">
                                <div class="post-title-container">
                                <h1 style="margin-bottom: 5px !important;"><a href="">{{$new->title}}</a></h1>
                                <div class="post-materials clearfix">
                                    <span><i class="fa fa-user"></i><span class="material-font"> by </span><span class="author-name"><a href="" rel="author" title="author profile">{{$new->created_by}}</a></span></span>
                                    <span style="padding-right: 20px;padding-left: 20px;">
                                        <i class="fa fa-calendar-o"></i>
                                            <a class="timestamp-link" href="http://2016-themexpose.blogspot.pe/2010/07/strawberry-watermelon-and-feta-salad.html" rel="bookmark" title="permanent link"><abbr class="published" title="2010-07-20T18:15:00-07:00"> {{date_format($new->created_at , 'd/m/Y')}}</abbr></a>
                                    </span>
                                </div>
                            </div>
                            <div class="media-materials" id="thumb4633291745960409272"></div>
                                <img style="display: block;margin-left: auto;margin-right: auto" src="{{$new->img}}">
                                <div class="post-content clearfix">
                                    <div class="post-content-blog">
                                        <div id="4633291745960409272" style="display: block;padding: 20px;text-align: center;"> 
                                            {{$new->description}}
                                        </div>
                                    </div>
                                <div class="continue-reading pull-left"></div>
                                <div class="blog-classic-share pull-right clearfix">
                                    <div class="pull-left"><!--<a class="open-share" href="http://2016-themexpose.blogspot.pe/"></a>--></div>
                                    @if (Auth::guest())
                                    @else
                                    <div class="pull-left share-wrapper">
                                        <ul class="pull-left" style="list-style:none;list-style-type: none;">
                                            <li>
                                            
                                            <button type="button" class="btn btn-primary-sm" id="EditNewBtn" data-id="{{$new->id}}">Editar</button>
                                                <!--<button class="btn btn-primary">Editar</button>-->
                                            </li>
                                            <li>
                                            <button type="button" class="btn btn-primary-sm" id="DeteleNewBtn" data-id="{{$new->id}}">Elimiar</button>
                                                <!--<button class="btn btn-primary">Elimiar</button>-->
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
                    <div class="blog-footer" style="text-align: center">
                        {!! $news->render() !!}    
                    </div>
                        
                </div>

                <div class="vc_tta-panels-container">
                    <div class="vc_tta-panels"></div>
                </div>
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

<div class="modal fade" id="registerNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Crear Noticia
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
      </div>
      <div class="modal-body">
       <div class="panel-body">
       
        <form action="{{ route('registerNew') }}" enctype="multipart/form-data" method="POST">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label>Título:</label>
                        <input id="titleReg" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                   <div class="col-md-12">
                    <label>Contenido:</label>
                        <textarea class="form-control" rows="10" id="descriptionReg" name="description" value="{{ old('description') }}" required></textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                   <div class="col-md-12">
                    <label>Imagen:</label>
                        <label class="btn btn-primary" for="my-file-selector">
                            <input id="my-file-selector" type="file" name="image" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
                            Cargar
                        </label>
                        <span class='label label-info' id="upload-file-info"></span>

                        @if ($errors->has('img'))
                            <span class="help-block">
                                <strong>{{ $errors->first('img') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="RegisterNew">Register</button>
      </div>
    </div>
    </form>
  </div>
</div>


<div class="modal fade" id="ListNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Título</th>
                          <th>Contenido</th>
                          <th>Fecha Creación</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody id="NLC">
                      </tbody>
                    </table>
                  </div>
            </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="DeleteNewConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
       <h4>¿Está seguro que desea Eliminar esta noticia?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="ConfirmDeleteNewBtn">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editNew" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Editar Noticia
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
      </div>
      <div class="modal-body">
       <div class="panel-body">
        <form action="{{ route('updateNew') }}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" id="id">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label>Título:</label>
                        <input id="titleEdt" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                        @if($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                   <div class="col-md-12">
                    <label>Contenido:</label>
                        <textarea class="form-control" rows="10" id="descriptionEdt" name="description" required></textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                   <div class="col-md-12">
                    <label>Imagen:</label>
                        <label class="btn btn-primary" for="my-file-selector">
                            <input id="image" name="imagen" type="file" style="display:none;" onchange="$('#upload-file-info-edit').html($(this).val());">
                            Cargar
                        </label>
                        <span class='label label-info' id="upload-file-info-edit"></span>

                        @if ($errors->has('img'))
                            <span class="help-block">
                                <strong>{{ $errors->first('img') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="Guardar">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $(document).on("click","#RegisterNew",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    $(document).on("click","#Guardar",function(e){
        $(this).parents("form").ajaxForm(options);
    });

  var options = { 
    complete: function(response){
        if($.isEmptyObject(response.responseJSON.error)){
            $("input[name='title']").val('');
            alert('Image Upload Successfully.');
        }else{
            printErrorMsg(response.responseJSON.error);
        }
    }
  };

  function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
  }
</script>

<script>
    $(document).on('click','#createNewbtn',function(){
        $('#titleReg').val('');
        $('textarea#descriptionReg').val('');
        $('input#my-file-selector').val('');
        $('#upload-file-info').text('');
        $('#registerNew').modal();
    });
    
    $(document).on('click','#ListsNewsbtn',function(){
        $('#ListNews').modal();
    });

    $(document).on('click','#EditNewBtn',function(){
        var id = $(this).attr('data-id');
        $('#titleEdt').val('');
        $('textarea#descriptionEdt').val('');
        $('#image').val('');
        $('#id').val('');
        $.ajax({
            url: 'editNew',
            data: '&id='+id,
            type: 'GET',
            success: function(data){
                console.log(data);
                $('#titleEdt').val(data.title);
                $('textarea#descriptionEdt').val(data.description);
                //$('span#upload-file-info-edit').show().html(data.img);
                $('#id').val(data.id);
            },
            error: function(e){
            }
            });
        $('#editNew').modal();
    });
    var newdelid= 0;
    $(document).on('click','#DeteleNewBtn',function(){
        newdelid = $(this).attr('data-id');
        $('#DeleteNewConfirm').modal();
    });
    $(document).on('click','#ConfirmDeleteNewBtn',function(){
        var id = newdelid;
        $.ajax({
            url: 'deleteNew',
            data: '&id='+id,
            type: 'GET',
            success: function(data){
                $('#DeleteNewConfirm').modal('hide');
                $('tbody#NLC').empty();
                refresh();
                location.reload();
            },
            error: function(e){

            }
        });
        
    });

    /*$(document).on('click','#RegisterNew',function(){
        var title = $('#titleReg').val();
        var description = $('textarea#descriptionReg').val();
        var img = $('input#my-file-selector').val();
        $.ajax({

            url: '/registerNew',
            data: '&title='+title+'&description='+description+'&img='+img,
            type: 'GET',
            success: function(data){
                $('#registerNew').modal('hide');
            }
        });
                  

    });*/

    $(document).on('click', '#ListsNewsbtn',function(){
        $('tbody#NLC').empty();
        refresh();
    });


function refresh(){
    $.ajax({
            url: 'newsList',
            type: 'GET',
            success: function(data){
                //console.log(data);
                var CONTENTLIST = '';

                $(data).each(function(){
                    CONTENTLIST += '<tr>'+
                                   '<td>'+this.id+'</td>'+
                                   '<td>'+this.title+'</td>'+
                                   '<td>'+this.description.substring(0, 30)+'</td>'+
                                   '<td>'+this.created_at+'</td>'+
                                   '<td><button type="button" class="btn btn-default-sm" id="EditNewBtn" data-id="'+this.id+'">Editar</button>'+
                                   '<button type="button" class="btn btn-default-sm" id="DeteleNewBtn" data-id="'+this.id+'">Elimiar</button></td></tr>';
                });

                $('tbody#NLC').append(CONTENTLIST);
            }
        });
}



    
</script>

@include('login')
    </body>
    </html>