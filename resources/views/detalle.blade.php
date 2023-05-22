@extends('template.master')
@section('contenido_central')
 <!-- ***** Featured Start ***** -->
 <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="../../storage/juegosfotos/{!! $ruta_foto !!}" alt="" style="border-radius: 23px;">
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>Detalles de {!! $juego_plataforma->juegos->nombre !!}</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>{!! $juego_plataforma->juegos->nombre !!}</h4>
                          <span>{!! $juego_plataforma->plataformas->nombre !!}</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> {!! $juego_plataforma->juegos->puntuacion !!}</li>
                          <li><i class="fa fa-download"></i> {!! $total_descargas !!}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> {!! $juego_plataforma->juegos->puntuacion !!}</li>
                          <li><i class="fa fa-download"></i> {!! $total_descargas !!}</li>
                          <li><i class="fa fa-gamepad"></i> {!! $juego_plataforma->juegos->categorias->nombre !!}</li>
                          <li><i class="fa fa-dollar"></i>${!! $juego_plataforma->precio_venta  !!}MX</li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="col-lg-12">
                      <p>{!! $juego_plataforma->juegos->descripcion !!}</p>
                      @if($juego_plataforma->id_plataforma == 5)
                      <p>
                        <b>Requisitos mínimos </b>
                        <br>
                        <b>Procesador: </b>
                        {!! $juego_plataforma->procesador !!}
                        <br>
                        <b>RAM: </b>
                        {!! $juego_plataforma->memoria_ram !!}
                        <br>
                        <b>Espacio en disco: </b>
                        {!! $juego_plataforma->disco_duro !!}
                        <br>
                        <b>Tarjeta gráfica: </b>
                        {!! $juego_plataforma->tarjeta_grafica !!}
                        <br>
                        <b>Sistema operativo: </b>
                        {!! $juego_plataforma->sistema_operativo !!}
                      </p>
                      @endif
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="{!! asset('inicio') !!}">Regresar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->
@endsection()