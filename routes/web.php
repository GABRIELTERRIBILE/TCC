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
Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'index'])->name('produtos');
Route::get('/demandas', [App\Http\Controllers\DemandaController::class, 'index'])->name('Demanda');
Route::post('/cadastra-produto', [\App\Http\Controllers\ProdutosController::class, 'store'] );
Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('fornecedores');
Route::get('/fornecedores/criar',[App\Http\Controllers\FornecedoresController::class, 'create']);
Route::post('/fornecedores/criar', [App\Http\Controllers\FornecedoresController::class, 'store']);
