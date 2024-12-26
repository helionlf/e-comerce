<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD admin</title>

</head>
<body>

    <!-- Header que aparecerá em todas as páginas -->
    <header>
        <a href="/inicio" class="logo">Liberdade Peças</a>

        <nav class="navlist">
            <li><a href="/inicio/admin">Cadastrar</a></li>
            <li><a href="/inicio">Início</a></li>
        </nav>
    </header>

    <!-- Conteúdo principal da página -->
    @yield('conteudo')
    
</body>
</html>
