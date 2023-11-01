@extends('layouts.plantilla')

@section('titulo', 'Ventas')

@section('Contenido')

<br>
<h3 class="display-4 text-center text-info">Ventas</h3>

<br>

<div class="container" style="background-color: #f4f4f4; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <form class="custom-form">
        <div class="form-group">
          <label for="exampleInputEmail1" style="font-weight: bold;">Fecha:</label>
          <input type="text" class="form-control" id="fecha" placeholder="Fecha" style="border: 2px solid #007BFF; border-radius: 5px; width: 150px;">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold;">Datos del cliente:</label>
          <input type="text" class="form-control" id="datosCliente" placeholder="Ingresa los datos del cliente" style="border: 2px solid #007BFF; border-radius: 5px;">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold;">Marca:</label>
          <input type="text" class="form-control" id="marca" placeholder="Ingresa la marca del producto" style="border: 2px solid #007BFF; border-radius: 5px;">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold;">Cantidad:</label>
          <input type="text" class="form-control" id="cantidad" placeholder="Ingresa la cantidad" style="border: 2px solid #007BFF; border-radius: 5px; width: 200px;">
        </div>
        <br>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold;">Total:</label>
          <input type="text" class="form-control" id="total" placeholder="Total" style="border: 2px solid #007BFF; border-radius: 5px; width: 200px;">
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