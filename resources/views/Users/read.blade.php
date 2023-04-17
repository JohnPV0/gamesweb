@extends('template.master')
@section('contenido_central')
<div class="heading-section">
    <h4><em>Detalle del</em> usuario</h4>
</div>
<!-- ***** Other Start ***** -->
<div class="other-games">
    <div class="row">
        <div class="col-lg-12">
            <div class="item">
                <h4>ID</h4><span style="color: white;">{!! $user->id !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Ruta foto de perfil</h4><span style="color: white;">{!! $user->ruta_foto_perfil !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Nombre</h4><span style="color: white;">{!! $user->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Apellido paterno</h4><span style="color: white;">{!! $user->ap_pat !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Apellido materno</h4><span style="color: white;">{!! $user->ap_mat !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Email</h4><span style="color: white;">{!! $user->email !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Telefono</h4><span style="color: white;">{!! $user->telefono !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Direccion</h4><span style="color: white;">{!! $user->direccion !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Pais</h4><span style="color: white;">{!! $user->paises->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Entidad</h4><span style="color: white;">{!! $user->entidad->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>TIpo de usuario</h4><span style="color: white;">{!! $user->tipos_usuario->nombre !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Código postal</h4><span style="color: white;">{!! $user->cp !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Fecha de nacimiento</h4><span style="color: white;">{!! $user->fecha_naci !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Username</h4><span style="color: white;">{!! $user->username !!}</span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
                <h4>Status</h4><span style="color: white;">{!! $user->status !!}</span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="main-button">
            <a href=" {{ asset('users') }}">Regresar</a>
        </div>
    </div>
</div>
<!-- ***** Other End ***** -->
@endsection()
