@extends('layouts.aula')

@section('title', 'aula - 57')

@section('content')

    <h3 class="red">@@variavel loop</h3>
    <hr>
    <p>O objeto LOOP está diponivel apenas para os laços foreach e forelse</p>
    <p>Tabem ha a função @@add($$loop) que retorna dados da variavel loop</p>

    @isset($array)
        @forelse ($array as $indice => $objeto)
            

            ### -----Iteração atual: {{ $loop->iteration }} -----###
            <p>Nome: {{ $objeto['carro'] }}</p>
            <p>Dinheiro: {{ $objeto['dinheiro'] ?? 'Dado não preenchido' }}</p>
            <p>Telefone: {{ $objeto['ddd'] }} {{ $objeto['telefone'] }}</p>
            @if ($loop->first)
                <p class="red">Essa é a primeira iteração,identificação feita pelo objeto LOOP.</p>
            @endif
            @if ($loop->last)
                <p class="red">Essa é a primeira iteração,identificação feita pelo objeto LOOP.</p>
                <p class="red">Totale de registros: {{ $loop->count }}</p>
            @endif
            <hr>
        @empty
            Não existem cadastros!
            <hr>
            <h3>Aula - 56.</h3>
            <h3 class="red">escapando os caracteres de impressão do blade'</h3>
            <p>utilizamos o @ antes das chaves, e assim elas já podem ser impressas</p>
            <p>Carro: @{{ $objeto['nome'] }}</p>
        @endforelse
    @endisset
    
@endsection
