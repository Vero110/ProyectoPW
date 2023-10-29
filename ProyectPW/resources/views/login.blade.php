@extends('layouts.plantilla')

@section('titulo', 'Importaciones Beastmex')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<div class="container h-100">
    <div class="row h-100 align-items-center">
      
        <script>
            @if(session()->has('confirmacion'))
            
              Swal.fire({
                icon:'success',
                title: 'Has iniciado sesión correctamente',
                showConfirmButton: false,
                timer: 1500
            })

            @php
                session()->forget('confirmacion');
            @endphp
            
            @endif
          </script>

        <div class="col-md-7">
            <div class="card">
                @csrf
                <div class="card-header bg-info text-white">
                    <h1 class="text-center">IMPORTACIONES BEASTMEX</h1>
                </div>
                <div class="card-body">
                    <p>La empresa IMPORTACIONES BEASTMEX se dedica a la importación de componentes para PC y Laptops.</p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h1 class="text-center">Ingresar</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="/Guardar">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Correo:</label>
                            <input type="email" name="txtCorreo" class="form-control" value="{{ old('txtCorreo') }}" required>
                            <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCorreo') }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña:</label>
                            <input type="password" name="txtContraseña" class="form-control" value="{{ old('txtContraseña') }}" required>
                            <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtContraseña') }}</p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Ingresar</button>
                        </div>
                        <br>
                        <div class="mb-3 text-center">
                            <label class="form-label">¿No tienes cuenta?</label>
                            <label class="form-label">Regístrate aquí</label>
                            <br>
                            <button type="submit" class="btn btn-light">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



