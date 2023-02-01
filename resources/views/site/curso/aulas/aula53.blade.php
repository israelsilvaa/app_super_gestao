@extends('layouts.aula')

@section('title', 'aula53')

@section('content')
    

    <h3>aula 53 - Operador condicional de valor Default(??)</h3>
    <p>retorna um valor Defalt em duas condições:<br>se não estiver setada ou se não tiver valor </p>
    @if (isset($array))
        <p>Carro: {{ $array[1]['nome'] }}</p>
        <p>Nome: {{ $array[1]['carro'] }}</p>
        <p>Dinheiro: {{ $array[1]['dinheiro'] ?? 'Dado não preenchido' }}</p>
    @endif

@endsection
