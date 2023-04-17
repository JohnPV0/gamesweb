@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de ventas</h1>
<div class="main-border-button">
    <a href="ventas/create">Crear un nueva venta</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>Subtotal</th>
        <th>IVA</th>
        <th>Total</th>
        <th>Tipo pago</th>
        <th>Usuario</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($ventas as $venta)
    <tr>
        <td>{!! $venta->id !!}</td>
        <td>{!! $venta->clientes->username !!}</td>
        <td>{!! $venta->fecha !!}</td>
        <td>{!! $venta->subtotal !!}</td>
        <td>{!! $venta->iva !!}</td>
        <td>{!! $venta->total !!}</td>
        <td>{!! $venta->tipos_pago->nombre !!}</td>
        <td>{!! $venta->usuarios->username !!}</td>
        <td>{!! $venta->status !!}</td>
        <td>
            <a href="{!! 'ventas/'.$venta->id !!}">Detalle</a>
            <a href="{!! 'ventas/'.$venta->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/ventas/'.$venta->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
@endsection()
