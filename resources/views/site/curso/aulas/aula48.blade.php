@extends('layouts.aula')

@section('title', 'aula - 48')

@section('content')

    <h3>Função Empty(), verifica se uma variavel está vazia</h3>
    <p>definição de variavel vazia para o PHP:
        - ''<br>
        - 0 <br>
        - 0.0<br>
        - '0'<br>
        - null<br>
        - false<br>
        - array()<br>
        - $var<br>

    </p>
    <h5 class="red">Indice 0 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[0]['nome'] }}</p>
        <p>Nome: {{ $array[0]['carro'] }}</p>
        
        @if (isset($array[0]['dinheiro']))
            <p>Dinheiro: {{ $array[0]['dinheiro'] }}</p>
        @endif
    @endif

    <p>Se o atributo "dinheiro" estiver vazio será avisado</p>
    <h5 class="red">Indice 1 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[1]['nome'] }}</p>
        <p>Nome: {{ $array[1]['carro'] }}</p>
        
        @if (empty($array[1]['dinheiro']))
            <p>Dinheiro: Atributo vazio</p>
        @else
            <p>Dinheiro: {{ $array[1]['dinheiro'] }}</p>
        @endif
    @endif


@endsection
