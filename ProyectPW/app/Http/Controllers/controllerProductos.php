<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorProductos;
use DB;
use Carbon\Carbon;

class controllerProductos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarProd= DB::table('tb_productos')->get();
        return view('consultaProductos',compact('consultarProd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrarProductos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorProductos $request)
    {
        DB::table('tb_productos')->insert([
            "nombre"=>$request->input('txtNombre'),
            "noserie"=>$request->input('txtSerie'),
            "marca"=>$request->input('txtMarca'),
            "cantidad"=>$request->input('txtCantidad'),
            "costo"=>$request->input('txtCosto'),
            "fecha"=>Carbon::now(),
            "estatus"=>$request->input('txtEstatus'),
            "foto"=>$request->input('txtFoto'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $nombreproducto = $request->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproducto);
        return redirect('/registroproductos/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
