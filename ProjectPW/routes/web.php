<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerPW;

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

Route::get('/ordencompra', [controllerPW::class, 'metodoOrden_Compra'])->name('apodoorden');

Route::get('/', [controllerPW::class, 'metodoWelcome'])->name('apodowelcome');

Route::get('/ventas', [controllerPW::class, 'metodoVentas'])->name('apodoventas');

Route::get('/reportes-y-graficas', [controllerPW::class, 'metodoReportesGraficas'])->name('apodoreportesG');

Route::get('/welcome-compras', [controllerPW::class, 'metodoWelcomeCompras'])->name('apodoWelcomeC');

Route::get('/welcome-ventas', [controllerPW::class, 'metodoWelcomeVentas'])->name('apodoWelcomeV');

Route::get('/welcome-almacen', [controllerPW::class, 'metodoWelcomeAlmacen'])->name('apodoWelcomeA');