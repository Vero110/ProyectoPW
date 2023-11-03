@extends('layouts.plantilla')

@section('titulo', '')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <h1 class="text-center text-info fst-italic fw-bold">Editar Proveedores</h1>
    <div class="container mt-5">
            <script>
                @if(session()->has('confirmacion'))
                
                Swal.fire({
                    icon:'success',
                    title: 'Se han guardado los cambios',
                    showConfirmButton: false,
                    timer: 1500
                })

                @php
                    session()->forget('confirmacion');
                @endphp
                
                @endif
            </script>
          
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-info">
                    <form method="POST" action="EditarProve">
                        @csrf
                        <div class="card-body">
                            <h2 class="card-text text-center">Editar proveedor:</h2>
                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre:</label>
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="{{ old('txtNombre') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtNombre') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtEmpresa" class="form-label">Empresa:</label>
                                <input type="text" name="txtEmpresa" class="form-control" value="{{ old('txtEmpresa') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtEmpresa') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtTelefono" class="form-label">Telefono:</label>
                                <input type="number" name="txtTelefono" class="form-control" value="{{ old('txtTelefono') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtTelefono') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtCorreo" class="form-label">Correo:</label>
                                <input type="email" name="txtCorreo" class="form-control" value="{{ old('txtCorreo') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCorreo') }}</p>
                            </div>

                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button type="submit" class="btn btn-info">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection