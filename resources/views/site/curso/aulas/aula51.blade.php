@extends('layouts.aula')

@section('title', 'aula51')

@section('content')
    
<h3 class="red">@@switch/case</h3>
<hr>
<p>Verifica os numeros de DDD e rotorna o estado referente ao mesmo, de acordo com o caso.</p>
@isset($array)
    <p>Carro: {{ $array[0]['nome'] }}</p>
    <p>Nome: {{ $array[0]['carro'] }}</p>
    <p>Dinheiro: {{ $array[0]['dinheiro'] ?? 'Dado não preenchido'}}</p>
    <p>Telefone: {{ $array[0]['ddd'] }} {{ $array[0]['telefone'] }}</p>
    @switch($array[0]['ddd'])
        @case('11')
            São Paulo-SP
            @break
        @case('91')
            Belém-PA
            @break
        @case('32')
            Juiz de Fora-CE
            @break
        @default
            Estado não identificado
    @endswitch
@endisset

@endsection
