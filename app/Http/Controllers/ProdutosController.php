<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() 
    {
        $findAllProdutos = Produto::all();

        return view('pages.produtos.paginacao', compact('findAllProdutos'));
     //retornando a view de paginacao, e mandando o findAllProdutos para ela mostrar todos produtos em tela
    }
}   
