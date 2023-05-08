@extends('template.master')
@section('contenido_central')
<a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

<h1>Listado de usuarios</h1>
<div class="main-border-button">
    <a href="users/create">Crear un nuevo usuario</a>
</div>
<table style="color: white;">
    <tr>
        <th>ID</th>
        <th>Foto de perfil</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Username</th>
        <th>Status</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{!! $user->id !!}</td>
        <td>
            <img src="../storage/usersfotos/{!! $user->ruta_foto_perfil !!}" alt="" width="100px" height="100px">
        </td>
        <td>{!! $user->nombre !!}</td>
        <td>{!! $user->ap_pat !!}</td>
        <td>{!! $user->ap_mat !!}</td>
        <td>{!! $user->email !!}</td>
        <td>{!! $user->telefono !!}</td>
        <td>{!! $user->username !!}</td>
        <td>{!! $user->status !!}</td>
        <td>
            <a href="{!! 'users/'.$user->id !!}">Detalle</a>
            <a href="{!! 'users/'.$user->id.'/edit' !!}">Editar</a>


            {!! Form::open(['method' => 'DELETE' , 'url' => '/users/'.$user->id]) !!}
            {!! Form::submit('Eliminar') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
@endsection()
