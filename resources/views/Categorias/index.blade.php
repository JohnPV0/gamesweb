@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Categorias</h1>
    <div class="main-border-button">
        <a href="categorias/create">Crear una nueva categoria</a>
    </div>
    <table style="color: white;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Status</th>    
            <th>Acciones</th>
        </tr>
        @foreach($categorias as $categoria)
        <tr>
            <td>{!! $categoria->id !!}</td>
            <td>{!! $categoria->nombre !!}</td>
            <td>{!! $categoria->status !!}</td>           
            <td>
                <a href="{!! 'categorias/'.$categoria->id !!}">Detalle</a>                 
                <a href="{!! 'categorias/'.$categoria->id.'/edit' !!}">Editar</a>
                {!! Form::open(['method' => 'DELETE' , 'url' => '/categorias/'.$categoria->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    
@endsection()