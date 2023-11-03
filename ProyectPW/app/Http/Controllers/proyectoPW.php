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
    #funciones Productos
    public function RegistroProducto(){
        return view('registrarProductos');
    }
    public function ConsultaProductos(){
        return view('consultaProductos');
    }
    public function EditarProducto(){
        return view('editarProducto');
    }
    public function consultaxNombreProductos() {
        return view('consultaxNombreProductos');
    }

    #funciones Proveedor
    public function AgregarProveedor(){
        return view('registrarProveedores');
    }
    public function EditarProveedor(){
        return view('editarProveedor');
    }
    public function ConsultaProveedor(){
        return view('consultarProveedor');
    }
    public function ConsultaXNombreProveedor(){
        return view('consultaxNombreProveedores');
    }
    
    #funciones usuario



    #funciones
    public function metodoOrden_Compra() {
        return view('orden_compra');
    }

    public function metodoVentas() {
        return view('ventas');
    }

    public function metodoReportesGraficas() {
        return view('reportes_graficas');
    }

    public function metodoWelcomeCompras() {
        return view('welcome_compras');
    }

    public function metodoWelcomeVentas() {
        return view('welcome_ventas');
    }

    public function metodoWelcomeGerencia() {
        return view('welcome_gerencia');
    }

    public function metodoWelcomeAlmacen() {
        return view('welcome_almacen');
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

    public function RegistrarProveedor(validadorPW $req){
        $nproveedor = $req->input('txtNombre'); 
        session()->flash('exitoso', $nproveedor);
        return redirect('/agregarproveedor');
    } 
    



 }

