<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorpw;

class controllerPW extends Controller
{
    public function metodoOrden_Compra() {
        return view('orden_compra');
    }

    public function metodoWelcome() {
        return view('welcome');
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

    public function metodoWelcomeAlmacen() {
        return view('welcome_almacen');
    }
}
