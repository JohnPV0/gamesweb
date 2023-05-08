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
                                <a href="{{ asset('home') }}" @if(request()->is('home')) class="active" @endif>
                                    Inicio  
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('cruds') }}" @if(request()->is('cruds')) class="active" @endif>
                                    Cruds
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('contacto') }}" @if(request()->is('contacto')) class="active" @endif>
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('ver_carrito') }}" @if(request()->is('ver_carrito')) class="active" @endif>
                                    <i class="fa fa-cart-shopping" ></i> 
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('login') }}"  @if(request()->is('login')) class="active" @endif>
                                    Iniciar sesión 
                                    <img src="{{ asset('estilos/assets/images/profile-header.jpg') }}" alt="">
                                </a>
                            </li>
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