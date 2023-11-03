@extends('layouts.plantilla')

@section('titulo', 'Registro de Usuarios')

@section('Contenido')

    <h1 class="text-center text-info fst-italic fw-bold">Registro de Usuarios</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-info">
                    <form method="POST" action="">
                        @csrf
                        <div class="card-body">
                            <h2 class="card-text text-center">Agregar un nuevo Proveedor:</h2>
                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre:</label>
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="{{ old('txtNombre') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtNombre') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtAP" class="form-label">Apellido Paterno:</label>
                                <input type="text" name="txtAP" class="form-control" value="{{ old('txtAP') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtAP') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtAM" class="form-label">Apellido Materno:</label>
                                <input type="text" name="txtAM" class="form-control" value="{{ old('txtAM') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtAM') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtCorreo" class="form-label">Correo:</label>
                                <input type="email" name="txtCorreo" class="form-control" value="{{ old('txtCorreo') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCorreo') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtPuesto" class="form-label">Puesto:</label>
                                <input type="text" name="txtPuesto" class="form-control" value="{{ old('txtPuesto') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtPuesto') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtContraseña" class="form-label">Contraseña:</label>
                                <input type="password" name="txtContraseña" class="form-control" value="{{ old('txtContraseña') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtContraseña') }}</p>
                            </div>

                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button type="submit" class="btn btn-info">Registrar Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection