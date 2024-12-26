@if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif

@if ($errors->any())
    @foreach ($errors->all() as $erro)
        {{ $erro }} <br>
        
    @endforeach
@endif

<form action="{{ '/auth' }}" method="POST">
    @csrf

    Email: <input type="email", name="email">
    Senha: <input type="password" name="password">
    <button type="submit"> Entrar</button>
</form>