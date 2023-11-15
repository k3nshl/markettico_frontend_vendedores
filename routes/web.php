<?php

use App\Http\Controllers\ControllerPefil;
use App\Http\Controllers\Vendedores\ControllerGestionarProductos;
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
//Route::view('/', 'login.correoContrasena');

Route::view('/', 'plantilla');

Route::get('/perfil/{id}', [ControllerPefil::class, 'show'])->name('perfil.show');
//Route::view('/recuperarContrasena', 'login.recuperacionContrasena');


Route::get('/perfilEmpresarial/{id}', [ControllerPefil::class, 'showEmpresarila'])->name('perfil.show');
Route::get('/perfilIndividual/{id}', [ControllerPefil::class, 'perfilIndividual'])->name('perfil.perfilIndividual');






Route::resource('gestionarProductos', ControllerGestionarProductos::class);

Route::get('/perfilEmpresarial/{id}', [ControllerPefil::class, 'show'])->name('perfil.show');


