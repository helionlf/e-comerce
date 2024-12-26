<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberdade Peças</title>
</head>
<body>

    <!-- Header que aparecerá em todas as páginas -->
    <header>
        <a href="/inicio" class="logo">Liberdade Peças</a>
        <nav class="navlist">
            <li><a href="/inicio">Início</a></li>
            <li><a href="/carrinho">Carrinho <span> {{ \Cart::getContent()->count() }} </span> </a></li>
            <li><a href="#">Comprar</a></li>
            <li><a href="#">Contato</a></li>
        </nav>

        @auth
            <nav class="navlist">
                <li><a href="#">Olá {{auth()->user()->name}} </a></li>
                <li><a href=" {{ '/logout' }} "> Sair </a></li>
            </nav>
        @else
            <nav class="navlist">
                <li><a href="{{ '/login' }}">Login</a></li>
            </nav>
        @endauth
        
    </header>

    <!-- Conteúdo principal da página -->
    @yield('conteudo')

    <!-- Footer que aparecerá em todas as páginas -->
    <footer>
        <section class="section-footer">
            <div class="footer-box">
                <h3>Recursos</h3>
                <a href="/inicio">Início</a>
                <a href="/carrinho">Carrinho</a>
                <a href="#">Comprar</a>
                <a href="#">Contato</a>
            </div>

            <div class="footer-box">
                <h3>Social</h3>
                <div class="social">
                    <a href="#">Instagram</a>
                    <a href="#">WhatsApp</a>
                </div>
            </div>
        </section>

        <div class="copyright">
            <div class="end-text">
                <p>&copy; CopyRight 2024 By <a href="#">Liberdade peças</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
