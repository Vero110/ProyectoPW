@extends('layouts.plantilla')

@section('titulo', 'Consulta de Productos')

@section('Contenido')

@foreach ($consultarProd as $item)

<div class="container mt-5 col-md-10 mb-4">
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Consulta de Productos</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">No. de Serie</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Costo de compra</th>
                                <th scope="col">Costo de venta</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->noserie}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>{{$item->costo}}</td>
                                <td>.</td>
                                <td>{{$item->fecha}}</td>
                                <td>{{$item->estatus}}</td>
                                <td>{{$item->foto}}</td>
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

            

                