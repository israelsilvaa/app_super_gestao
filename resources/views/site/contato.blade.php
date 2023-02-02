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
                
                @component('site.layouts_site._components.form_contato')
                @endcomponent
                
            </div>
        </div>
    </div>
@endsection
