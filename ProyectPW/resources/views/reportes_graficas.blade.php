@extends('layouts.plantilla')

@section('titulo', 'Reportes y graficas')

@section('Contenido')


<h1 class="display-3 text-center" style= "color: #4585ed;">Reportes y gráficas</h1>

<div style="display: flex; justify-content: center;">

    <div style="background-color: #f0f0f0; padding: 20px; text-align: center; margin: 10px;">
        <h1 class="display-3" style="color: #4585ed; font-size: 35px;">Ventas</h1>
        <img src="{{ asset('imagenes/grafica_compras.jpg') }}" alt="Imagen de inicio" style="width: 330px; height: 260px; border: 5px solid #17a2b8; border-radius: 10px;">
        <p><a href="#">Generar reporte de las ventas</a></p>
    </div>

    <div style="background-color: #f0f0f0; padding: 20px; text-align: center; margin: 10px;">
        <h1 class="display-3" style="color: #4585ed; font-size: 35px;">Compras</h1>
        <img src="{{ asset('imagenes/grafica_compras.jpg') }}" alt="Imagen de inicio" style="width: 330px; height: 260px; border: 5px solid #17a2b8; border-radius: 10px;">
        <p><a href="#">Generar reporte de las compras</a></p>
    </div>

</div>

<br>

<button type="submit" class="btn btn-primary" style="background-color: #007BFF; color: #fff; border: none; display: block; margin: 0 auto; line-height: 2;">Calcular ganancias por mes</button>

<br>
@endsection