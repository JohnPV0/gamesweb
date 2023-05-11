@extends('template.master')
@section('contenido_central')


<div class="game-details">
    <div class="row">
        <div class="col-lg-12">
            <h2>Iniciar sesión </h2>
        </div>
    </div>
</div>

<form role="form" action="login" method="POST">
    <fieldset>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @csrf
                <div class="form-group">
                    <label for="email" style="color: white;">Correo electrónico</label>
                    <input placeholder="Correo electrónico" name="email" type="email" class="form-control" value="{{ old('email') }}" autofocus>
                </div>
                <br>
                @error('email')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <br>
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
            
        </div>
        <div class="game-details">
            <div class="row">
                <h2></h2>
                <div class="col-md-8"></div>
                <div class="col-md-4">

                    <button type="submit" class="btn btn-warning">Ingresar</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>

@endsection()