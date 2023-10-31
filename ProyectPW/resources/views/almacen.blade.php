@extends('layouts.plantilla')

@section('titulo', 'Almacen')

@section('Contenido')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-10">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Bienvenido, usuario</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="/registroproductos" class="list-group-item list-group-item-action">Registro Producto</a>
                        <a href="editarproducto" class="list-group-item list-group-item-action">Editar Producto</a>
                        <a href="consultaproductos" class="list-group-item list-group-item-action">Consultar Todos los Productos</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


