@extends('layouts.plantilla')

@section('titulo', 'Consulta de Proveedor')

@section('Contenido')

@foreach ($consultarProv as $item)

<div class="container mt-5 col-md-8 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Consultar Proveedores</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Empresa</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->empresa}}</td>
                                <td>{{$item->telefono}}</td>
                                <td>{{$item->correo}}</td>
                                <td>{{$item->estatus}}</td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection