@extends('layouts.plantilla')

@section('titulo', 'Consulta de Proveedores')

@section('Contenido')
<div class="container">
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center">Consulta de Proveedores</h1>
                </div>
                <div class="card-body">
                    <form class="d-flex mb-5" role="search">
                        <input class="form-control me-5" type="search" placeholder="Buscar Producto" aria-label="search">
                        <button class="btn btn-outline-success" type="submit">Buscar </button>
                    </form>
                    <div class="card-body">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Empresa</th>
                                  <th scope="col">Telefono</th>
                                  <th scope="col">Correo</th>
                                </tr>
                              </thead>
                          </table>
                        <br>
                        <br>
                        <br>
                        <br>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

@endsection