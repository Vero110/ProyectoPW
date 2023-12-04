<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proyectoPW;
use App\Http\Controllers\controllerUsuarios;
use App\Http\Controllers\controllerProveedores;
use App\Http\Controllers\controllerProductos;


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

Route::get('/products/pdf', [controllerProductos::class, 'exportPdf'])->name('products.pdf');
Route::get('/consultarnombre',[controllerProductos::class,'buscarPorNombre'])->name('consulta.buscarPorNombre');


#rutas de inicio
Route::get('/welcome-compras', [proyectoPW::class, 'metodoWelcomeCompras'])->name('apodoWelcomeC');
Route::get('/welcome-ventas', [proyectoPW::class, 'metodoWelcomeVentas'])->name('apodoWelcomeV');
Route::get('/welcome-gerencia', [proyectoPW::class, 'metodoWelcomeGerencia'])->name('apodoWelcomeG');
Route::get('/welcome-almacen', [proyectoPW::class, 'metodoWelcomeAlmacen'])->name('apodoWelcomeA');

Route::get('/', [proyectoPW::class, 'Login'])->name('apodoLogin');

#rutas de productos
Route::get('/registroproductos/create',[controllerProductos::class,'create'])->name('rproducto.create');
Route::get('/consultaproductos',[controllerProductos::class, 'index'])->name('cproducto.index');
Route::get('/filtrado', [controllerProductos::class,'consultaProductos'])->name('filtrado.search');

#Route::get('/registroproductos', [proyectoPW::class, 'RegistroProducto'])->name('apodoRP');
#Route::get('/consultaproductos', [proyectoPW::class, 'ConsultaProductos'])->name('apodoCP');
Route::get('/editarproducto', [proyectoPW::class, 'EditarProducto'])->name('apodoEditar');
Route::get('/consultaxnombreProductos', [proyectoPW::class, 'consultaxNombreProductos'])->name('apodoconsultaxNP');

#rutas proveedor
Route::get('/registroproveedores/create', [controllerProveedores::class,'create'])->name('rproveedor.create');
Route::get('/consultaproveedores',[controllerProveedores::class,'index'])->name('cproveedor.index');

#Route::get('/agregarproveedor', [proyectoPW::class, 'AgregarProveedor'])->name('apodoAgregarProveedor');
Route::get('/editarproveedor', [proyectoPW::class, 'EditarProveedor'])->name('apodoEditarProveedor');
#Route::get('/consultaproveedores', [proyectoPW::class, 'ConsultaProveedor'])->name('apodoConsultarProveedor');
Route::get('/consultaxnombreProveedores', [proyectoPW::class, 'ConsultaXNombreProveedor'])->name('apodoConsultaXNombreProveedor');

#rutas usuario 
Route::get('/registrousuario/create',[controllerUsuarios::class,'create'])->name('rusuario.create');
Route::get('/consultausuarios',[controllerUsuarios::class,'index'])->name('cusuario.index');


#Route::get('/registrousuario', [proyectoPW::class, 'AgregarUsuario'])->name('apodoAgregarUsuario');
Route::get('/editarusuarios', [proyectoPW::class, 'EditarUsuario'])->name('apodoEditarUsuario');
#Route::get('/consultausuarios', [proyectoPW::class, 'ConsultaUsuario'])->name('apodoConsultarUsuario');
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
Route::post('/registrarproducto',[controllerProductos::class,'store'])->name('registroprod.store');
#Route::post('/RegistrarP',[proyectoPW::class, 'RegistrarProducto'])->name('apodoRP');
#boton para guardar los cambios editados
Route::post('/EditarP',[proyectoPW::class, 'EditarP'])->name('apodoEditarP');

#ruta post del boton de el registro. registrar proveedores
Route::post('/registrarproveedores',[controllerProveedores::class,'store'])->name('resgistroprov.store');
#Route::post('/RegistrarPro',[proyectoPW::class, 'RegistrarProveedor'])->name('apodoRProv');
#boton para guardar los cambios editados
Route::post('/EditarProve',[proyectoPW::class, 'EditarProveedores'])->name('apodoEditarProv');

#boton para registrar usuarios 
Route::post('/registrarusuario',[controllerUsuarios::class,'store'])->name('registrou.store');
#Route::post('/Registrarusuario',[proyectoPW::class, 'RegistrarUsuario'])->name('apodoRU');
#boton para editar usuarios 
Route::post('/Editarusuario',[proyectoPW::class, 'EditarUsuarios'])->name('apodoEU');

#ruta post orden de compra
Route::post('/RegistrarOrdencompra',[proyectoPW::class, 'RegistrarOrdenCompra'])->name('apodoOR');

#ruta post ventas
Route::post('/RegistrarVentas',[proyectoPW::class, 'RegistrarVentas'])->name('apodoV');