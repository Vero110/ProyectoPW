@extends('layouts.plantilla')

@section('titulo', 'Registro de Productos')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <h1 class="text-center text-info fst-italic fw-bold">Registro de Productos</h1>
    <div class="container mt-5">

        <script>
            @if(session()->has('confirmacion'))
            
              Swal.fire({
                icon:'success',
                title: 'El producto "{{ session('confirmacion') }}" se ha guardado',
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
                    <form method="POST" action="RegistrarP">
                        @csrf
                        <div class="card-body">
                            <h2 class="card-text text-center">Ingresar un producto:</h2>
                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre:</label>
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="{{ old('txtNombre') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtNombre') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtSerie" class="form-label">No. de serie:</label>
                                <input type="text" name="txtSerie" class="form-control" value="{{ old('txtSerie') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtSerie') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtMarca" class="form-label">Marca:</label>
                                <input type text="text" name="txtMarca" class="form-control" value="{{ old('txtMarca') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtMarca') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtCantidad" class="form-label">Cantidad:</label>
                                <input type="number" name="txtCantidad" class="form-control" value="{{ old('txtCantidad') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCantidad') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtCosto" class="form-label">Costo:</label>
                                <input type="number" name="txtCosto" class="form-control" value="{{ old('txtCosto') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCosto') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtFechaIngreso" class="form-label">Fecha de Ingreso:</label>
                                <input type="date" name="txtFechaIngreso" class="form-control" value="{{ old('txtFechaIngreso') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtFechaIngreso') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtFoto" class="form-label">Foto:</label>
                                <input type="file" name="txtFoto" class="form-control" accept="image/*" value="{{ old('txtFoto') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtFoto') }}</p>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button type="submit" class="btn btn-info">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection