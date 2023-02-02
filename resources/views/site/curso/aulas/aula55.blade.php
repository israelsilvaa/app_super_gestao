@extends('site.curso.layouts.aula')

@section('title', 'aula - 55')

@section('content')

    <h3 class="red">@@forelse</h3>
    <hr>
    <p>Desvia o fluxo caso o array a ser vazio esteja vazio.</p>
    @isset($array)
        @forelse ($array as $indice => $objeto)
            
            <p>Nome: {{ $objeto['carro'] }}</p>
            <p>Dinheiro: {{ $objeto['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $objeto['ddd'] }} {{ $objeto['telefone'] }}</p>
            <hr>
        @empty
            Não existem cadastros!<hr>
            <h3>Aula - 56.</h3>
            <h3 class="red">escapando os caracteres de impressão do blade'</h3> 
            <p>utilizamos o @ antes das chaves, e assim elas já podem ser impressas</p>
            <p>Carro: @{{ $objeto['nome'] }}</p>
    @endforelse
@endisset

@endsection
