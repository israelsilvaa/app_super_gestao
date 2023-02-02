<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">

    </head>

    <body>
        <div class="topo">

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.sobre_nos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                    <li><a href="{{ route('curso.modulos') }}">Modulos</a></li>
                </ul>
            </div>
        </div>

        @yield('content')

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{asset('img/facebook.png')}}">
                <img src="{{asset('img/linkedin.png')}}">
                <img src="{{asset('img/youtube.png')}}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{asset('img/mapa.png')}}">
            </div>
        </div>
    </body>
</html>