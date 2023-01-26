<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = ['teste', 'teste2'];
        return view('app.fornecedor.index', compact('fornecedores') );
    }
}
