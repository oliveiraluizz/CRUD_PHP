<?php

use App\Http\Controllers\Admin\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/admin/produtos', [ProdutoController::class, 'index']);


Route::post('/admin/produtos', [ProdutoController::class, 'salvar']);


Route::get('/admin/produtos/{id}', [ProdutoController::class, 'date']);


Route::put('/admin/produtos/{id}', [ProdutoController::class, 'atualizar']);


Route::delete('/admin/produtos/{id}', [ProdutoController::class, 'deletar']);
