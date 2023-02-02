@extends('site.curso.layouts.aula')

@section('title', 'aula - 54')

@section('content')

    <h3 class="red">@@foreach</h3>
    <hr>
    <p>É indicado para varrer arrays, e nesse caso temos um array de arrays.</p>
    @isset($array)
        @foreach ($array as $indice => $objeto)
            <p>Carro: {{ $objeto['nome'] }}</p>
            <p>Nome: {{ $objeto['carro'] }}</p>
            <p>Dinheiro: {{ $objeto['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $objeto['ddd'] }} {{ $objeto['telefone'] }}</p>
            <hr>
        @endforeach
    @endisset

@endsection