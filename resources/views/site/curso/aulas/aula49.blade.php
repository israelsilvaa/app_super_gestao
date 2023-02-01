@extends('layouts.aula')

@section('title', 'aula - 49')

@section('content')
    <h3>Operador condicional ternário</h3>
    <p>É basicamnete um atalho para o IF</p>
    <p class="code">Condição ? se True : Se False;</p>OU
    <p class="code">Condição ? se True : (Condição ? se True : Se False;);</p>
    <hr>

    <p>Atributo "dinheiro" foi verificado dentro do controlador, e atribuido uma mensagem de acordo com seu conteudo</p>
    <h5 class="red">Indice 1 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[0]['nome'] }}</p>
        <p>Nome: {{ $array[0]['carro'] }}</p>
        <p>Dinheiro: {{ $array[0]['dinheiro'] ?? 'Dado não preenchido'}}</p>
    @endif

    <h3>aula 50 - Operador condicional de valor Default(??)</h3>
    <p>retorna um valor Defalt em duas condições:<br>se não estiver setada ou se não tiver valor </p>
    @if (isset($array))
        <p>Carro: {{ $array[1]['nome'] }}</p>
        <p>Nome: {{ $array[1]['carro'] }}</p>
        <p>Dinheiro: {{ $array[1]['dinheiro'] ?? 'Dado não preenchido' }}</p>
    @endif

@endsection
