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
                <h4>ID</h4><span style="color: white;">{!! $entidad->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID del pais</h4><span style="color: white;">{!! $entidad->id_pais !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>País</h4><span style="color: white;">{!! $entidad->paises->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre</h4><span style="color: white;">{!! $entidad->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $entidad->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('entidades') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
