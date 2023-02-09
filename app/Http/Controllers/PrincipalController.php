<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        $motivo_contatos = ([
            '1' => 'duvida',
            '2' => 'elogio',
            '3' => 'reclamação'
        ]);
        return view('site.principal', ['titulo' => 'Super Gestão - Home', 'motivo_contatos'=>$motivo_contatos]);
    }
    
}
