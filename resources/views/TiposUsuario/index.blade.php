@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de tipos de pago</h1>
<div class="main-border-button">
    <a href="tipos_usuario/create">Crear un nuevo tipo de usuario</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Nivel</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($tipos_usuario as $tipo_usuario)
    <tr>
        <td>{!! $tipo_usuario->id !!}</td>
        <td>{!! $tipo_usuario->nombre !!}</td>
        <td>{!! $tipo_usuario->nivel !!}</td>
        <td>{!! $tipo_usuario->status !!}</td>
        <td>
            <a href="{!! 'tipos_usuario/'.$tipo_usuario->id !!}">Detalle</a>
            <a href="{!! 'tipos_usuario/'.$tipo_usuario->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/tipos_usuario/'.$tipo_usuario->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
@endsection()
