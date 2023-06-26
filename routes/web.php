<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfil_controller;
use App\Http\Controllers\detalle_controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/detalle_contactos', function () {
    return view('detalle_contactos');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/nuevoContacto', function () {
    return view('nuevoContacto');
});

Route::get('/grupos', function () {
    return view('grupos');
});

Route::get('/nuevogrupo', function () {
    return view('nuevogrupo');
});

Route::get('/perfil',[perfil_controller::class,'perfil'])->name('perfil');

Route::post('perfil', [perfil_controller::class, 'cambiarNombre']);

Route::post('perfil', [perfil_controller::class, 'cambiarContrasena']);

Route::get('/detalle_contactos',[detalle_controller::class,'detalle']);








