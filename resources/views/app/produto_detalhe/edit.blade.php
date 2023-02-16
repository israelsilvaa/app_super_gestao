@extends('app.layouts.basico')

@section('titulo', 'Editar detalhes do Produto')

@section('content')

    <div class="conteudo-pagina">

        <div class="titulo-pagina2">
            <p>Editar detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto_detalhe._components.form_create_edit', [
                    'produto_detalhe' => $produto_detalhe,
                    'unidades' => $unidades,
                ])
                @endcomponent
            </div>
        </div>

    </div>

@endsection
