<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerOferta;
use App\Http\Controllers\Vendedores\ControllerGestionarProductos;
use App\Http\Controllers\Vendedores\ControllerGestionarServicios;
use App\Http\Controllers\Vendedores\ControllerGestionPagos;
use App\Http\Controllers\Vendedores\ControllerPefil;
use App\Http\Controllers\Vendedores\ControllerLogin;
use App\Http\Controllers\Vendedores\ControllerMetodoPago;
use App\Http\Controllers\Vendedores\ControllerEstadoProducto;
use App\Http\Controllers\Vendedores\ControllerActividadCuenta;
use App\Http\Controllers\Vendedores\ControllerRegistro;
use App\Http\Controllers\Vendedores\ControllerEstadistica;
use App\Http\Controllers\Vendedores\ControllerGestionPedidos;
use App\Http\Controllers\Vendedores\ControllerSuscripciones;
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
Route::view('/correoContrasena', 'login.correoContrasena');

Route::view('/', 'productos.index');

Route::get('/perfil/{id}', [ControllerPefil::class, 'show'])->name('perfil.show');
Route::view('/recuperarContrasena', 'login.recuperacionContrasena');


Route::get('/perfilEmpresarial/{id}', [ControllerPefil::class, 'perfilEmpresarial'])->name('perfil.show');
Route::get('/perfilIndividual/{id}', [ControllerPefil::class, 'perfilIndividual'])->name('perfil.perfilIndividual');


Route::resource('productos', ControllerGestionarProductos::class);
Route::resource('servicios', ControllerGestionarServicios::class);
Route::resource('pagos', ControllerGestionPagos::class);
Route::resource('suscripciones', ControllerSuscripciones::class);
Route::resource('metodoPago', ControllerMetodoPago::class);



Route::resource('login', ControllerLogin::class);
Route:: get('/verificacion', [ControllerLogin::class,'verificar'])->name('verif');

Route::get('/registroEmpresarial', [ControllerRegistro::class, 'registroPerfilEmpresarial'])->name('registroPerfilEmpresarial');
Route::get('/registroIndividual', [ControllerRegistro::class, 'registroPerfilIndividual'])->name('registroPerfilIndividual');


Route::resource('estadoProducto', ControllerEstadoProducto::class);
Route::resource('actividadCuenta', ControllerActividadCuenta::class);


Route::get('/reportesProductos', [ControllerEstadistica::class, 'reportesProducto'])->name('reportesProductos');
Route::get('/reportesVentas', [ControllerEstadistica::class, 'reportesVentas'])->name('reportesVentas');


Route::resource('pedidos', ControllerGestionPedidos::class);

Route::view('/pedidoCancelado', 'plantillaCorreos.pedidoCancelado');

Route::resource('ofertas', ControllerOferta::class);



