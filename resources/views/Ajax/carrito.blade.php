@extends('template.master')
@section('contenido_central')

<script>
function addDelProd(tipo, id_producto, id_plataforma) {
    event.preventDefault();
    let ruta = "{{ asset('add_del_producto') }}/" + tipo + "/" + id_producto + "/" + id_plataforma;
    $.ajax({
        type: 'GET',
        url: ruta,
        success: function(data) {
            $('#respuesta-carrito').html(data);
            if (tipo == 1)
                $('#mensaje-carrito').html('<div class="alert alert-success">Producto agregado correctamente</div>');
            else
                $('#mensaje-carrito').html('<div class="alert alert-success">Producto eliminado correctamente</div>');
            $('#mensaje-carrito').show();
            $('#mensaje-carrito').fadeOut(3000);
        },
        error: function(data) {
            if (tipo == 1)
                $('#mensaje-carrito').html('<div class="alert alert-danger">Error al agregar el producto</div>');
            else
                $('#mensaje-carrito').html('<div class="alert alert-danger">Error al eliminar el producto</div>');
            $('#mensaje-carrito').show();
            $('#mensaje-carrito').fadeOut(3000);
        }
    });
}
</script>
<!-- ***** Live Stream Start ***** -->
<div class="live-stream">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Carrito </em> de compras</h4>
        </div>
    </div>

    <div class="col-lg-12" id="mensaje-carrito">
        
    </div>

    <div class="row">
        @if ($tot_venta_carrito == 0)
        <div class="col-md-12">
            <div class="alert alert-danger">
                Carrito de compras vacío, agrega algunos juegos para continuar con la compra
            </div>
        </div>
        @else
        <div id="respuesta-carrito" >
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="color:white;">
                    <thead>
                        <tr>
                            <th>Juego</th>
                            <th>Plataforma</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($detalle_venta as $detalle)
                            <tr >
                                <td style="color:white;">{!! $detalle->juegos->nombre !!}</td>
                                <td style="color:white;">{!! $detalle->plataformas->nombre !!}</td>
                                <td style="color:white;">{!! $detalle->cantidad !!}</td>
                                <td style="color:white;">{!! $detalle->precio_venta !!}</td>
                                <td style="color:white;">{!! $detalle->cantidad * $detalle->precio_venta!!}</td>
                                <td style="color:white;">
                                    <button class="btn btn-primary" onclick="addDelProd(1, {!! $detalle->id_juego !!}, {!! $detalle->id_plataforma !!})">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-secondary" onclick="addDelProd(2, {!! $detalle->id_juego !!}, {!! $detalle->id_plataforma !!})">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-danger" onclick="addDelProd(3, {!! $detalle->id_juego !!}, {!! $detalle->id_plataforma !!})">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="#" onclick="enviarFormulario(event)">Finalizar compra</a>
                </div>
                <form id="fin_compra" action="{{ route('finalizar_compra') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="detalle_venta" value="{{ json_encode($detalle_venta) }}">
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- ***** Live Stream End ***** -->
<script>
  function enviarFormulario(event) {

    // Obtén el formulario por su ID
    var formulario = document.getElementById('fin_compra');


    var formulario = document.getElementById('fin_compra');
    var detalle_venta = JSON.parse(document.querySelector('input[name="detalle_venta"]').value);

        // Asigna los datos al campo oculto
    document.querySelector('input[name="detalle_venta"]').value = JSON.stringify(detalle_venta);

    // Envía el formulario
    formulario.submit();
  }
</script>

@endsection()