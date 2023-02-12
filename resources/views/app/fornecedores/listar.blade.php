@extends('app.layouts.basico')
@section('title', $titulo)

@section('content')


    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Fornecedor - Listar</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedores.adicionar')}}">novo</a></li>
                
                <li><a href="{{route('app.fornecedores')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
               ... lista de fornecedores ...
            </div>
        </div>
    </div>
@endsection