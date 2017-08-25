<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="/mi-cuenta/"><i class="fa fa-dashboard fa-fw"></i> Mi Cuenta</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Mis Datos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('customer.index')}}">Mis Datos Personales</a>
                    </li>
                    <li>
                        <a href="{{route('bank_account.index')}}">Mis Cuentas Bancarias</a>
                    </li>
                    <li>
                        <a href="{{route('credit_card.index')}}">Mis Tarjetas de Crédito</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-money fa-fw"></i> Mis Movimientos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('bank_movements.index')}}">Consultar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-exclamation-circle fa-fw"></i> Operaciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('operations.index')}}">Nueva</a>
                    </li>
                </ul>
            </li>           
        </ul>
    </div>
</div>