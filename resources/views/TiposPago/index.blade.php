@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de tipos de pago</h1>
<div class="main-border-button">
    <a href="tipos_pago/create">Crear un nuevo tipo de pago</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($tipos_pago as $tipo_pago)
    <tr>
        <td>{!! $tipo_pago->id !!}</td>
        <td>{!! $tipo_pago->nombre !!}</td>
        <td>{!! $tipo_pago->status !!}</td>
        <td>
            <a href="{!! 'tipos_pago/'.$tipo_pago->id !!}">Detalle</a>
            <a href="{!! 'tipos_pago/'.$tipo_pago->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/tipos_pago/'.$tipo_pago->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
@endsection()
