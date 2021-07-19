<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contenidoweb/categorias/seleccion-computadora/computadora-ensamblada', [App\Http\Controllers\CategoriasController::class, 'computadoras_ensambladas_index']);
Route::get('/contenidoweb/categorias/seleccion-computadora/construye-tu-computadora', [App\Http\Controllers\CategoriasController::class, 'computadoras_ensamblaje_index']);
Route::get('/contenidoweb/categorias/seleccion-computadora', [App\Http\Controllers\CategoriasController::class, 'computadoras_index']);
Route::get('/contenidoweb/categorias/monitores', [App\Http\Controllers\CategoriasController::class, 'monitores_index']);
Route::get('/contenidoweb/categorias/televisores', [App\Http\Controllers\CategoriasController::class, 'televisores_index']);
Route::get('/contenidoweb/categorias/impresoras', [App\Http\Controllers\CategoriasController::class, 'impresoras_index']);
Route::get('/contenidoweb/categorias/camaras-seguridad', [App\Http\Controllers\CategoriasController::class, 'camarasseguridad_index']);
Route::get('/contenidoweb/categorias/otras-categorias', [App\Http\Controllers\CategoriasController::class, 'otrascategorias_index']);


Route::resource('products',App\Http\Controllers\ProductController::class)->middleware('auth');
