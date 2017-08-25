
<header role="banner" id="fh5co-header">
    <div class="container">
        <!-- <div class="row"> -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" style="color: transparent; background-image: url(/elate/images/LogoFT_web.png); background-position: center; background-size: cover; height: 80px;" href="{{ url('/') }}">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a> 
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#" data-nav-section="home"><span>Inicio</span></a></li>
                <li><a href="#" data-nav-section="testimonials"><span>Clientes</span></a></li>
                <li><a href="#" data-nav-section="services"><span>Beneficios</span></a></li>
<!--                    <li><a href="#" data-nav-section="about"><span>Equipo</span></a></li>-->
                <li><a href="#" data-nav-section="contact"><span>Contacto</span></a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" data-nav-section=""><span>Iniciar Sesion</span></a></li>
                    <li><a href="{{ url('/register') }}" data-nav-section=""><span>Registrar</span></a></li>
                @else
                    <li class="dropdown">
                        <a id="user-name" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}<span class="caret"> </span>
                        </a>

                        <ul id="user-name-dropdown" class="dropdown-menu dropdown-user" role="menu">
                            <li><a class="user-name-a" href="{{route('customer.index')}}"><i class="fa fa-user fa-fw"></i> Mis Datos</a>
                            </li>
                            <li><a class="user-name-a" href="{{route('customer.index')}}"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                            </li>
                            <li class="divider"></li>
                            <li><a class="user-name-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Cerrar Sesion</a></li>
                        </ul>
                    </li>
                @endif
              </ul>
            </div>
            
            
        </nav>
      <!-- </div> -->
    </div>
</header>