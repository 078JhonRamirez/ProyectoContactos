<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\perfil_controller;
use App\Http\Controllers\detalle_controller;
use App\Http\Controllers\ContactoController;


use App\Http\Controllers\guardarDatosController;
use App\Http\Controllers\gruposController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
})->name('login') ;
Route::get('/register', [UsuarioController::class, 'Registrousuario'])->name('register');
Route::post('/register', [UsuarioController::class, 'Crearusuario']);
Route::post('/check', [LoginController::class, 'check']);
Route::get('/salir', [loginController::class, 'sacar'])->name('salir');



Route::middleware(['auth'])->group(function () {
Route::get('/contactos', [ContactoController::class, 'contactos'], function(){
    return view('contactos');
});
Route::get('/nuevoContacto', [UsuarioController::class, 'create'])->name('nuevoContacto');
Route::post('/nuevoContacto', [UsuarioController::class, 'store'])->name('nuevoContacto');

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




Route::get('/perfil', [perfil_controller::class, 'index'])->name('perfil');
Route::get('/perfil', [perfil_controller::class, 'perfil']);
Route::match(['get', 'post'], '/detalle_contactos/{id}', [detalle_controller::class, 'detalle'])->name('detalle');




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



});