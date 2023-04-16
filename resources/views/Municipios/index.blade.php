@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de Municipios</h1>

<div class="main-border-button">
    <a href="municipios/create">Crear un nuevo Municipio</a>
</div>

<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Id_entidad</th>
        <th>Entidad</th>
        <th>Pais</th>
        <th>Nombre</th>
        <th>Estatus</th>
        <th>Acciones</th>
    </tr>
    @foreach($municipios as $municipio)
    <tr>
        <td>{!! $municipio->id !!}</td>
        <td>{!! $municipio->id_entidad !!}</td>
        <td>{!! $municipio->entidades->nombre !!}</td>
        <td>{!! $municipio->entidades->paises->nombre !!}</td>
        <td>{!! $municipio->nombre !!}</td>
        <td>{!! $municipio->status !!}</td>
        <td>
            <a href="{!! 'municipios/'.$municipio->id !!}">Detalle</a>
            <a href="{!! 'municipios/'.$municipio->id.'/edit' !!}">Editar</a>

            {!! Form::open(['method' => 'DELETE' , 'url' => '/municipios/'.$municipio->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()