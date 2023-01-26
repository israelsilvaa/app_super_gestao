<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                fornecedores
            </div>
            <div class="links">
                <a href="{{ Route('site.index') }}"> Home(principal) </a>
                <a href="#"><span class="red"> Fornecedores</span></a>
                <br>
                <hr>{{ 'teste com chaves' }}
                <hr>
                <?= 'teste com tag curta de impressão' ?>
                {{-- comentario BLADE --}}
                @php
                    // comentário nativo php
                    
                    /*
                            comentário de varias linhas
                        */
                    echo '<hr>tese de echo com php puro';
                @endphp
                @if(count($fornecedores) == 0)
                    <p>Entrada no IF</p>
                @elseif(count($fornecedores) == 1 )
                    <p>Entrada no ELSEIF</p>
                @else
                    <p>Enrada no ELSE</p>
                @endif
                
                @unless(count($fornecedores) == 0)
                    <p>@@unless: Retorno se a contagem for diferente de 0. Contagem atual:{{ count($fornecedores) }}</p>
                @endunless

            </div>
        </div>
    </div>
</body>

</html>
