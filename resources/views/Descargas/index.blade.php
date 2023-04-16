@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Descargas</h1>
<div class="main-border-button">
    <a href="descargas/create">Crear una nueva descarga</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>ID Juego</th>
        <th>Nombre juego</th>
        <th>ID Usuario</th>
        <th>Nombre usuario</th>
        <th>Fecha</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($descargas as $descarga)
    <tr>
        <td>{!! $descarga->id !!}</td>
        <td>{!! $descarga->id_juego !!}</td>
        <td>{!! $descarga->juegos->nombre !!}</td>
        <td>{!! $descarga->id_usuario !!}</td>
        <td>{!! $descarga->usuarios->nombre !!}</td>
        <td>{!! $descarga->fecha !!}</td>
        <td>{!! $descarga->status !!}</td>
        <td>
            <a href="{!! 'descargas/'.$descarga->id !!}">Detalle</a>
            <a href="{!! 'descargas/'.$descarga->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/descargas/'.$descarga->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()