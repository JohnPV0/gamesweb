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
                <h4>ID</h4><span style="color: white;">{!! $venta->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Cliente</h4><span style="color: white;">{!! $venta->clientes->username !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Fecha de la venta</h4><span style="color: white;">{!! $venta->fecha !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Subtotal</h4><span style="color: white;">{!! $venta->subtotal !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>IVA</h4><span style="color: white;">{!! $venta->iva !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Total</h4><span style="color: white;">{!! $venta->total !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Tipo de pago</h4><span style="color: white;">{!! $venta->tipo_pago !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Usuario</h4><span style="color: white;">{!! $venta->usuarios->username !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $venta->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('ventas') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
