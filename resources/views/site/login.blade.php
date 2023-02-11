@extends('site.layouts_site.supergestao')

@section('title', $titulo)

@section('content')


    <div class="titulo-pagina">
        login
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('site.login') }}" method="POST">
                @csrf
               
                <input type="email" name="email" id="" class="borda-preta" placeholder="Email">
               
                <input type="password" name="email" id="" class="borda-preta" placeholder="Senha">
                <button type="submit" class="borda-preta">acessar</button>
            </form>
        </div>
    </div>

@endsection
