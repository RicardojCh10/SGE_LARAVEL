<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return view('CrudDocente',compact('CrudDocente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $users = new Users;
            $users->nombres = $request->nombres;
            $users->apellidos = $request->apellidos;
            $users->identificador = $request->identificador;
            $users->correo = $request->correo;
            $users->contrasena = $request->contrasena ;
            $users->tipo_usuario_id = $request->tipo_usuario_id;
            $users->division_id = $request->division_id;
            $users->estado = $request->estado;
            $users->save();
        
            return redirect()->route('CrudDocente.index')->with('success', 'Datos agregados exitosamente.');
        }
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
