<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        
        $motivo_contato = ([
            '1' => 'duvida',
            '2' => 'elogio',
            '3' => 'reclamação'
        ]);
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->save();
        
        /*
        // Para utililxar metofo FILL, deves-ser configura-lo no model:
        // protected $tfillable = ['nome', 'idade'];
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();
        */

        return view('site.contato', ['titulo' => 'Super Gestão - Contato', 'motivo_contato'=>$motivo_contato]);
    }
    public function salvar(Request $request){
        // realixar a validação dos dados do formulário recebidos no request.


        $request->validate([
            'nome' => 'required|min:3|max:10',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        #SiteContato::create($request->all());
    
    }
}
