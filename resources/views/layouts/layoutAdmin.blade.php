<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD admin</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <!-- Header que aparecerá em todas as páginas -->
    <header>

        <nav class="red">
            <div class="nav-wrapper container">
              <a href="#" class="brand-logo">Liberdade Peças</a>
              <ul id="nav-mobile" class="right">
                <li><a href="/inicio/admin">Cadastrar</a></li>
                <li><a href="/inicio">Início</a></li>

                @auth
                    {{-- <nav class="navlist"> --}}
                    <li><a href="#">Olá {{auth()->user()->name}} </a></li>
                    <li><a href=" {{ '/logout' }} "> Sair </a></li>
                    {{-- </nav> --}}
                @else
                {{-- <nav class="navlist"> --}}
                    <li><a href="{{ '/login' }}">Login</a></li>
                {{-- </nav> --}}
                @endauth

              </ul>
            </div>
        </nav>

    </header>

    <!-- Conteúdo principal da página -->
    @yield('conteudo')
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
