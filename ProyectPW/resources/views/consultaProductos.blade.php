@extends('layouts.plantilla')

@section('titulo', 'Consulta de Productos')

@section('Contenido')

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
                    <!-- Filter form -->
                    <form action="{{route('filtrado.search')}}" method="GET">
                        <input type="text" name="nombre" placeholder="Filter by nombre">
                        <input type="text" name="noserie" placeholder="Filter by noserie">
                        <button type="submit">Filter</button>
                    </form>
                    <!-- End filter form -->
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
                            @foreach ($consultarProd as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->noserie }}</td>
                                    <td>{{ $item->marca }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ $item->costo }}</td>
                                    <td>.</td>
                                    <td>{{ $item->fecha }}</td>
                                    <td>{{ $item->estatus }}</td>
                                    <td><img src="{{ $item->foto }}" alt="Product Image"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('products.pdf') }}" class="btn btn-primary">Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection