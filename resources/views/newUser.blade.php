<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Cadastro de Usuario </title>
</head>
<body>
<form action="{{ route('users.store')}}" method="post">
        @csrf
        <label for=""> Nome de Usuaro: </label>
        <input type="text" name="name">

        <label for=""> Email: </label>
        <input type="email" name="email">

        <label for=""> Senha: </label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar Usuario">
    </form>
</body>
</html>