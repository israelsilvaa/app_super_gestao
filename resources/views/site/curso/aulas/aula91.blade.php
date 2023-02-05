@extends('site.curso.layouts.aula')

@section('title', 'aula - 91')

@section('content')

    <h3 class="red">Eloquent - Inserindo registros</h3>
    <hr>

    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>Tinker</h4></div>
        <div class="card-body">
            <p class="card-text">
                #1 No terminal: <br>php artisan tinker<br>
                #2 instanciar um objeto: <br>$contato = new \App\NomeDaClasseOuModel <br>
                #3 setar atributos da tabela: <br>$contato->nome = 'joão';<br>
                #4 ver os sets: <br>print_r($contato->getAttributes());<br>
                #5 P/ Persistir: <br>$contato->save();

            </p>
        </div>
    </div>
    


@endsection
