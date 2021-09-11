<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastro.css">
    <title>Cadastro </title>
</head>
<body>

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
    

</body>
</html>