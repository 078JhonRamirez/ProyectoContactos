<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class perfil_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function perfil()
    {
        
        $perfil = Contacto::select('perfil','nombre','apellido','email','telefono','direccion','descripcion')->get();
        return view ('perfil',compact('perfil'));
    }
    public function cambiarNombre(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nuevo_nombre' => 'required|string|min:2',
        ]);

        // Obtener el usuario actual
        $usuario = Contacto::find($request->user()->id);

        // Actualizar el nombre
        $usuario->nombre = $request->input('nuevo_nombre');
        $usuario->save();

        // Redireccionar al perfil con un mensaje de éxito
        return redirect()->route('perfil')->with('success', 'El nombre se ha actualizado correctamente.');
    }


    public function cambiarContrasena(Request $request)
{
    // Validar los datos enviados en la solicitud
    $request->validate([
        'nueva_contrasena' => 'required|min:6', // Requisitos de validación para la nueva contraseña
        'confirmar_contrasena' => 'required|same:nueva_contrasena', // Validar que la confirmación coincida con la nueva contraseña
    ]);

    // Aquí puedes realizar las operaciones necesarias para cambiar la contraseña
    // utilizando los datos proporcionados en el objeto $request

    // Después de realizar los cambios, redirige a la vista perfil.blade.php
    return redirect()->route('perfil')->with('success', 'Contraseña cambiada correctamente');
}

    public function index()
    {
        //
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
        //
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
