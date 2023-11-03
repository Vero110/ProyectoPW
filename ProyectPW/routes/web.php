<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proyectoPW;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [proyectoPW::class, 'Login'])->name('apodoLogin');
Route::get('/registroproductos', [proyectoPW::class, 'RegistroProducto'])->name('apodoRP');
Route::get('/consultaproductos', [proyectoPW::class, 'ConsultaProductos'])->name('apodoCP');
Route::get('/editarproducto', [proyectoPW::class, 'EditarProducto'])->name('apodoEditar');
Route::get('/agregarproveedor', [proyectoPW::class, 'AgregarProveedor'])->name('apodoAgregarProveedor');
Route::get('/ordencompra', [proyectoPW::class, 'metodoOrden_Compra'])->name('apodoorden');
Route::get('/ventas', [proyectoPW::class, 'metodoVentas'])->name('apodoventas');
Route::get('/reportes-y-graficas', [proyectoPW::class, 'metodoReportesGraficas'])->name('apodoreportesG');

Route::get('/consultaxnombreProductos', function () {
    return view('consultaxNombreProductos');
});

Route::get('/editarproveedor', function () {
    return view('editarProveedor');
});

Route::get('/consultaproveedores', function () {
    return view('consultarProveedor');
});

Route::get('/consultaxnombreProveedores', function () {
    return view('consultaxNombreProveedores');
});

Route::get('/ralmacen', function () {
    return view('almacen');
});

Route::get('/registrousuario', function () {
    return view('registrarUsuario');
});

Route::get('/editarusuarios', function () {
    return view('editarUsuario');
});


#ruta post del boton para ingresar.. login 
Route::post('/Guardar',[proyectoPW::class, 'Guardar'])->name('apodoIngresar');

#ruta post del boton de el registro. registrar productos
Route::post('/RegistrarP',[proyectoPW::class, 'RegistrarProducto'])->name('apodoRP');

#boton para guardar los cambios editados
Route::post('/EditarP',[proyectoPW::class, 'EditaProducto'])->name('apodoIngresar');

#boton para agregar nuevo proveedor
Route::post('/Agregarproveedor',[proyectoPW::class, 'AgregarProveedor'])->name('apodoAgregarProvedor');

#boton para registrar usuarios 



