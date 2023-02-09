<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        
        /*
        // Para utililxar metofo FILL, deves-ser configura-lo no model:
        // protected $tfillable = ['nome', 'idade'];
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();
        */

        return view('site.contato', ['titulo' => 'Super Gestão - Contato'])->with('msg', 'Mensagem enviada com sucesso!');
    }
}
