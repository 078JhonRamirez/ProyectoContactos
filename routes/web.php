<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\perfil_controller;
use App\Http\Controllers\detalle_controller;
use App\Http\Controllers\ContactoController;


use App\Http\Controllers\guardarDatosController;
use App\Http\Controllers\gruposController;
use Illuminate\Support\Facades\Route;


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


Route::get('/', function () {
    return view('index');
});  


Route::get('/index', function () {
    return view('index');
})->name('login'); 

Route::post('/check', [LoginController::class, 'check']);
Route::get('/nuevoContacto', [UsuarioController::class, 'create'])->name('nuevoContacto');
Route::post('/nuevoContacto', [UsuarioController::class, 'store'])->name('nuevoContacto');
    

Route::get('/contactos', [ContactoController::class, 'contactos'], function(){
    return view('contactos');
});
Route::get('/nuevogrupo', function () {
    return view('nuevogrupo');
});



Route::get('/grupos', [gruposController::class, 'grupos'], function () {
    return view('grupos');
});
Route::delete('/grupos/{id}', [gruposController::class, 'destroy'], function(){
    return view('grupos');
})->name('grupos.destroy');

Route::get('/datos/crear', [guardarDatosController::class, 'crearFormulario'])->name('datos.crear');
Route::post('/datos/guardar', [guardarDatosController::class, 'guardarDatos'])->name('datos.guardar');
 




Route::get('/perfil',[perfil_controller::class,'perfil'])->name('perfil');

Route::post('perfil', [perfil_controller::class, 'cambiarNombre']);

Route::post('perfil', [perfil_controller::class, 'cambiarContrasena']);

Route::get('/detalle_contactos',[detalle_controller::class,'detalle']);

Route::get('/perfil/{id}', [perfil_controller::class, 'perfil']);







Route::get('/contactos', [ContactoController::class, 'contactos'], function(){
    return view('contactos');
});

Route::delete('/contactos/{id}', [ContactoController::class, 'destroy'], function(){
    return view('contactos');
})->name('contactos.destroy');

Route::get('/contactos/{id}', [ContactoController::class, 'show'], function(){
    return view('contactos');
})->name('contactos.show');

Route::get('contactoNuevo', [ContactoController::class, 'crea'])->name('contactos.crea');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');



