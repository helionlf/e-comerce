@if ($errors->any())
    @foreach ($errors->all() as $erro)
        {{ $erro }} <br>
        
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    Nome: <input type="text", name="name">
    Email: <input type="email", name="email">
    Senha: <input type="password" name="password">
    <button type="submit">Cadastrar</button>
</form>