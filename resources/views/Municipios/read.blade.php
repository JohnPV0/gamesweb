@extends('template.master')
@section('contenido_central')
<!-- ***** Gaming Library Start ***** -->
<div class="heading-section">
    <h4><em>Detalle del</em> municipio</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $municipio->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID de la entidad</h4><span style="color: white;">{!! $municipio->id_entidad !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Entidad</h4><span style="color: white;">{!! $municipio->entidades->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Pais</h4><span style="color: white;">{!! $municipio->entidades->paises->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre</h4><span style="color: white;">{!! $municipio->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $municipio->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('municipios') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()