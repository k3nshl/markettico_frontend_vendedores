<?php

use App\Http\Controllers\ControllerPefil;
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

Route::get('/perfilEmpresarial/{id}', [ControllerPefil::class, 'show'])->name('perfil.show');