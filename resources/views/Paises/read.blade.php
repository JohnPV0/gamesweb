@extends('template.master')
@section('contenido_central')

<div class="heading-section">
    <h4><em>Detalle del</em> municipio</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $pais->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre</h4><span style="color: white;">{!! $pais->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Clave</h4><span style="color: white;">{!! $pais->clave !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $pais->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('paises') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->

@endsection()