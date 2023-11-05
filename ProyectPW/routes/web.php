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
#rutas de inicio
Route::get('/welcome-compras', [proyectoPW::class, 'metodoWelcomeCompras'])->name('apodoWelcomeC');
Route::get('/welcome-ventas', [proyectoPW::class, 'metodoWelcomeVentas'])->name('apodoWelcomeV');
Route::get('/welcome-gerencia', [proyectoPW::class, 'metodoWelcomeGerencia'])->name('apodoWelcomeG');
Route::get('/welcome-almacen', [proyectoPW::class, 'metodoWelcomeAlmacen'])->name('apodoWelcomeA');

Route::get('/', [proyectoPW::class, 'Login'])->name('apodoLogin');
#rutas de productos
Route::get('/registroproductos', [proyectoPW::class, 'RegistroProducto'])->name('apodoRP');
Route::get('/consultaproductos', [proyectoPW::class, 'ConsultaProductos'])->name('apodoCP');
Route::get('/editarproducto', [proyectoPW::class, 'EditarProducto'])->name('apodoEditar');
Route::get('/consultaxnombreProductos', [proyectoPW::class, 'consultaxNombreProductos'])->name('apodoconsultaxNP');

#rutas proveedor
Route::get('/agregarproveedor', [proyectoPW::class, 'AgregarProveedor'])->name('apodoAgregarProveedor');
Route::get('/editarproveedor', [proyectoPW::class, 'EditarProveedor'])->name('apodoEditarProveedor');
Route::get('/consultaproveedores', [proyectoPW::class, 'ConsultaProveedor'])->name('apodoConsultarProveedor');
Route::get('/consultaxnombreProveedores', [proyectoPW::class, 'ConsultaXNombreProveedor'])->name('apodoConsultaXNombreProveedor');

#rutas usuario 
Route::get('/registrousuario', [proyectoPW::class, 'AgregarUsuario'])->name('apodoAgregarUsuario');
Route::get('/editarusuarios', [proyectoPW::class, 'EditarUsuario'])->name('apodoEditarUsuario');
Route::get('/consultausuarios', [proyectoPW::class, 'ConsultaUsuario'])->name('apodoConsultarUsuario');
Route::get('/consultaxnombreUsuarios', [proyectoPW::class, 'ConsultaXNombreUsuario'])->name('apodoConsultarXNUsuario');




Route::get('/ordencompra', [proyectoPW::class, 'metodoOrden_Compra'])->name('apodoorden');
Route::get('/ventas', [proyectoPW::class, 'metodoVentas'])->name('apodoventas');
Route::get('/reportes-y-graficas', [proyectoPW::class, 'metodoReportesGraficas'])->name('apodoreportesG');


Route::get('/ralmacen', function () {
    return view('almacen');
});

#ruta post del boton para ingresar.. login 
Route::post('/Guardar',[proyectoPW::class, 'Guardar'])->name('apodoIngresar');

#ruta post del boton de el registro. registrar productos
Route::post('/RegistrarP',[proyectoPW::class, 'RegistrarProducto'])->name('apodoRP');
#boton para guardar los cambios editados
Route::post('/EditarP',[proyectoPW::class, 'EditarP'])->name('apodoEditarP');

#ruta post del boton de el registro. registrar proveedores
Route::post('/RegistrarPro',[proyectoPW::class, 'RegistrarProveedor'])->name('apodoRProv');
#boton para guardar los cambios editados
Route::post('/EditarProve',[proyectoPW::class, 'EditarProveedores'])->name('apodoEditarProv');

#boton para registrar usuarios 
Route::post('/Registrarusuario',[proyectoPW::class, 'RegistrarUsuario'])->name('apodoRU');
#boton para editar usuarios 
Route::post('/Editarusuario',[proyectoPW::class, 'EditarUsuarios'])->name('apodoEU');




