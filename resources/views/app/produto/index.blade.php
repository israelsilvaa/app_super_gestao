@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Listagem de Produtos</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produtos.create') }}">novo</a></li>

                <li><a href="{{ route('produtos.index') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Fornecedor</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th>Comprimento</th>
                            <th>largura</th>
                            <th>altura</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->fornecedor->nome }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td>{{ $produto->itemDetalhe->comprimento ?? ''}}</td>
                                <td>{{ $produto->itemDetalhe->largura ?? ''}}</td>
                                <td>{{ $produto->itemDetalhe->altura ?? ''}}</td>
                                <td><a href="{{ route('produtos.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                                <td>
                                    <form id="form_{{ $produto->id }}" method="post"
                                        action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <!--<button type="submit">Excluir</button>-->
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $produto->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('produtos.edit', ['produto' => $produto->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $produtos->appends($request)->links() }}

                <!--
                            <br>
                            {{ $produtos->count() }} - Total de registros por página
                            <br>
                            {{ $produtos->total() }} - Total de registros da consulta
                            <br>
                            {{ $produtos->firstItem() }} - Número do primeiro registro da página
                            <br>
                            {{ $produtos->lastItem() }} - Número do último registro da página

                            -->
                <br>
                Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a
                {{ $produtos->lastItem() }})
            </div>
        </div>

    </div>

@endsection
