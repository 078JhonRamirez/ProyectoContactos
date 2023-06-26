<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;

class gruposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function grupos()
    {
        $datos = grupo::all();
        return view ('grupos', compact('datos'));
    }
    public function creargrupo()
    {
        return view('nuevogrupo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $datos = grupo::find($id);
    if ($datos) {
        $datos->delete();
        return redirect()->to('grupos')->with('success', 'La eliminación ha sido exitosa');
    }
}

}
