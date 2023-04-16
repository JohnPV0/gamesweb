@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de paises</h1>

<div class="main-border-button">
    <a href="paises/create">Crear un nuevo Pais</a>
</div>

<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Clave</th>
        <th>Estatus</th>
        <th>Acciones</th>
    </tr>
    @foreach($paises as $pais)
    <tr>
        <td>{!! $pais->id !!}</td>
        <td>{!! $pais->nombre !!}</td>
        <td>{!! $pais->clave !!}</td>
        <td>{!! $pais->status !!}</td>
        <td>
            <a href="{!! 'paises/'.$pais->id !!}">Detalle</a>
            <a href="{!! 'paises/'.$pais->id.'/edit' !!}">Editar</a>
            {!! Form::open(['method' => 'DELETE' , 'url' => '/paises/'.$pais->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()