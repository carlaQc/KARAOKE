<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white  " id="sidenav-main" >
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav"  >
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Tablero') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#datos-usuarios" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Datos Usuarios') }}</span>
                    </a>

                    <div class="collapse" id="datos-usuarios">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Mi perfil') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    {{ __('Todos los Usuario') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!--creacion de el link que va a creacion de cliente-->

                <li class="nav-item">
                    <a class="nav-link " href="#clientes" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Clientes') }}</span>
                    </a>

                    <div class="collapse " id="clientes">
                        <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('clientes.index') }}">
                                    {{ __('registrar de clientes') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('role.index')}}">
                        <i class="ni ni-planet text-blue"></i> {{ __('Roles') }}
                    </a>
                </li>
                
                <!--esto es para proveedores-->
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('proveedor.index')}}">
                        <i class="ni ni-planet text-blue"></i> {{ __('Proveedores') }}
                    </a>
                </li>
                <!--termina para proveedores-->
                  <!--esto es para proveedores-->
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('role.index')}}">
                        <i class="ni ni-planet text-blue"></i> {{ __('Tipo de producto') }}
                    </a>
                </li>
                <!--termina para proveedores-->
                <!-- link de reservas -->

                <li class="nav-item">
                    <a class="nav-link " href="#Reservas" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-calendar-grid-58 text-blue" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Reservas') }}</span>
                    </a>

                    <div class="collapse " id="Reservas">
                        <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('Reservas') }}">
                                    {{ __('Registrar Reservas') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse " id="Reservas">
                        <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('TiposDeAmbiente') }}">
                                    {{ __('Registrar Tipos de Ambientes') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>


            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->

        </div>
    </div>
</nav>