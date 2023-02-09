@extends('site.layouts_site.supergestao')

@section('title', $titulo)

@section('content')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                {{-- por padrão o formulario envia o metodo GET, por isso esse 
                    parametro poderia ser omitido --}}
                @if ()
                    
                @endif
                @component('site.layouts_site._components.form_contato' , ['classe' => 'borda-preta'])
                    <p>a nossa equipe analizara a sua mensageme e respondera o mais breve possivel</p>
                    <p>o tempo medio de resposta da equipe é de 48 horas</p>
                @endcomponent

            </div>
        </div>
    </div>
@endsection
