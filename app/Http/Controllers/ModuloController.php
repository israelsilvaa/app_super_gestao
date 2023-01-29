<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function view(){
        
        return view('site.curso.modulo');
    }

    public function aula46(){
        $fornecedores = ['maça', 'uva', 'goiaba'];
        
        return view('site.curso.aulas.aula46', compact('fornecedores'));
    }


}
