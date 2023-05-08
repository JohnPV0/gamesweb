@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de juegos y sus plataformas</h1>

<div class="main-border-button">
    <a href="juegos_plataformas/create?ocultar=0">Crear un nuevo juego en una plataforma</a>
</div>

<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Juego</th>
        <th>Plataforma</th>
        <th>Stock</th>
        <th>Total descargas</th>
        <th>Precio compra</th>
        <th>Precio venta</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($juegos_plataformas as $jp)
    <tr>
        <td>{!! $jp->id !!}</td>
        <td>{!! $jp->juegos->nombre !!}</td>
        <td>{!! $jp->plataformas->nombre !!}</td>
        <td>{!! $jp->stock !!}</td>
        <td>{!! $jp->total_descargas !!}</td>
        <td>{!! $jp->precio_compra !!}</td>
        <td>{!! $jp->precio_venta !!}</td>
        <td>{!! $jp->status !!}</td>
        <td>
            
            <a href="{!! 'juegos_plataformas/'.$jp->id !!}">Detalle</a>
            @if($jp->plataformas->id == 5)
            <a href="{!! 'juegos_plataformas/'.$jp->id.'/edit?ocultar=1' !!}">Editar</a>
            @else
            <a href="{!! 'juegos_plataformas/'.$jp->id.'/edit?ocultar=0' !!}">Editar</a>
            @endif
            {!! Form::open(['method' => 'DELETE' , 'url' => '/juegos_plataformas/'.$jp->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()
