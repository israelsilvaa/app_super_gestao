@extends('site.curso.layouts.aula')

@section('title', 'aula - 94')

@section('content')

    <h3 class="red">tinker all();</h3>
    <hr>

    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>Tinker</h4></div>
        <div class="card-body">
            <p class="card-text">
                #1 No terminal: <br>php artisan tinker<br>
                #2 instanciar um objeto: <br>$sites = \App\SiteContato::all();<br>
                OU<br>
                $sites = SiteContato::all();<br>
            </p>
        </div>
    </div>
    


@endsection
