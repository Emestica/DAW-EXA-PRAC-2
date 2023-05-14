<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
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

Route::get('/', function () {
    return view('inicio', ['pageName' => 'Inicio','name' => 'Alex', 'lastName' => 'Eméstica', 'group' => 'tdsv-11-a']);
});

Route::get('/clientes', [ClientesController::class, 'showView']);
//Route::get('/obtener-clientes', [ClientesController::class, 'getAllClientes']);
Route::post('/guardar-cliente', [ClientesController::class, 'saveCliente']);

Route::get('/articulos', [ArticulosController::class, 'showView']);
Route::get('/pedidos', [PedidosController::class, 'showView']);

Route::get('/welcome', function () {
    return view('welcome');
});