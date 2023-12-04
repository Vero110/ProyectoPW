<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorProveedores;
use DB;
use Carbon\Carbon;

class controllerProveedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarProv= DB::table('tb_proveedores')->get();
        return view('consultarProveedor',compact('consultarProv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrarProveedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorProveedores $request)
    {
        DB::table('tb_proveedores')->insert([
            "nombre"=>$request->input('txtNombre'),
            "empresa"=>$request->input('txtEmpresa'),
            "telefono"=>$request->input('txtTelefono'),
            "correo"=>$request->input('txtCorreo'),
            "estatus"=>$request->input('txtEstatus'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $nombreproveedor = $request->input('txtNombre'); 
        session()->flash('confirmacion', $nombreproveedor);
        return redirect('/registroproveedores/create');
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
