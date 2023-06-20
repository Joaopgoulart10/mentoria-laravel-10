<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
	});
//prefix é, tudo que acessar /produtos ele vai acessar index, ele vai cria uma junção para você criar suas rotas e functions 
// 'index' é o nome que vai estar na function do produtosController
Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
});

