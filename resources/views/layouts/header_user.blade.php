
<header role="banner" id="fh5co-header" style="background-image: url(/elate/images/dolares.jpg);">
        <div style="background-color: transparent; background: rgba(0, 0, 0, 0.8); position: absolute; top: 0; bottom: 0; left: 0; right: 0;" ></div>
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Operaciones<span class="caret"> </span>
                    </a>

                    <ul class="dropdown-menu dropdown-user" role="menu">
                        <li>
                            <a class="user-name-a" href="{{route('operations.index')}}"><i class="fa fa-link fa-fw"></i> Nueva</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Movimientos<span class="caret"> </span>
                    </a>

                    <ul class="dropdown-menu dropdown-user" role="menu">
                        <li>
                            <a class="user-name-a" href="{{route('bank_movements.index')}}"><i class="fa fa-search fa-fw"></i> Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Datos<span class="caret"> </span>
                    </a>

                    <ul class="dropdown-menu dropdown-user" role="menu">
                        <li>
                            <a class="user-name-a" href="{{route('customer.index')}}"><i class="fa fa-pencil fa-fw"></i> Mis Datos Personales</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="user-name-a" href="{{route('bank_account.index')}}"><i class="fa fa-file fa-fw"></i> Mis Cuentas Bancarias</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="user-name-a" href="{{route('credit_card.index')}}"><i class="fa fa-credit-card fa-fw"></i> Mis Tarjetas de Crédito</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ str_limit(Auth::user()->name,11, $end="") }}<span class="caret"> </span>
                    </a>

                    <ul id="user-name-dropdown" class="dropdown-menu dropdown-user" role="menu">
                        <li><a class="user-name-a" href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                        <li class="divider"></li>
                        <li><a class="user-name-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Cerrar Sesion</a></li>
                    </ul>
                </li>

              </ul>
            </div>
            
            
        </nav>
      <!-- </div> -->
    </div>
</header>