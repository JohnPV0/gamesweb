@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Correos</h1>

<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Destinatario</th>
        <th>Fecha</th>
        <th>Asunto</th>
        <th>Contenido</th>
        <th>Status</th>
    </tr>
    @foreach($correos as $correo)
    <tr>
        <td>{!! $correo->id !!}</td>
        <td>{!! $correo->correo !!}</td>
        <td>{!! $correo->fecha !!}</td>
        <td>{!! $correo->asunto !!}</td>
        <td>{!! $correo->contenido !!}</td>
        <td>{!! $correo->status !!}</td>
    </tr>
    @endforeach
</table>
<br />

@endsection()