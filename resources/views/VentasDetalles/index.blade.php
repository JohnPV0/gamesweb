@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de los detalles de las ventas</h1>
<div class="main-border-button">
    <a href="ventas_detalles/create">Crear un nuevo detalle de una venta</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Fecha venta</th>
        <th>Juego</th>
        <th>Cantidad</th>
        <th>Precio compra</th>
        <th>Precio venta</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($ventas_detalles as $venta)
    <tr>
        <td>{!! $venta->id !!}</td>
        <td>{!! $venta->ventas->fecha !!}</td>
        <td>{!! $venta->juegos->nombre !!}</td>
        <td>{!! $venta->cantidad !!}</td>
        <td>{!! $venta->precio_compra !!}</td>
        <td>{!! $venta->precio_venta !!}</td>
        <td>{!! $venta->status !!}</td>
        <td>
            <a href="{!! 'ventas_detalles/'.$venta->id !!}">Detalle</a>
            <a href="{!! 'ventas_detalles/'.$venta->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/ventas_detalles/'.$venta->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
@endsection()
