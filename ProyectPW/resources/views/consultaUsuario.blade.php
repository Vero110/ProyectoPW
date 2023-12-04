@extends('layouts.plantilla')

@section('titulo', 'Consulta de Usuarios')

@section('Contenido')

    

<div class="container mt-5 col-md-10 mb-4">
    
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Consultar Usuarios</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido P</th>
                                    <th scope="col">Apellido M</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Puesto</th>
                                    <th scope="col">Contraseña</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultarUsu as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->ap}}</td>
                                    <td>{{$item->am}}</td>
                                    <td>{{$item->correo}}</td>
                                    <td>{{$item->puesto}}</td>
                                    <td>{{$item->password}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                      </table>
                    <br>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection