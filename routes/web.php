<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ContactoController;

=======
use App\Http\Controllers\perfil_controller;
use App\Http\Controllers\detalle_controller;
>>>>>>> 03cc6fb4684528fcfe7320cd28c3b885e2c8ac48
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

//Route::get('/contactos', function () {
//    return view('contactos');
//});

Route::get('/detalle_contactos', function () {
    return view('detalle_contactos');
});

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/nuevoContacto', function () {
    return view('nuevoContacto');
});

Route::get('/grupos', function () {
    return view('grupos');
})->name('grupos');

Route::get('/nuevogrupo', function () {
    return view('nuevogrupo');
});

<<<<<<< HEAD
// vista de contactos terminada con controlador y modelo
Route::get('/contactos', [ContactoController::class, 'contactos'], function(){
    return view('contactos');
});
=======
Route::get('/perfil',[perfil_controller::class,'perfil'])->name('perfil');

Route::post('perfil', [perfil_controller::class, 'cambiarNombre']);

Route::post('perfil', [perfil_controller::class, 'cambiarContrasena']);

Route::get('/detalle_contactos',[detalle_controller::class,'detalle']);




>>>>>>> 03cc6fb4684528fcfe7320cd28c3b885e2c8ac48

Route::delete('/contactos/{id}', [ContactoController::class, 'destroy'], function(){
    return view('contactos');
})->name('contactos.destroy');

Route::get('/contactos/{id}', [ContactoController::class, 'show'], function(){
    return view('contactos');
})->name('contactos.show');

Route::get('nuevoContacto', [ContactoController::class, 'create'])->name('contactos.create');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');