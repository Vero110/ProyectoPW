<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPW;


class proyectoPW extends Controller
{
    public function Login(){
        return view('login');
    }
    public function Almacen(){
        return view('almacen');
    }
    public function RegistroProducto(){
        return view('registrarProductos');
    }
    public function ConsultaProductos(){
        return view('consultaProductos');
    }

    #boton para iniciar sesion
    public function Guardar(){
        return redirect('/')->with('confirmacion','Has iniciado sesion correctamente');
    }

    #boton para registrar un producto
    public function RegistrarProducto(validadorPW $req){
        $nombreproducto = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproducto);
        return redirect('/registroproductos');
    }   
 }

