@extends('layouts.plantilla')

@section('titulo', 'Consulta de Proveedor')

@section('Contenido')
<div class="container">
    <br>
    <br>
    <br>
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
                        
                            </tr>
                          </thead>
                      </table>
                    <br>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection