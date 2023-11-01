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