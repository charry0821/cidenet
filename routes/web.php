<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('site.login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** 
 * Validamos que solo puedan consultar o mostrar las vistas si estan logeados en el sistema.
 */
Route::middleware(['auth'])->group(function () {


	Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados.index');

	Route::get('/empleados/crear', [App\Http\Controllers\EmpleadoController::class, 'crear'])->name('empleados.crear');

	Route::get('/empleados/filtros', [App\Http\Controllers\EmpleadoController::class, 'filtros'])->name('empleados.filtros');

	Route::post('/empleados/almacenar', [App\Http\Controllers\EmpleadoController::class, 'almacenar'])->name('empleados.almacenar');

	Route::get('empleados/{empleado}/editar', [App\Http\Controllers\EmpleadoController::class, 'editar'])->name('empleados.editar');

	Route::delete('empleados/{empleado}/eliminar', [App\Http\Controllers\EmpleadoController::class, 'eliminar'])->name('empleados.eliminar');
});
