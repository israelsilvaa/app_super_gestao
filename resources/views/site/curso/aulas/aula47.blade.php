@extends('layouts.aula')

@section('title', 'aula47')

@section('content')

    <h3>Função Isset(), verifica se uma variavel está setada</h3>

    <h5 class="red">Indice 0 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[0]['nome'] }}</p>
        <p>Nome: {{ $array[0]['carro'] }}</p>
        
        @if (isset($array[0]['dinheiro']))
            <p>Dinheiro: {{ $array[0]['dinheiro'] }}</p>
        @endif
    @endif

    <p>O atributo "dinheiro" é exibido apenas se o mesmo estiver setado a variavel "array"</p>
    <h5 class="red">Indice 1 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[1]['nome'] }}</p>
        <p>Nome: {{ $array[1]['carro'] }}</p>
        
        @if (isset($array[1]['dinheiro']))
            <p>Dinheiro: {{ $array[1]['dinheiro'] }}</p>
        @endif
    @endif

@endsection
