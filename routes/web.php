<?php

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





