@extends('app.layouts.basico')
@section('title', $titulo)

@section('content')


    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Fornecedor - Listar</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedores.adicionar') }}">novo</a></li>
                <li><a href="{{ route('app.fornecedores') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" whidth="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>descrição</th>
                            <th>peso</th>
                            <th>Unidade-ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href="">Excluir</a></td>
                                <td><a href="">Editar</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                {{$produtos->appends($request)->links()}}
                {{-- <br>
                {{$fornecedores->count()}}- Total de registros por página
                <br>
                {{$fornecedores->total()}}- Total de registros
                <br>
                {{$fornecedores->firstItem()}}- numero do primeiro registro da pagina
                <br>
                {{$fornecedores->lastItem()}}- ultimo registro
                 --}}
                Exibindo {{$produtos->count()}} produtos de {{$produtos->total()}}  (de {{$produtos->firstItem()}} a {{$produtos->lastItem()}})
            </div>
        </div>
    </div>
@endsection
