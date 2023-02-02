@extends('site.curso.layouts.aula')

@section('title', 'aula - 52')

@section('content')


    <h3 class="red">@@FOR</h3>
    <hr>
    <p>Serve para ir de um ponto inicial a outro. assim podemos varrer as posições de um array</p>
    @isset($array)
        @for ($i = 0; isset($array[$i]); $i++)
            <p>Carro: {{ $array[$i]['nome'] }}</p>
            <p>Nome: {{ $array[$i]['carro'] }}</p>
            <p>Dinheiro: {{ $array[$i]['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $array[$i]['ddd'] }} {{ $array[$i]['telefone'] }}</p>
            @switch($array[$i]['ddd'])
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
            <hr>
        @endfor
    @endisset


@endsection
