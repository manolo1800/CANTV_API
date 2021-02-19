<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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
    return view('welcome');
});
//todos los metodos estan realizados en el controlador ClienteControllers en la carpeta app/http/controllers
Route::post('cliente/datos',[ClienteController::class,'BuscarDatos'])->name('cliente.BuscarDatos');
Route::get('cliente/formulario',[ClienteController::class,'Formulario'])->name('cliente.Nuevo');
Route::post('cliente/crear',[ClienteController::class,'CrearCliente'])->name('cliente.crear');
Route::get('cliente/buscar',[ClienteController::class,'Buscar'])->name('cliente.buscar');

?>  