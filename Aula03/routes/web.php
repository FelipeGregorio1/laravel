<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/product/create', [ProductController::class, 'create']); //formulario
Route::post('/product', [ProductController::class, 'store']); //salvar no banco
Route::get('/product', [ProductController::class, 'index']); //lista produtos
Route::get('/product/{id}/edit', [ProductController::class, 'edit']); //editar
Route::put('/product/{id}', [ProductController::class, 'update']); //atualizar
Route::delete('/product/{id}', [ProductController::class, 'destroy']); //excluir

Route::get('/', function () {
    return view('welcome');
});
