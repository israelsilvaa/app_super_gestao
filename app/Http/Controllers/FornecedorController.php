<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedores.index', ['titulo' => 'Fornecedor']);
    }

    public function listar(){
        return view('app.fornecedores.listar', ['titulo' => 'Listar']);
    }

    public function adicionar(){
        return view('app.fornecedores.adicionar', ['titulo' => 'adicionar']);
    }
}
