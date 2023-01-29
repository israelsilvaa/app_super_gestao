<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/styles.css">
    
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
                <span class="titulosite">
                    @yield('title')
                </span>
            </div>

            <div class="links">
                <a href="{{ Route('site.index') }}"><span class="red"> Home(principal)</span></a>
                <a href="{{ Route('site.sobre-nos') }}">Sobre nos</a>
                <a href="{{ Route('site.contatos') }}">Modulos</a>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    <footer class="content">
        <p class="red2">Super Gestão &copy; 2023</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
