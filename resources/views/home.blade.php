
@extends('template.master')
@section('contenido_central')


<!-- ***** Banner Start ***** -->
<div class="main-banner" id="banner">
    <div class="row">
        <div class="col-lg-7">
            <div class="header-text">
                <h6>Bienvenido a Cyborg</h6>
                <h4><em>Busca</em> nuestros mejores juegos aqui</h4>
                <div class="main-button">
                    <a href="#" id="buscar">Buscar ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->

<!-- ***** Most Popular Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success" id="respuesta">
            
        </div>
    </div>
</div>

<div class="most-popular" id="juegos_generales">
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
            <div class="col-lg-2 col-sm-6">
                    <div class="main-border-button" style="width=100%; height=100%;">
                        <a href="">
                            Todos
                        </a>
                    </div>
                </div>
                @foreach($plataformas as $plataforma)
                <div class="col-lg-2 col-sm-6">
                    <div class="main-border-button" style="width=100%; height=100%;">
                        <a href="">
                            {!! $plataforma->nombre !!}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="most-popular">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Juegos más populares</em> Ahora</h4>
            </div>
            <div class="row">
                @foreach($juegos as $juego)
                <div class="col-lg-4 col-sm-6">
                    <div class="main-button">
                            <a href="#" onclick="agregarCarrito({!! $juego->id_juego !!}, {!! $juego->id_plataforma !!})">Agregar al carrito</a>
                    </div>
                    <a href="">
                    
                        <div class="item">
                            <img src="../storage/juegosfotos/{!! $juego->ruta !!}" alt="">
                            <h4>{!! $juego->juegos->nombre !!}<br><span>{!! $juego->plataformas->nombre !!}</span></h4>
                            <ul>
                                <li><i class="fa fa-star"></i> {!! $juego->juegos->puntuacion !!}</li>
                                <li><i class="fa fa-download"></i> {!! $juego->total_descargas !!}</li>
                            </ul>
                        </div>
                       
                    </a>
                    
                </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="browse.html">Descubrir más juegos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Most Popular End ***** -->

<!-- ***** Gaming Library Start ***** -->
<!-- <div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Your Gaming</em> Library</h4>
        </div>
        <div class="item">
            <ul>
                <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                <li>
                    <h4>Dota 2</h4><span>Sandbox</span>
                </li>
                <li>
                    <h4>Date Added</h4><span>24/08/2036</span>
                </li>
                <li>
                    <h4>Hours Played</h4><span>634 H 22 Mins</span>
                </li>
                <li>
                    <h4>Currently</h4><span>Downloaded</span>
                </li>
                <li>
                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                </li>
            </ul>
        </div>
        <div class="item">
            <ul>
                <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                <li>
                    <h4>Fortnite</h4><span>Sandbox</span>
                </li>
                <li>
                    <h4>Date Added</h4><span>22/06/2036</span>
                </li>
                <li>
                    <h4>Hours Played</h4><span>740 H 52 Mins</span>
                </li>
                <li>
                    <h4>Currently</h4><span>Downloaded</span>
                </li>
                <li>
                    <div class="main-border-button"><a href="#">Donwload</a></div>
                </li>
            </ul>
        </div>
        <div class="item last-item">
            <ul>
                <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                <li>
                    <h4>CS-GO</h4><span>Sandbox</span>
                </li>
                <li>
                    <h4>Date Added</h4><span>21/04/2036</span>
                </li>
                <li>
                    <h4>Hours Played</h4><span>892 H 14 Mins</span>
                </li>
                <li>
                    <h4>Currently</h4><span>Downloaded</span>
                </li>
                <li>
                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="profile.html">View Your Library</a>
        </div>
    </div>
</div> -->
<!-- ***** Gaming Library End ***** -->


@endsection()
