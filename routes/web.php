<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/pruebas', function () {
    return view('pruebas');
});

Route::get('/index', function () {
    return view('index');
})->name('login'); 

Route::post('/check', [LoginController::class, 'check']);
Route::post('/nuevoContacto', [UsuarioController::class, 'store'])->name('nuevoContacto');
Route::get('/nuevoContacto', [UsuarioController::class, 'create'])->name('nuevoContacto');
Route::get('/nuevoContacto', [UsuarioController::class, 'index'], function(){
    return view('nuevoContacto');
    
})->name('nuevoContacto');
    





Route::get('/contactos', function () {
    return view('contactos') ->name('contactos');
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





