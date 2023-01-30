@extends('layouts.aula')

@section('title', 'aula49')

@section('content')

    <h3>Operador condicional ternário</h3>
    <p>É basicamnete um atalho para o IF</p>
    <p class="code">Condição ? se True : Se False;</p>OU
    <p class="code">Condição ? se True : (Condição ? se True : Se False;);</p><hr>

    <p>Atributo "dinheiro" foi verificado dentro do controlador, e atribuido uma mensagem de acordo com seu conteudo</p>
    <h5 class="red">Indice 1 do array</h5>
    @if (isset($array))
        <p>Carro: {{ $array[1]['nome'] }}</p>
        <p>Nome: {{ $array[1]['carro'] }}</p>
        <p>Dinheiro: {{ $msg }}</p>
        
    @endif

@endsection
