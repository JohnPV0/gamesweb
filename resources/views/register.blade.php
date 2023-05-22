@extends('template.master')
@section('contenido_central')
<div class="game-details">
    <div class="row">
        <div class="col-lg-12">
            <h2>Registrarse</h2>
        </div>
    </div>
</div>
<form role="form" action="register" method="POST">
    <fieldset>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @csrf
                <div class="form-group row" style="display:flex; align-items:center; justify-content-center;">

                    <label for="foto" class="col-sm-2 col-form-label label-form">Foto de perfil</label>
                    <input type="hidden" id="ruta_foto_perfil" name="ruta_foto_perfil">
                    <div class="col-sm-3">
                        <input type="file" id="foto" accept="image/*" class="form-control-file">
                    </div>
                    <div class="col-sm-4">
                        <div id="preview" class="form-control-image">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label label-form">Nombre</label>
                    <div class="col-sm-4">
                        <input id="nombre" placeholder="Nombre" name="nombre" type="text" class="form-control"
                            value="{{ old('nombre') }}" autofocus>
                    </div>

                    <label for="username" class="col-sm-2 col-form-label label-form">Username</label>
                    <div class="col-sm-4">
                        <input id="username" placeholder="Escoge un nombre de usuario" name="username" type="text"
                            class="form-control" value="{{ old('username') }}">
                    </div>

                </div>
                <br>
                @error('nombre')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('username')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="form-group row">
                    <label for="ap_pat" class="col-sm-3 col-form-label label-form">Apellido Paterno</label>
                    <div class="col-sm-3">
                        <input id="ap_pat" placeholder="Apellido paterno" name="ap_pat" type="text" class="form-control"
                            value="{{ old('ap_pat') }}">
                    </div>
                    <label for="ap_mat" class="col-sm-3 col-form-label label-form">Apellido Materno</label>
                    <div class="col-sm-3">
                        <input id="ap_mat" placeholder="Apellido materno" name="ap_mat" type="text" class="form-control"
                            value="{{ old('ap_mat') }}">
                    </div>

                </div>
                <br>
                @error('ap_pat')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('ap_mat')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="form-group">
                    <label for="fecha_naci" class="label-form">Fecha de nacimiento</label>
                    <input id="fecha_naci" name="fecha_naci" type="date" class="form-control" value="{{ old('fecha_naci') }}">

                </div>
                <br>
                @error('fecha_naci')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="alert alert-info" style="padding: 3px; justify-content: center; display:flex;">
                    <label for="">Lugar de nacimiento</label>
                </div>
                <div class="form-group row">

                    <label for="id_pais" class="col-sm-1 col-form-label label-form">Pais</label>
                    <div class="col-sm-3">
                        <select id="id_pais" placeholder="Seleccionar ..." name="id_pais"
                            onchange="cargarEntidades(this.value)" class="form-control">
                            <option value="">Seleccionar ...</option>
                            @foreach($paises as $pais)
                            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="id_entidad" class="col-sm-1 col-form-label label-form">Entidad</label>
                    <div class="col-sm-3">
                        <select id="id_entidad" placeholder="Seleccionar ..." name="id_entidad"
                            onchange="cargarMunicipios(this.value)" class="form-control">
                            <option value="">Seleccionar ...</option>
                        </select>
                    </div>
                    <label for="municipio_id" class="col-sm-2 col-form-label label-form">Municipio</label>
                    <div class="col-sm-2">
                        <select id="municipio_id" placeholder="Seleccionar ..." name="municipio_id"
                            class="form-control">
                            <option value="">Seleccionar ...</option>
                        </select>
                    </div>
                </div>
                <br>
                @error('id_pais')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('id_entidad')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('minicipio_id')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="alert alert-info" style="padding: 3px; justify-content: center; display:flex;">
                    <label for="">Información de contacto</label>
                </div>
                <div class="form-group row">
                    <label for="direccion" class="col-sm-2 col-form-label label-form">Dirección</label>
                    <div class="col-sm-4">
                        <input id="direccion" placeholder="Dirección" name="direccion" type="text" class="form-control"
                            value="{{ old('direccion') }}">
                    </div>
                    <label for="cp" class="col-sm-3 col-form-label label-form">Código postal</label>
                    <div class="col-sm-3">
                        <input id="cp" placeholder="Código postal" name="cp" type="text" class="form-control"
                            value="{{ old('cp') }}">
                    </div>

                </div>
                <br>
                @error('direccion')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('cp')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="form-group row">
                    <label for="telefono" class="col-sm-2 col-form-label label-form">Teléfono</label>
                    <div class="col-sm-4">
                        <input id="telefono" placeholder="Teléfono" name="telefono" type="number" class="form-control"
                            value="{{ old('telefono') }}">
                    </div>
                    <label for="colonia" class="col-sm-2 col-form-label label-form">Colonia</label>
                    <div class="col-sm-4">
                        <input id="colonia" placeholder="Colonia" name="colonia" type="text" class="form-control"
                            value="{{ old('colonia') }}">
                    </div>
                </div>
                <br>
                @error('telefono')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                @error('colonia')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="form-group">
                    <label for="email" style="color: white;">Correo electrónico</label>
                    <input placeholder="Correo electrónico" name="email" type="email" class="form-control"
                        value="{{ old('email') }}">
                </div>
                <br>
                @error('email')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                <br>
                @enderror
                <div class="form-group">
                    <label for="password" style="color: white;">Contraseña</label>
                    <input type="password" placeholder="Contraseña" name="password" class="form-control">
                </div>
                <br>
                @error('password')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <br>
            </div>
            <div class="col-md-3"></div>
            <input type="hidden" id="status" name="status">
            <input type="hidden" id="id_tipo_usu" name="id_tipo_usu">

        </div>
        <div class="game-details">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning">Registrarme</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
<script>
// Obtener referencia al elemento de entrada de archivo
const fotoInput = document.getElementById('foto');

// Agregar un evento de cambio al elemento de entrada de archivo
fotoInput.addEventListener('change', function(event) {
    // Obtener el archivo seleccionado
    const archivo = event.target.files[0];

    // Crear un objeto FileReader
    const lector = new FileReader();

    // Definir una función de devolución de llamada cuando la imagen se haya cargado
    lector.onload = function(e) {
        // Crear un elemento de imagen
        const imagen = document.createElement('img');

        // Establecer la ruta de la imagen como la fuente de datos
        imagen.src = e.target.result;

        // Agregar la clase "rounded-circle" a la imagen
        imagen.classList.add('rounded-circle');

        // Agregar la imagen a la vista previa
        const vistaPrevia = document.getElementById('preview');
        vistaPrevia.innerHTML = '';
        vistaPrevia.appendChild(imagen);
    }

    // Leer el archivo como una URL de datos
    lector.readAsDataURL(archivo);
});
</script>
@endsection()