@extends('template.master')
@section('contenido_central')
<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear usuario</h1>
                    </div>
                </div>
                
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                    <li>
                        {!! Form::open(['method'=>'PATCH','url'=>'/users/'.$user->id, 'enctype'=>'multipart/form-data']) !!}

                        {!! Form::hidden('ruta_foto_perfil', 'usersfotos') !!}

                        {!! Form::label ('foto','Nombre') !!}
                            <span>
                                {!! Form::file('foto', ['accept' => 'image/*']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nombre','Nombre') !!}
                            <span>
                                {!! Form::text ('nombre', $user->nombre ,['placeholder'=>'Ingresa el nombre del usuario']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('ap_pat','Apellido paterno') !!}
                            <span>
                                {!! Form::text ('ap_pat', $user->ap_pat ,['placeholder'=>'Ingresa el apellido paterno']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('ap_mat','Apellido materno') !!}
                            <span>
                                {!! Form::text ('ap_mat', $user->ap_mat ,['placeholder'=>'Ingresa el apellido materno']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('email','Email') !!}
                            <span>
                                {!! Form::email ('email',$user->email,['placeholder'=>'Ingresa el email']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('telefono', 'Telefono') !!}
                            <span>
                            {!! Form::text ('telefono', $user->telefono, ['placeholder'=>'Ingresa el nivel', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('direccion','Dirección') !!}
                            <span>
                                {!! Form::text ('direccion',$user->direccion,['placeholder'=>'Ingresa la direccion']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_pais', 'Pais') !!}
                            <span>
                                {!! Form::select('id_pais', $paises->pluck('nombre','id')->toArray(), $user->id_pais, [
                                    'placeholder'=>'Seleccionar ...',
                                    'onchange'=>'cargarEntidades(this.value);'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_entidad', 'Entidad') !!}
                            <span>
                                {!! Form::select('id_entidad', $entidades->pluck('nombre','id')->toArray(), $user->id_entidad, [
                                    'placeholder'=>'Seleccionar ...',
                                    'onchange'=>'cargarMunicipios(this.value);'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('municipio_id', 'Municipio') !!}
                            <span>
                                {!! Form::select('municipio_id', $municipios->pluck('nombre','id')->toArray(), $user->municipio_id, ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_tipo_usu', 'Tipo de usuario') !!}
                            <span>
                                {!! Form::select('id_tipo_usu', $tipos_usuario->pluck('nombre','id')->toArray(), $user->id_tipo_usu, ['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('colonia', 'Colonia') !!}
                            <span>
                                {!! Form::text('colonia', $user->colonia, ['placeholder'=>'Ingresa la colonia']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('cp', 'Código postal') !!}
                            <span>
                                {!! Form::text('cp', $user->cp, ['placeholder'=>'Ingresa el código postal', 'onkeypress' =>
                                'return event.charCode >= 48 && event.charCode <= 57']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('fecha_naci', 'Fecha de nacimiento') !!}
                            <span>
                                {!! Form::date('fecha_naci', $user->fecha_naci, ['placeholder' => 'Ingresa la fecha de nacimiento', 'class' => 'form-control', 'format' => 'Y-m-d']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('username', 'Username') !!}
                            <span>
                                {!! Form::text('username', $user->username, ['placeholder'=>'Ingresa el username']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label('password', 'Password') !!}
                            <span>
                                {!! Form::password('password', null, ['placeholder'=>'Ingresa el password']) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , $user->status ,['placeholder'=>'Seleccionar ...']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar usuario') !!}
                                {!! Form::close() !!}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->
@endsection()
