@extends('app.layouts.basico')

@section('titulo', 'Detalhes do produto')

@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Adicionar detalhes do Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">voltar</a></li>
              
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">

               @component('app.produto_detalhe._components.form_create_edit', ['unidades'=>$unidades])
                   
               @endcomponent
            </div>
        </div>

    </div>

@endsection
