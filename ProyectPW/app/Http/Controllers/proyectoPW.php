<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorProductos;
use App\Http\Requests\validadorUsuarios;
use App\Http\Requests\validadorProveedores;
use App\Http\Requests\validadorExtras;


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
    public function AgregarUsuario(){
        return view('registrarUsuario');
    }
    public function EditarUsuario(){
        return view('editarUsuario');
    }
    public function ConsultaUsuario(){
        return view('consultaUsuario');
    }
    public function ConsultaXNombreUsuario(){
        return view('consultaxNombreUsuario');
    }

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

    #Funciones de login
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
    public function Guardar(validadorLogin $req){
        $correo = $req->input('txtCorreo'); 
        session()->flash('confirmacion', $correo);
        return redirect('/');    }

    #boton para registrar un producto
    public function RegistrarProducto(validadorProductos $req){
        $nombreproducto = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproducto);
        return redirect('/registroproductos');
    }   

    public function EditarP(validadorProductos $req){
        $nombreproducto = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproducto);
        return redirect('/editarproducto');
    }   
    
    #boton para registroproveedor
    public function RegistrarProveedor(validadorProveedores $req){
        $nombreproveedor = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproveedor);
        return redirect('/agregarproveedor');
    } 

    #btn pra editar provedores
    public function EditarProveedores(validadorProveedores $req){
        $nombreproveedor = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproveedor);
        return redirect('/editarproveedor');
    } 

    #btn pra registrousuarios
    public function RegistrarUsuario(validadorUsuarios $req){
        $nombreusuario = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreusuario);
        return redirect('/registrousuario');
    }   

    #btn pra editarusuarios
    public function EditarUsuarios(validadorUsuarios $req){
        $nombreusuario = $req->input('txtNombre'); 
        session()->flash('confirmacion', $nombreusuario);
        return redirect('/editarusuarios');
    }   

    public function RegistrarOrdenCompra(validadorExtras $req){
        $nombreempresa = $req->input('txtEmpresa'); 
        session()->flash('confirmacion', $nombreempresa);
        return redirect('/ordencompra');
    }
    
    public function RegistrarVentas(validadorExtras $req){
        $total = $req->input('txtTotal'); 
        session()->flash('confirmacion', $total);
        return redirect('/venta');
    } 



 }

