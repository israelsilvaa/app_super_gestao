@extends('app.layouts.basico')
@section('title', $titulo)

@section('content')


    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Fornecedor</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedores.adicionar')}}">novo</a></li>
                
                <li><a href="{{route('app.fornecedores')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{Route('app.fornecedores.listar')}}" method="POST">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                    <button type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
@endsection