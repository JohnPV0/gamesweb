@extends('template.master')
@section('contenido_central')
<!-- ***** Gaming Library Start ***** -->
<div class="heading-section">
    <h4><em>Detalle del</em> comentario</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $comentario->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Juego</h4><span style="color: white;">{!! $comentario->id_juego!!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre Juego</h4><span style="color: white;">{!! $comentario->juegos->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Usuario</h4><span style="color: white;">{!! $comentario->id_usuario !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Usuario username</h4><span style="color: white;">{!! $comentario->usuarios->username !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Puntuacion</h4><span style="color: white;">{!! $comentario->puntuacion !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Titulo</h4><span style="color: white;">{!! $comentario->titulo !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Comentario</h4><span style="color: white;">{!! $comentario->comentario !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $comentario->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('comentarios') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
