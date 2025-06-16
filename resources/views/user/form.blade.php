<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberdade Peças</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head>
    <body>
        <header>
            <nav class="red">
                <div class="nav-wrapper container">
                  <a href="#" class="brand-logo">Liberdade Peças</a>
                </div>
            </nav>
        </header>
        <main>

            <section>
                @if ($mensagem = Session::get('erro'))
                    {{ $mensagem }}
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $erro)
                        {{ $erro }} <br>
                        
                    @endforeach
                @endif

                <div class="row container">
                    <form class="col s12" action="{{ '/auth' }}" method="POST">
                        @csrf

                        <br><br>

                        <div class="row">
                            <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                            </div>
                        </div>

                        <button class="btn blue" type="submit">Entrar <i class="material-icons right">send</i></button>
                    </form>
                </div>

                <div class="center">
                    <p>Ainda não possui uma conta? <span><a href="cadastro/">Cadastre-se</a></span></p>
                </div>
            </section>
            
        </main>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</head>