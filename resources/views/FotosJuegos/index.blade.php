@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>LIstado de Fotos de juegos</h1>
    
<div class="main-border-button">
   <a href="fotos_juegos/create">Crear una nueva foto</a>
</div>

    <table style="color: white;">
        <tr>
            <th>ID</th>
            <th>Juego</th>
            <th>Foto</th>
            <th>Ruta</th>
            <th>Status</th>    
            <th>Acciones</th>
        </tr>
        @foreach($fotos_juegos as $foto)
        <tr>
            <td>{!! $foto->id !!}</td>
            <td>{!! $foto->juegos->nombre !!}</td>
            <td><img src="../storage/juegosfotos/{!! $foto->ruta !!}" alt=""></td>
            <td>{!! $foto->ruta !!}</td>
            <td>{!! $foto->status !!}</td>           
            <td>
                <a href="{!! 'fotos_juegos/'.$foto->id !!}">Detalle</a>                 
                <a href="{!! 'fotos_juegos/'.$foto->id.'/edit' !!}">Editar</a>
                {!! Form::open(['method' => 'DELETE' , 'url' => '/fotos_juegos/'.$foto->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    
@endsection()
