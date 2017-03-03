<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('headerforNew')
        <style>
        /*img {
            max-width: 100%;
            height: auto;
            width: auto\9;
        }*/
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


        @media (max-width: 767px) {
            .post-materials{
                font-size: 12px;
                margin: 20px;
            }
            .blog-post{
                margin-top: 80px;
            }
            article{
                margin: 0px 0px 50px 0px;
            }
            .post-title-container {
                padding-left: 0px;
                padding-top: 0px;
                padding-right: 0px;
                -ms-word-wrap: break-word;
                word-wrap: break-word;
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
        </style>
        <script>
            $( "#target" ).scroll();

        </script>
    </head>
    <body>
    @include('Menu')

<div class="seccion" style="padding-top: 0px !important;">
            <div class="panel-body" style="padding-top: 0px !important;">
                <div class="vc_tta-container" data-vc-action="collapse">
                    <div>
                        <div class="vc_tta-tabs-container">
                            <div class="widget Blog" data-version="1" id="Blog1">
                                <article>
                                    <div class="blog-post clearfix">
                                    <div class="post-title-container">
                                        <h1 style="margin-bottom: 5px !important;"><a href="">Strawberry Watermelon and Feta Salad</a></h1>
                                        <div class="post-materials clearfix">
                                            <span><i class="fa fa-user"></i><span class="material-font"> by </span><span class="author-name"><a href="" rel="author" title="author profile">Javier Paino</a></span></span>
                                            <span style="padding-right: 20px;padding-left: 20px;">
                                                <i class="fa fa-calendar-o"></i>
                                                    <a class="timestamp-link" href="http://2016-themexpose.blogspot.pe/2010/07/strawberry-watermelon-and-feta-salad.html" rel="bookmark" title="permanent link"><abbr class="published" title="2010-07-20T18:15:00-07:00">Jueves, Noviembre 24, 2016</abbr></a>
                                            </span>
                                            <!--<span class="post-cat">
                                                <i class="fa fa-tags"></i>
                                                <a href="http://2016-themexpose.blogspot.pe/search/label/blog" rel="tag">blog</a>
                                                <a href="http://2016-themexpose.blogspot.pe/search/label/featured" rel="tag">featured</a>
                                            </span>-->
                                        </div>
                                    </div>

                                    <!--<div class="post-type-icon"><i class="fa fa-file-text-o" title="Standart Post Format"></i></div>-->

                                    <div class="media-materials" id="thumb4633291745960409272"></div>
                                        <img style="display: block;margin-left: auto;margin-right: auto" src="images/template.jpg">
                                        <div class="post-content clearfix">
                                            <div class="post-content-blog">
                                                <div id="4633291745960409272" style="display: block;padding: 20px;text-align: justify;"> 
                                                    Quisque in ornare mollis urna, a pharetra lectus bibendum et. Aenean sodales cursus nulla, faucibus tempor nibh porta id. Pellentesque non nibh eros. Nunc lectus lacus, interdum et consequat et, varius sit amet ipsum. Fusce convallis, lorem sit amet bibendum accumsan, mark example consectetursup adipisicingsub nec mattis dui nisi a lacus. Fusce non nisl pretium tellus eleifend tincidunt id id lorem. In hac habitasse platea dictumst. Pellentesque orci libero, fringilla et ultrices ut, cursus eu ipsum. Aenean bibendum dui quis pellentesque dictum. Cras
                                                </div>
                                            </div>
                                    <div class="continue-reading pull-left"></div>
                                    <div class="blog-classic-share pull-right clearfix">
                                        <div class="pull-left"><a class="open-share" href="http://2016-themexpose.blogspot.pe/"></a></div>
                                            <div class="pull-left share-wrapper">
                                                <span class="tag-title-post pull-left cshare-text">SHARE : </span>
                                                    <div class="share-tools pull-left">
                                                        <ul style="list-style:none;list-style-type: none;">
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-facebook"></i></a></li>
                                                            <!--<li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-twitter"></i></a></li>
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-pinterest"></i></a></li>
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-google-plus"></i></a></li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="widget Blog" data-version="1" id="Blog1">
                                <article>
                                    <div class="blog-post clearfix">
                                    <div class="post-title-container">
                                        <h1 style="margin-bottom: 5px !important;"><a href="">Strawberry Watermelon and Feta Salad</a></h1>
                                        <div class="post-materials clearfix">
                                            <span><i class="fa fa-user"></i><span class="material-font"> by </span><span class="author-name"><a href="" rel="author" title="author profile">Javier Paino</a></span></span>
                                            <span style="padding-right: 20px;padding-left: 20px;">
                                                <i class="fa fa-calendar-o"></i>
                                                    <a class="timestamp-link" href="http://2016-themexpose.blogspot.pe/2010/07/strawberry-watermelon-and-feta-salad.html" rel="bookmark" title="permanent link"><abbr class="published" title="2010-07-20T18:15:00-07:00">Jueves, Noviembre 24, 2016</abbr></a>
                                            </span>
                                            <!--<span class="post-cat">
                                                <i class="fa fa-tags"></i>
                                                <a href="http://2016-themexpose.blogspot.pe/search/label/blog" rel="tag">blog</a>
                                                <a href="http://2016-themexpose.blogspot.pe/search/label/featured" rel="tag">featured</a>
                                            </span>-->
                                        </div>
                                    </div>

                                    <!--<div class="post-type-icon"><i class="fa fa-file-text-o" title="Standart Post Format"></i></div>-->

                                    <div class="media-materials" id="thumb4633291745960409272"></div>
                                        <img style="display: block;margin-left: auto;margin-right: auto" src="images/template.jpg">
                                        <div class="post-content clearfix">
                                            <div class="post-content-blog">
                                                <div id="4633291745960409272" style="display: block;padding: 20px;text-align: justify;"> 
                                                    Quisque in ornare mollis urna, a pharetra lectus bibendum et. Aenean sodales cursus nulla, faucibus tempor nibh porta id. Pellentesque non nibh eros. Nunc lectus lacus, interdum et consequat et, varius sit amet ipsum. Fusce convallis, lorem sit amet bibendum accumsan, mark example consectetursup adipisicingsub nec mattis dui nisi a lacus. Fusce non nisl pretium tellus eleifend tincidunt id id lorem. In hac habitasse platea dictumst. Pellentesque orci libero, fringilla et ultrices ut, cursus eu ipsum. Aenean bibendum dui quis pellentesque dictum. Cras
                                                </div>
                                            </div>
                                    <div class="continue-reading pull-left"></div>
                                    <div class="blog-classic-share pull-right clearfix">
                                        <div class="pull-left"><a class="open-share" href="http://2016-themexpose.blogspot.pe/"></a></div>
                                            <div class="pull-left share-wrapper">
                                                <span class="tag-title-post pull-left cshare-text">SHARE : </span>
                                                    <div class="share-tools pull-left">
                                                        <ul style="list-style:none;list-style-type: none;">
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-facebook"></i></a></li>
                                                            <!--<li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-twitter"></i></a></li>
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-pinterest"></i></a></li>
                                                            <li style="float: left;padding-right: 20px;padding-left: 20px;"><i class="fa fa-google-plus"></i></a></li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="vc_tta-panels-container">
                            <div class="vc_tta-panels">
                            </div>
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


    </body>
    </html>