@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Comentarios</h1>
    <div class="main-border-button">
        <a href="comentarios/create">Crear un nuevo comentario</a>
    </div>
    <table style="color: white;">
        <tr>
            <th>ID</th>
            <th>ID Juego</th>
            <th>Nombre Juego</th>
            <th>ID Usuario</th>
            <th>Nombre usuario</th>
            <th>Puntuación</th>  
            <th>Titulo</th>  
            <th>Comentario</th>
            <th>Status</th>
            <th>Acciones</th>
        </tr>
        @foreach($comentarios as $comentario)
        <tr>
            <td>{!! $comentario->id !!}</td>
            <td>{!! $comentario->id_juego !!}</td>
            <td>{!! $comentario->juegos->nombre!!}</td>
            <td>{!! $comentario->id_usuario !!}</td>
            <td>{!! $comentario->usuarios->nombre !!}</td>
            <td>{!! $comentario->puntuacion !!}</td>
            <td>{!! $comentario->titulo !!}</td>
            <td>{!! $comentario->comentario !!}</td>
            <td>{!! $comentario->status !!}</td>           
            <td>
                <a href="{!! 'comentarios/'.$comentario->id !!}">Detalle</a>                 
                <a href="{!! 'comentarios/'.$comentario->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/comentarios/'.$comentario->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />

@endsection()