<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Editar Usuario </title>
</head>
<body>
<form action="{{ route('users.edit'), ['user' => $user =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Nome de Usuaro: </label>
        <input type="text" name="name" value="{{ $user->name}}">

        <label for=""> Email: </label>
        <input type="email" name="email" value="{{ $user->email}}">

        <label for=""> Senha: </label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar Usuario">
    </form>
</body>
</html>