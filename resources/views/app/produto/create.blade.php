@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Adicionar Produto</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produtos.index') }}">voltar</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="">
                    @csrf
                    <input type="text" name="nome" value="" placeholder="Nome" class="borda-preta">

                    <input type="text" name="descricao" value="" placeholder="Descrição" class="borda-preta">

                    <input type="text" name="peso" value="" placeholder="peso" class="borda-preta">

                    <select name="unidade_id" class="borda-preta">
                        <option>-- Selecione a Unidade de Medida --</option>

                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
