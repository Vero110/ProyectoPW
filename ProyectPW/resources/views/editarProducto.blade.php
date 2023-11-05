@extends('layouts.plantilla')

@section('titulo', 'Editar Productos')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <h1 class="text-center text-info fst-italic fw-bold">Editar Productos</h1>
    <div class="container mt-5">

        <script>
            @if(session()->has('confirmacion'))
            
              Swal.fire({
                icon:'success',
                title: 'El producto ha sido actualizado',
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
                    <form method="POST" action="EditarP">
                        @csrf
                        <div class="card-body">
                            <h2 class="card-text text-center">Editar producto:</h2>
                            <div class="mb-3">
                                <label for="txtN" class="form-label">Nombre:</label>
                                <input type="text" id="txtN" name="txtN" class="form-control" value="{{ old('txtN') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtN') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtS" class="form-label">No. de serie:</label>
                                <input type="text" name="txtS" class="form-control" value="{{ old('txtS') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtS') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtM" class="form-label">Marca:</label>
                                <input type text="text" name="txtM" class="form-control" value="{{ old('txtM') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtM') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtC" class="form-label">Cantidad:</label>
                                <input type="number" name="txtC" class="form-control" value="{{ old('txtC') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtC') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtCs" class="form-label">Costo:</label>
                                <input type="number" name="txtCs" class="form-control" value="{{ old('txtCs') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCs') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtFI" class="form-label">Fecha de Ingreso:</label>
                                <input type="date" name="txtFI" class="form-control" value="{{ old('txtFI') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtFI') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtF" class="form-label">Foto:</label>
                                <input type="file" name="txtF" class="form-control" accept="image/*" value="{{ old('txtF') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtF') }}</p>
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