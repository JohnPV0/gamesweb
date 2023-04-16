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
                <h4>ID</h4><span style="color: white;">{!! $descarga->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Juego</h4><span style="color: white;">{!! $descarga->id_juego!!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre Juego</h4><span style="color: white;">{!! $comentario->juegos->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Usuario</h4><span style="color: white;">{!! $descarga->id_usuario !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Usuario username</h4><span style="color: white;">{!! $descarga->usuarios->username !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Fecha</h4><span style="color: white;">{!! $descarga->fecha !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $descarga->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('descargas') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
