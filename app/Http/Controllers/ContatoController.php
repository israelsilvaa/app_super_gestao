<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){

        echo '<pre>';
        dd($request->all());
        echo '</pre>';
        return view('site.contato', ['titulo' => 'Super Gestão - Contato']);
    }
}
