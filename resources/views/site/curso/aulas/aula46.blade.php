@extends('layouts.aula')

@section('title', 'aula - 46')

@section('content')

    {{ 'teste com chaves'}}
    
    <hr>
    <?= 'teste com tag curta de impressão' ?>
    {{-- comentario BLADE --}}
    @php
        // comentário nativo php
        
        /*
        comentário de varias linhas
        */
        echo '<hr>tese de echo com php puro';
    @endphp
    @if (count($fornecedores) == 0)
        <p>Entrada no IF</p>
    @elseif(count($fornecedores) == 1)
        <p>Entrada no ELSEIF</p>
    @else
        <p>Entrada no ELSE</p>
    @endif
    <hr>
    @unless(count($fornecedores) == 0)
        <p>@@unless: Retorno se a contagem for diferente de 0. Contagem atual: {{ count($fornecedores) }}</p>
    @endunless

@endsection
