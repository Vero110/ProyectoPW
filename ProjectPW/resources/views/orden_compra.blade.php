
@extends('layouts.plantilla')

@section('titulo', 'Orden de compra')

@section('Contenido')

<br>
<h3 class="display-4 text-center text-info">Generar órden de compra</h3>

<br>

<div class="container" style="background-color: #f4f4f4; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <form>
      <div class="form-group">
        <label for="empresa" style="font-weight: bold;">Empresa:</label>
        <select id="empresa" class="form-control custom-select" style="border: 2px solid #007BFF; border-radius: 5px;">
          <option selected>Elige la empresa</option>
          <option>Empresa 1</option>
          <option>Empresa 2</option>
          <option>Empresa 3</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="productos" style="font-weight: bold;">Productos requeridos:</label>
        <select id="productos" class="form-control custom-select" style="border: 2px solid #007BFF; border-radius: 5px;">
          <option selected>Elige los productos</option>
          <option>Producto A</option>
          <option>Producto B</option>
          <option>Producto C</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="proveedor" style="font-weight: bold;">Proveedor:</label>
        <select id="proveedor" class="form-control custom-select" style="border: 2px solid #007BFF; border-radius: 5px;">
          <option selected>Elige un proveedor</option>
          <option>Proveedor X</option>
          <option>Proveedor Y</option>
          <option>Proveedor Z</option>
        </select>
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
