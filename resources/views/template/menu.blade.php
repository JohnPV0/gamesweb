<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('estilos/assets/images/logo.png') }}" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->
                        <div class="search-input">
                            @csrf
                            <form id="search" action="#">
                                <input type="text" placeholder="Buscar" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>

                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <a href="{{ asset('inicio') }}" @if(request()->is('inicio')) class="active" @endif>
                                    Inicio
                                </a>
                            </li>

                            <li>
                                <a href="{{ asset('contacto') }}" @if(request()->is('contacto')) class="active" @endif>
                                    Contacto
                                </a>
                            </li>
                            @if (Auth::check())
                            @if (auth()->user()->id_tipo_usu == 1)
                            <li>
                                <a href="{{ asset('cruds') }}" @if(request()->is('cruds')) class="active" @endif>
                                    Cruds
                                </a>
                            </li>
                            @endif

                            @endif
                            <li>
                                <a href="{{ asset('ver_carrito') }}" @if(request()->is('ver_carrito')) class="active"
                                    @endif>
                                    <i class="fa fa-cart-shopping"></i>
                                </a>
                            </li>

                            @guest
                            <li>
                                <a href="{{ asset('login') }}" @if(request()->is('login')) class="active" @endif>
                                    Iniciar sesión
                                    <img src="{{ asset('estilos/assets/images/profile-header.jpg') }}" alt="">
                                </a>
                            </li>
                            @else
                            <li>
                                <a type="submit" href="{{ asset('/logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    @if(request()->is('logout')) class="active" @endif
                                    data-toggle="tooltip" data-placement="top" title="Cerrar sesión">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li>
                                <a href="{{ asset('perfil') }}" @if(request()->is('perfil')) class="active" @endif>
                                    Perfil
                                    <img src="../storage/usersfotos/{!! auth()->user()->ruta_foto_perfil !!}" alt="">
                                </a>
                            </li>
                            @endguest


                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">