<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberdade Peças</title>

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
                <li><a href="/inicio">Início</a></li>
                <li><a href="/carrinho">Carrinho <span> {{ \Cart::getContent()->count() }} </span> </a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Contato</a></li>

                @auth
                    {{-- <nav class="navlist"> --}}
                    <li><a href="#">Olá {{auth()->user()->name}} </a></li>
                    <li><a href=" {{ '/logout' }} "> Sair </a></li>
                    {{-- </nav> --}}
                @else
                {{-- <nav class="navlist"> --}}
                    <li><a href="{{ '/login' }}">Login <i class="material-icons right">account_circle</i></a></li>
                {{-- </nav> --}}
                @endauth

              </ul>
            </div>
        </nav>
             
    </header>

    <!-- Conteúdo principal da página -->
    @yield('conteudo')

    <!-- Footer que aparecerá em todas as páginas -->


    <footer class="page-footer red">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Recursos</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="/inicio">Início</a></li>
                <li><a class="grey-text text-lighten-3" href="/carrinho">Carrinho</a></li>
                <li><a class="grey-text text-lighten-3" href="#">Comprar</a></li>
                <li><a class="grey-text text-lighten-3" href="#">Contato</a></li>
              </ul>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Social</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#">Instagram</a></li>
                <li><a class="grey-text text-lighten-3" href="#">WhatsApp</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <p>&copy; CopyRight 2024 By <a href="#">Liberdade peças</a></p>
            <a class="grey-text text-lighten-4 right" href="#">More Links</a>
          </div>
        </div>
    </footer>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
