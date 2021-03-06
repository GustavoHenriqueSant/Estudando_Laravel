<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonte usada no projeto -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- CSS projeto -->
        <link rel="stylesheet" href="/css/style.css"/>

        <title>@yield('title')</title>

        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.svg" alt="Gustavo Envents"/>
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a href="/events/create" class="nav-link"> Criar Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link"> Entrar</a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link"> Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <footer>
            <p> Gustavo Events &copy; 2021</p>
        </footer>
    </body>
</html>
