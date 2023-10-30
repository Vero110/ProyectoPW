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




#ruta post del boton para ingresar.. login 
Route::post('/Guardar',[proyectoPW::class, 'Guardar'])->name('apodoIngresar');

#ruta post del boton de el registro. registrar productos
Route::post('/RegistrarP',[proyectoPW::class, 'RegistrarProducto'])->name('apodoRP');


Route::get('/ralmacen', function () {
    return view('almacen');
});

