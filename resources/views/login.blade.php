<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="/logar" method="post">
    @csrf
    <input type="text" name="email" placeholder="e-mail" required>
    <input type="password" name="senha" placeholder="senha" required>
    <button type="submit">Login</button>
</form>
    
</body>
</html>