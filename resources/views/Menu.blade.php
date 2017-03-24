<nav class="navbar navbar-default top-mantain" style="margin-bottom: 0px !important;">
    <div class="navbar-header" style="background-color: white;">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <a class="navbar-brand" style="padding: 0px;">
        <div id="logo-play" class="pull-left clearfix"><a class="cms-main-logo" href="/"><img alt="" src="images/Logo.png" title="Paino"> </a></div>
    </a>
  </div>

    <div class="navbar-collapse collapse" aria-expanded="true" style="background-color: #ffffff !important;">
        <ul class="nav navbar-nav">
            <li><a tabindex="0" href="{{URL::to('/')}}" class="tyti">{{trans('message.m1')}}</a>
            <li><a tabindex="0" href="{{URL::to('/#DrPaino')}}" class="tyti"><span class="menu-title">{{trans('message.m2')}}</span></a></li>
            <li><a tabindex="0" href="{{URL::to('/#Especializaciones')}}" class="tyti"><span class="menu-title">{{trans('message.m3')}}</span></a></li>
            <li><a tabindex="0" href="{{URL::to('Noticias')}}" class="tyti"><span class="menu-title">{{trans('message.m4')}}</span></a></li>
            <li><a tabindex="0" href="{{URL::to('PreguntasFrecuentes')}}" class="tyti"><span class="menu-title">{{trans('message.m5')}}</span></a></li>
            <li><a tabindex="0" href="{{URL::to('/#Citas')}}" class="tyti"><span class="menu-title">{{trans('message.m6')}}</span></a></li>
            <li class="dropdown"><a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false" class="tyti">{{trans('message.m7')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="0" href="{{URL::to('Otros#Publicaciones')}}"><span>{{trans('message.sbm71')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Monografias')}}"><span>{{trans('message.sbm72')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Presentaciones')}}"><span>{{trans('message.sbm73')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Invitaciones')}}"><span>{{trans('message.sbm74')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Dedicatorias')}}"><span>{{trans('message.sbm75')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Posters')}}"><span>{{trans('message.sbm76')}}</span></a></li>
                    <li><a tabindex="0" href="{{URL::to('Otros#Diplomas')}}"><span>{{trans('message.sbm77')}}</span></a></li>
                </ul>
            </li> 

            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <li>
                        <a style="padding-right: 0px;" href="{{ route('lang.switch', $lang) }}" class="tyti">
                            <span class="menu-title">
                                @if($lang == 'es') <img src="images/Alianzas/spanish.png" width="30px">
                                @elseif($lang == 'en') <img src="images/Alianzas/english.png" width="20px">
                                @endif
                            </span>
                        </a>
                    </li>
                @endif
            @endforeach
             
            @if (Auth::guest())
                <li><a tabindex="0"  data-toggle="modal" href="#Login" class="tyti"><span class="menu-title">{{trans('message.m8')}}</span></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="tyti dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
            @endif
               

        </ul>
    </div>
</nav>