@extends('layouts.outsite')

@section('conteudo')
<form action="/cadastrar" method="post">
    <img src="/imagens/logobibli.jpg" width: 189px; height="135px">
    @csrf 
    <input type="text" name="nome" placeholder="Nome" required> 
    <input type="text" name="email" placeholder="e-mail" required>
    <input type="password" name="senha" placeholder="senha" required>
    <input type="password" name="confirmacao_senha" placeholder="confirmação de senha" required>
    <button type="submit"> Cadastrar </button> 
    <a href="/login"> Voltar para o login</a>
</form>
@endsection

