<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedores.index', ['titulo' => 'Fornecedor']);
    }

    public function listar(Request $request)
    {
        $lista = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->paginate(4);

        return view('app.fornecedores.listar', ['titulo' => 'Listar', 'fornecedores'=>$lista, 'request'=>$request->all()]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';
        // inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){

            // regras de validação
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'required|email'
            ];
            // mensagem de feedback de validação
            $feedback = [
                'required' => 'o campo :attribute é obrigatório',
                'nome.min' => 'deve ter no minimo 3 caracteres',
                'nome.max' => 'deve ter no maximo 40 caracteres',
                'uf.min' => 'deve ter no minimo 2 caracteres',
                'uf.max' => 'deve ter no maximo 2 caracteres',
                'email.email' => 'informe um email válido'
            ];
            // validando dados do form
            $request->validate($regras, $feedback);
            
            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            $msg = 'Cadastrado com sucesso!!!';
        }

        // edição
        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            
            if($update){
                $msg = 'Editado com sucesso';
            }else{
                $msg = 'falha na edição';
            }
            return redirect()->route('app.fornecedores.editar', ['id'=>$request->input('id'), 'msg' => $msg]);
        }

            
            return view('app.fornecedores.adicionar', ['msg' => $msg]);
        }

        public function editar($id, $msg = ''){
            $fornecedor = Fornecedor::find($id);
            
            return view('app.fornecedores.adicionar', ['titulo' => 'adicionar','fornecedor'=>$fornecedor, 'msg' => $msg]);
        }
        public function excluir($id){
            // $fornecedor = Fornecedor::find($id)->delete();
            $fornecedor = Fornecedor::find($id)->fornceDelete();
            return redirect()->route('app.fornecedores');
        }
    }
