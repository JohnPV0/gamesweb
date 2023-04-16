@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Juegos</h1>

<div class="main-border-button">
    <a href="juegos/create">Crear un nuevo juego</a>
</div>

<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Puntuacion</th>
        <th>Fecha de lanzamiento</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($juegos as $juego)
    <tr>
        <td>{!! $juego->id !!}</td>
        <td>{!! $juego->nombre !!}</td>
        <td>{!! $juego->puntuacion !!}</td>
        <td>{!! $juego->fecha_lanzamiento !!}</td>
        <td>{!! $juego->categorias->categoria !!}</td>
        <td>{!! $juego->status !!}</td>
        <td>
            <a href="{!! 'juegos/'.$juego->id !!}">Detalle</a>
            <a href="{!! 'juegos/'.$juego->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/juegos/'.$juego->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()