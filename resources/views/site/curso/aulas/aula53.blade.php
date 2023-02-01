@extends('layouts.aula')

@section('title', 'aula53')

@section('content')


    <h3 class="red">@@while</h3>
    <hr>
    <p>Laço de repetição, excuta até que uma condição seja satisfeita.</p>
    <P>É necessario usar e declarar antes uma variavel de controle do laço($i = 0)</P>
    @isset($array)

        @php $i = 0 @endphp
        @while (isset($array[$i]))
            <p>Carro: {{ $array[$i]['nome'] }}</p>
            <p>Nome: {{ $array[$i]['carro'] }}</p>
            <p>Dinheiro: {{ $array[$i]['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $array[$i]['ddd'] }} {{ $array[$i]['telefone'] }}</p>
            @php $i++ @endphp
            <hr>
        @endwhile
    @endisset

@endsection
