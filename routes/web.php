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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/demandas', [App\Http\Controllers\DemandaController::class, 'index'])->name('demandas');

Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('fornecedores');
Route::get('/fornecedores/criar',[App\Http\Controllers\FornecedoresController::class, 'create']);
Route::post('/fornecedores/criar', [App\Http\Controllers\FornecedoresController::class, 'store']);
Route::delete('/fornecedores/{id}',[App\Http\Controllers\FornecedoresController::class, 'destroy']);
Route::get('/fornecedores/{fornecedoresId}/edit',[App\Http\Controllers\FornecedoresController::class, 'getEdit']);
Route::post('/fornecedores/{fornecedoresId}',[App\Http\Controllers\FornecedoresController::class, 'storeEdit']);

Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/clientes/criar',[App\Http\Controllers\ClientesController::class, 'create']);
Route::post('/clientes/criar', [App\Http\Controllers\ClientesController::class, 'store']);
Route::delete('/clientes/{id}',[App\Http\Controllers\ClientesController::class, 'destroy']);
Route::get('/clientes/{clientesId}/edit',[App\Http\Controllers\ClientesController::class, 'getEdit']);
Route::post('/clientes/{clientesId}',[App\Http\Controllers\ClientesController::class, 'storeEdit']);

Route::get('/entrar',[App\Http\Controllers\EntrarController::class, 'index']);
Route::post('/entrar',[App\Http\Controllers\EntrarController::class, 'entrar']);

Route::get('/registrar',[App\Http\Controllers\RegistroController::class, 'create']);
Route::post('/registrar',[App\Http\Controllers\RegistroController::class, 'store']);

Route::get('/estoque', [App\Http\Controllers\EstoqueController::class, 'index'])->name('estoque');
Route::get('/estoque/criar',[App\Http\Controllers\EstoqueController::class, 'create']);
Route::post('/estoque/criar', [App\Http\Controllers\EstoqueController::class, 'store']);
Route::delete('/estoque/{id}',[App\Http\Controllers\EstoqueController::class, 'destroy']);
Route::get('/estoque/{estoqueId}/edit',[App\Http\Controllers\EstoqueController::class, 'getEdit']);
Route::post('/estoque/{estoqueId}',[App\Http\Controllers\EstoqueController::class, 'storeEdit']);

Route::get('/usuario/add', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario-add');
Route::post('/usuario/add', [App\Http\Controllers\UsuarioController::class, 'store']);
Route::post('/usuario/edit/{id}', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuario-edit');
Route::post('/usuario/del/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('usuario-del');


Route::get('/sair', function () {

    Auth::logout();
    return redirect('entrar');
});
