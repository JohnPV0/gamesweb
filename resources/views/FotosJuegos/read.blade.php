@extends('template.master')
@section('contenido_central')
<!-- ***** Gaming Library Start ***** -->
<div class="heading-section">
    <h4><em>Detalle de la</em> entidad</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $foto_juego->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID del juego</h4><span style="color: white;">{!! $foto_juego->id_juego !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Juego</h4><span style="color: white;">{!! $foto_juego->juegos->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ruta</h4><span style="color: white;">{!! $foto_juego->ruta !!}</span>
            </div>
        </div>
        <!-- <div class="col-lg-12">
            <div class="item">
                <h4>Imagen</h4>
                <span style="color: white;">
                    <img src="{{ asset('storage/'.$foto_juego->ruta) }}" width="100" height="100">
                </span>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $foto_juego->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('fotos_juegos') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
