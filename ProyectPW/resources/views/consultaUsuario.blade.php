@extends('layouts.plantilla')

@section('titulo', 'Consulta de Usuarios')

@section('Contenido')
<div class="container">
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
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