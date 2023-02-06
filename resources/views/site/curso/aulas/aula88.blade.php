@extends('site.curso.layouts.aula')

@section('title', 'aula - 88')

@section('content')

    <h3 class="red">Migrations: Reset/status/refresh/fresh</h3>
    <hr>

    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>Reset</h4></div>
        <div class="card-body">
            <p class="card-text">
                executa todos os metodos down, revertendo assim todas as migrations. 
            </p>
        </div>
    </div>
    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>status</h4></div>
        <div class="card-body">
            <p class="card-text">
                mostra todas as migrations no banco, e se já foram executadas ou não.<br>atalho para: select * from migrations;
            </p>
        </div>
    </div>
    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>refresh</h4></div>
        <div class="card-body">
            <p class="card-text">
                Faz o rollback completo e logo depois o migrate, dessa forma o comando zera o conteudo do banco de dados
            </p>
        </div>
    </div>
    <div class="card text-white border-info bg-dark mb-3" style="max-width: 40rem;">
        <div class="card-header border-info"><h4>fresh</h4></div>
        <div class="card-body">
            <p class="card-text">
                faz o DROP de todas as tabelas do banco e depois o migrate
            </p>
        </div>
    </div>


@endsection
