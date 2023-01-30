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

    public function aula47(){
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => 'R$ 30.200'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo'
                ]
        ];
        return view('site.curso.aulas.aula47', compact('array'));
    }

    public function aula48(){
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '01'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => ''
                ]
        ];
        return view('site.curso.aulas.aula48', compact('array'));
    }

    public function aula49(){
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '01'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => ''
                ]
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado': 'não informado'; 
        return view('site.curso.aulas.aula49', compact('array', 'msg'));
    }


}
