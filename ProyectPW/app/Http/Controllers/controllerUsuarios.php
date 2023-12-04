<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUsuarios;
use DB;
use Carbon\Carbon;

class controllerUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarUsu= DB::table('tb_usuarios')->get();
        return view('consultaUsuario',compact('consultarUsu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrarUsuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorUsuarios $request)
    {
        DB::table('tb_usuarios')->insert([
            "nombre"=>$request->input('txtNombre'),
            "ap"=>$request->input('txtAP'),
            "am"=>$request->input('txtAM'),
            "correo"=>$request->input('txtCorreo'),
            "puesto"=>$request->input('txtPuesto'),
            "contraseña"=>$request->input('txtContraseña'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $nombreusuario = $request->input('txtNombre'); 
        session()->flash('confirmacion', $nombreusuario);
        return redirect('/registrousuario/create');
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
