<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function view()
    {

        return view('site.curso.modulo');
    }

    public function aula46()
    {
        $fornecedores = ['maça', 'uva', 'goiaba'];

        return view('site.curso.aulas.aula46', compact('fornecedores'));
    }

    public function aula47()
    {
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

    public function aula48()
    {
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

    public function aula49()
    {
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => null
            ]
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula49', compact('array', 'msg'));
    }
    public function aula51()
    {
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '11', //são paulo-SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => null,
                'ddd' => '91', //Belém-PA
                'telefone' => '1111-1111'
            ],
            2 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '32', //juiz de fora-CE
                'telefone' => '2222-2222'
            ],
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula51', compact('array', 'msg'));
    }

    public function aula52()
    {
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '11', //são paulo-SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => null,
                'ddd' => '91', //Belém-PA
                'telefone' => '1111-1111'
            ],
            2 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '32', //juiz de fora-CE
                'telefone' => '2222-2222'
            ],
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula52', compact('array', 'msg'));
    }
    public function aula53(){
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '11', //são paulo-SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => null,
                'ddd' => '91', //Belém-PA
                'telefone' => '1111-1111'
            ],
            2 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '32', //juiz de fora-CE
                'telefone' => '2222-2222'
            ],
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula53', compact('array', 'msg'));
    }
    public function aula54(){
        $array = [
            0 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '11', //são paulo-SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'carro' => 'supra',
                'nome' => 'marcelo',
                'dinheiro' => null,
                'ddd' => '91', //Belém-PA
                'telefone' => '1111-1111'
            ],
            2 => [
                'carro' => 'nissan',
                'nome' => 'caio',
                'dinheiro' => '0',
                'ddd' => '32', //juiz de fora-CE
                'telefone' => '2222-2222'
            ],
        ];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula54', compact('array', 'msg'));
    }
    public function aula55(){
        $array = [];
        $msg = empty($array[0]['dinheiro']) ? 'foi informado' : 'não informado';
        return view('site.curso.aulas.aula55', compact('array', 'msg'));
    }
}
