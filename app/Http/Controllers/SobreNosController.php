<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos(){
        return view('site.sobre_nos', ['titulo' => 'Super Gestão - Sobre Nós']);
    }
}
