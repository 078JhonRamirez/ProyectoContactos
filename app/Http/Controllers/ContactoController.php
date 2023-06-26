<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function contactos()
    {
        $contactos = Contacto::select('id', 'perfil', 'nombre', 'telefono')->get();
        return view('contactos', compact('contactos'));
    }

    public function destroy($id)
{
    $contacto = Contacto::find($id);
    if ($contacto) {
        $contacto->delete();
        // Realiza cualquier otra acción después de la eliminación del contacto, si es necesario
        return redirect()->to('/contactos')->with('success', 'Registro eliminado exitosamente');
    } 
}

public function show($id)
{
    // Obtén el contacto con el ID proporcionado desde la base de datos
    $contacto = Contacto::find($id);
    // Carga la vista de detalles del contacto y pasa los datos del contacto
    return view('perfil', compact('contacto'));
}

public function create()
{
    return view('nuevoContacto');
}

public function index(Request $request)
{
    $buscar = $request->input('buscar');
    $contactos = Contacto::query()
                    ->when($buscar, function ($query, $buscar) {
                        return $query->where('nombre', 'like', '%' . $buscar . '%');
                    })
                    ->get();
    return view('contactos', compact('contactos'));
}
}
