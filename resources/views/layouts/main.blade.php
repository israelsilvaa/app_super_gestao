<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body class="bg bg-dark text-light">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <span class="titulosite">
                    @yield('title')
                </span>
            </div>
            <div class="links">
                <a href="{{ Route('site.index') }}">Home</a>
                <a href="{{ Route('site.sobre_nos') }}">Sobre Nos</a>
                <a href="{{ Route('site.contato') }}">Contato</a>
                <a href="{{ Route('curso.modulos') }}">Modulos</a>
                
            </div>
            <div class="bot-modulos">
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="content">
        <p class="red2">Super Gestão &copy; 2023</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
