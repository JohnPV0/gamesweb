@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de Plataformas</h1>
<div class="main-border-button">
    <a href="plataformas/create">Crear una nueva plataforma</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($plataformas as $plataforma)
    <tr>
        <td>{!! $plataforma->id !!}</td>
        <td>{!! $plataforma->nombre !!}</td>
        <td>{!! $plataforma->status !!}</td>
        <td>
            <a href="{!! 'plataformas/'.$plataforma->id !!}">Detalle</a>
            <a href="{!! 'plataformas/'.$plataforma->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/plataformas/'.$plataforma->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
<br />

@endsection()
