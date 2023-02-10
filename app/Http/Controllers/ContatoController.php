<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
       
        $motivo_contatos = MotivoContato::all();
        
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

        return view('site.contato', ['titulo' => 'Super Gestão - Contato', 'motivo_contatos'=>$motivo_contatos]);
    }
    public function salvar(Request $request){
        
        // realizar a validação dos dados do formulário recebidos no request.
        $regras = [
            'nome' => 'required|min:3|max:10',
            'telefone' => 'required',
            'email' => 'email|unique:site_contatos',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido.',
            'nome.min' => 'O nome precisa ter no minimo 3 letras',
            'nome.max' => 'O nome pode ter no máximo 50 letras',
            'email.email' => 'O e-mail informado não é valido!',
            'email.unique' => 'Esse email já existe',
            'motivo_contatos_id.required' => 'Selecione um motivo para contato.',
            'mensagem.max' => 'a mensagem deve ter no máximo 2000 caracteres.'
        ];
        $request->validate($regras, $feedback);

        // salva todos os atributos nobanco de dados
        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
