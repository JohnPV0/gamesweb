@extends('template.master')
@section('contenido_central')
<div class="heading-section">
    <h4><em>Detalle de la</em> venta</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $venta_detalle->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Venta</h4><span style="color: white;">{!! $venta_detalle->id_venta !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Juego</h4><span style="color: white;">{!! $venta_detalle->id_juego !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Juego</h4><span style="color: white;">{!! $venta_detalle->juegos->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>ID Plataforma</h4><span style="color: white;">{!! $venta_detalle->id_plataforma !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Plataforma</h4><span style="color: white;">{!! $venta_detalle->plataformas->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Cantidad</h4><span style="color: white;">{!! $venta_detalle->cantidad !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Precio compra</h4><span style="color: white;">{!! $venta_detalle->precio_compra !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Precio venta</h4><span style="color: white;">{!! $venta_detalle->precio_venta !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $venta_detalle->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('ventas_detalles') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
