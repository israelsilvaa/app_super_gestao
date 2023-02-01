@extends('layouts.aula')

@section('title', 'aula - 55')

@section('content')

    <h3 class="red">@@forelse</h3>
    <hr>
    <p>Desvia o fluxo caso o array a ser vazio esteja vazio.</p>
    @isset($array)
        @forelse ($array as $indice => $objeto)
            <p>Carro: {{ $objeto['nome'] }}</p>
            <p>Nome: {{ $objeto['carro'] }}</p>
            <p>Dinheiro: {{ $objeto['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $objeto['ddd'] }} {{ $objeto['telefone'] }}</p>
            <hr>
        @empty
            Não existem cadastros!
    @endforelse
@endisset

@endsection
