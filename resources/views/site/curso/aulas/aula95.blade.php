@extends('site.curso.layouts.aula')

@section('title', 'aula - 95')

@section('content')

    <h3 class="red">tinker find();</h3>
    <hr>

    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>Tinker</h4></div>
        <div class="card-body">
            <p class="card-text">
                #1 No terminal: <br>php artisan tinker<br>
                #2 entrar no contexto da classe:<br>use \App\SiteContato;<br>
                #3 instanciar e buscar:<br>$site2 = SiteContato::find(1);<hr>
                retorna o registr com chave 1, poderia sem um array de chaves tabem ::find([1, 2, 3]).
            </p>
        </div>
    </div>
    


@endsection
