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
    public function EditarProducto(){
        return view('editarProducto');
    }

    public function AgregarProveedor(){
        return view('registrarProveedores');
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

    #boton para la edicion de un producto
    public function EditaProducto(validadorPW $req){
        $nproducto = $req->input('txtN'); 
        session()->flash('exitoso', $nproducto);
        return redirect('/editarproducto');
    } 

    #boton para registrar proveedor
    public function RegistrarProveedor(){
        return redirect('/agregarproveedor')->with('confirmacion','Se ha registrado un nuevo proveedor');
    }

 }

