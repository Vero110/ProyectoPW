@extends('layouts.plantilla')

@section('titulo', 'Orden de compra')

@section('Contenido')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<br>
<h3 class="display-4 text-center text-info">Generar órden de compra</h3>

<script>
  @if(session()->has('confirmacion'))
  
    Swal.fire({
      icon:'success',
      title: 'La orden de compra con "{{ session('confirmacion') }}" se ha realizado con éxito',
      showConfirmButton: false,
      timer: 1500
  })
  @php
      session()->forget('confirmacion');
  @endphp
  
  @endif
</script>

<div class="container" style="background-color: #f4f4f4; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <form method="POST" action="RegistrarOrdencompra">
      <div class="form-group">
        <label for="txtEmpresa" class="form-label">Empresa:</label>
        <input type="text" id="txtEmpresa" name="txtEmpresa" class="form-control" value="{{ old('txtEmpresa') }}">
        <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtEmpresa') }}</p>
      </div>
      <br>
      <div class="form-group">
        <label for="txtProductos" class="form-label">Producto:</label>
        <input type="text" id="txtProductos" name="txtProductos" class="form-control" value="{{ old('txtProductos') }}">
        <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtProductos') }}</p>
      </div>
      <br>
      <div class="form-group">
        <label for="txtProveedor" class="form-label">Proveedor:</label>
        <input type="text" id="txtProveedor" name="txtProveedor" class="form-control" value="{{ old('txtProveedor') }}">
        <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtProveedor') }}</p>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <div class="btn-group">
            <button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none;">Guardar</button>
            <button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none; margin-left: 10px;">Enviar por correo</button>
            <button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none; margin-left: 10px;">Generar PDF</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <br>
  

@endsection