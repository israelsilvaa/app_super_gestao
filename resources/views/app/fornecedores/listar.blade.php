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
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td>Excluir</td>
                                <td><a href="{{route('app.fornecedores.editar', $fornecedor->id)}}">Editar</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
