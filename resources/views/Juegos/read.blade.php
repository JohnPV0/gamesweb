@extends('template.master')
@section('contenido_central')
<!-- ***** Gaming Library Start ***** -->
<div class="heading-section">
    <h4><em>Detalle de la</em> descarga</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $juego->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre</h4><span style="color: white;">{!! $juego->nombre!!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Descripcion</h4><span style="color: white;">{!! $juego->descripcion !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Puntuacion</h4><span style="color: white;">{!! $juego->puntuacion !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Fecha de lanzamiento</h4><span style="color: white;">{!! $juego->fecha_lanzamiento !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID de la categoria</h4><span style="color: white;">{!! $juego->id_categoria !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Categoria</h4><span style="color: white;">{!! $juego->categorias->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $juego->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('juegos') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
