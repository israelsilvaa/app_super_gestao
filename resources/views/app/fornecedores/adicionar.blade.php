@extends('app.layouts.basico')
@section('title', 'Adicionar')

@section('content')


    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <h1>Fornecedor - Adicionar</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedores.adicionar')}}">novo</a></li>
                
                <li><a href="{{route('app.fornecedores')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{$msg ?? ''}}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{route('app.fornecedores.adicionar')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$fornecedor->id ?? ''}}">
                    <input type="text" value="{{ $fornecedor->nome ?? old('nome')}}"  name="nome" placeholder="Nome" class="borda-preta">
                    {{$errors->has('nome') ? $errors->first('nome'): '' }}
                    <input type="text" value="{{$fornecedor->site ?? old('site')}}" name="site" placeholder="Site" class="borda-preta">
                    {{$errors->has('site') ? $errors->first('site'): '' }}
                    <input type="text" value="{{$fornecedor->uf ?? old('uf')}}" name="uf" placeholder="UF" class="borda-preta">
                    {{$errors->has('uf') ? $errors->first('uf'): '' }}
                    <input type="text" value="{{$fornecedor->email ?? old('email')}}" name="email" placeholder="E-mail" class="borda-preta">
                    {{$errors->has('email') ? $errors->first('email'): '' }}
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection