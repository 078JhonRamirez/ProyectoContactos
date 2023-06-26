<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
class guardarDatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nuevogrupo');
    }

    public function guardarDatos(Request $request)
    {
        $request->validate([
            'grupo' => 'required',
            'descripcion' => 'required',
        ]);
    
        Grupo::create([
            'grupo' => $request->grupo,
            'descripcion' => $request->descripcion,
        ]);
    
        return redirect()->to('grupos')->with('success', 'Nuevo grupo guardado');
    }
}

