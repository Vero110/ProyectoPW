@extends('layouts.plantilla')

@section('titulo', 'Ventas')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<br>
<h3 class="display-4 text-center text-info">Ventas</h3>
<script>
  @if(session()->has('confirmacion'))
  
    Swal.fire({
      icon:'success',
      title: 'La venta con total de "{{ session('confirmacion') }}" se ha realizado con éxito',
      showConfirmButton: false,
      timer: 1500
  })
  @php
      session()->forget('confirmacion');
  @endphp
  
  @endif
</script>
<br>

<div class="container" style="background-color: #f4f4f4; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <form class="custom-form">
        <div class="form-group" method="POST" action="RegistrarVentas">
          <label for="txtFecha" style="font-weight: bold;">Fecha:</label>
          <input type="text" name="txtFecha" class="form-control" id="fecha" placeholder="Fecha" style="border: 2px solid #007BFF; border-radius: 5px; width: 150px;" class="form-control" value="{{ old('txtFecha') }}">
          <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtFecha') }}</p>
        </div>
        <br>
        <div class="form-group">
         <label for="txtDatos" style="font-weight: bold;">Datos del cliente:</label>
          <input type="text" name="txtDatos" class="form-control" id="datos" placeholder="Ingresa los datos del cliente" style="border: 2px solid #007BFF; border-radius: 5px;" class="form-control" value="{{ old('txtDatos') }}">
          <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtDatos') }}</p>
        </div>
        <br>
        <div class="form-group">
          <label for="txtMarca" style="font-weight: bold;">Marca:</label>
          <input type="text" name="txtMarca" class="form-control" id="marca" placeholder="Ingresa la marca" style="border: 2px solid #007BFF; border-radius: 5px;" class="form-control" value="{{ old('txtMarca') }}">
          <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtMarca') }}</p>
        </div>
        <br>
        <div class="form-group">
         <label for="txtCantidad" style="font-weight: bold;">Cantidad:</label>
          <input type="text" name="txtCantidad" class="form-control" id="cantidad"  placeholder="Ingresa la cantidad" style="border: 2px solid #007BFF; border-radius: 5px; width: 200px;" class="form-control" value="{{ old('txtCantidad') }}">
          <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtCantidad') }}</p>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label for="txtTotal" style="font-weight: bold;">Total:</label>
          <input type="text" name="txtTotal" class="form-control" id="total" style="border: 2px solid #007BFF; border-radius: 5px; width: 200px;" class="form-control" value="{{ old('txtTotal') }}">
          <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtTotal') }}</p>
        </div>
        <br>
        <div class="row">
            <div class="col">
              <div class="btn-group">
                <button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none;">Guardar</button>
                <button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none; margin-left: 10px;">Generar ticket</button>
              </div>
            </div>
          </div>
      </form>
  </div>
<br>

@endsection