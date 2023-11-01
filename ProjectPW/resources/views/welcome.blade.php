@extends('layouts.plantilla')

@section('titulo', 'Welcome')

@section('Contenido')

<h1 class="display-3 text-center" style= "color: #4585ed;">Inicio</h1>

<div style="background-color: #f7f7f7; padding: 20px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="text-align: left; flex: 1;">
            <h1 style="font-size: 2.5rem; color: #17a2b8;">Bienvenido, usuario</h1>
            <h1 style="font-size: 2rem; color: #17a2c9;">Plataforma de administración de Importaciones BEASTMEX</h1>
            <br>
            <p style="font-size: 1.2rem; text-align: justify;">La empresa ha establecido alianzas 
                estratégicas con fabricantes líderes a nivel mundial y expandiendo su presencia en todo México y América Latina. 
                Su compromiso con la excelencia y la satisfacción del cliente nos ha llevado a ser un referente en la industria.</p>
        </div>
        <div style="flex: 1; text-align: right;">
            <img src="{{ asset('imagenes/imagen_inicio.jpg') }}" alt="Imagen de inicio" style="width: 330px; height: 260px; border: 5px solid #17a2b8; border-radius: 10px;">
        </div>
    </div>
</div>
<br>
<br>
<br>


@endsection
