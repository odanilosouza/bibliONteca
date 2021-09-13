@extends('layouts.outsite')

@section('conteudo')
<form action="/logar" method="post">
<img src="/imagens/logobibli.jpg" width: 189px; height="135px">
    @csrf
    <input type="text" name="email" placeholder="e-mail" required>
    <input type="password" name="senha" placeholder="senha" required>
    <button type="submit">Login</button>

    <a href="/cadastro">Cadastre-se</a>
</form>

@endsection