<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Cadastro de Usuario </title>
</head>
<body>
<form action="{{ route('users.store')}}" method="post">
        @csrf
        <label for="">Foto: </label>
        <input type="text" name="photo">

        <label for=""> Nome: </label>
        <input type="text" name="name">

        <label for=""> Estado Civil: </label>
        <input type="text" name="status">

        <label for=""> Genero: </label>
        <input type="text" name="gender">

        <label for=""> Naturalidade: </label>
        <input type="text" name="naturalness">
    </form>
    <form action="{{ route('telefones.store')}}" method="post">
        @csrf
        <label for="">telefone: </label>
        <input type="text" name="phone">

        <input type="submit" value="Cadastrar">
    </form>
    <form action="{{ route('enderecos.store')}}" method="post">
        @csrf
        <label for=""> Rua: </label>
        <input type="text" name="rua">

        <label for=""> Numero: </label>
        <input type="text" name="number">

        <label for=""> CEP: </label>
        <input type="text" name="cep">

        <label for=""> Cidade: </label>
        <input type="text" name="city">

        <label for=""> Estado: </label>
        <input type="text" name="state">

    </form>
    <form action="{{ route('experiencias.store')}}" method="post">
        @csrf
        <label for="">Cargo: </label>
        <input type="text" name="occupation">

        <label for=""> Empresa: </label>
        <input type="text" name="company">

        <label for=""> Nivel: </label>
        <input type="text" name="level">

        <label for=""> Area: </label>
        <input type="text" name="area">

        <label for=""> Data Inicio: </label>
        <input type="text" name="start">

        <label for=""> Data Fim: </label>
        <input type="text" name="end">

        <label for=""> Descrição: </label>
        <input type="text" name="description">
    </form>
    <form action="{{ route('formacoes.store')}}" method="post">
        @csrf
        <label for="">Curso: </label>
        <input type="text" name="course">

        <label for=""> Instituição: </label>
        <input type="text" name="company">

        <label for=""> Nivel: </label>
        <input type="text" name="level">

        <label for=""> Situação: </label>
        <input type="text" name="situation">

        <label for=""> Data Inicio: </label>
        <input type="text" name="start">

        <label for=""> Data Fim: </label>
        <input type="text" name="end">
    </form>
    <form action="{{ route('idiomas.store')}}" method="post">
        @csrf
        <label for="">Idioma: </label>
        <input type="text" name="language">

        <label for=""> Nivel: </label>
        <input type="text" name="lvl">
    </form>
    <form action="{{ route('deficiencias.store')}}" method="post">
        @csrf
        <label for="">Deficiencia: </label>
        <input type="text" name="def">

        <input type="submit" value="Cadastrar">
    </form>
    

</body>
</html>