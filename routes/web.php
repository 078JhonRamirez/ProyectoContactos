<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

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

// vista de contactos terminada con controlador y modelo
Route::get('/contactos', [ContactoController::class, 'contactos'], function(){
    return view('contactos');
});

Route::delete('/contactos/{id}', [ContactoController::class, 'destroy'], function(){
    return view('contactos');
})->name('contactos.destroy');

Route::get('/contactos/{id}', [ContactoController::class, 'show'], function(){
    return view('contactos');
})->name('contactos.show');

Route::get('nuevoContacto', [ContactoController::class, 'create'])->name('contactos.create');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');