<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Listagem de Usuario </title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>NOME: </td>
            <td>EMAIL: </td>
            <td>ACÕES: </td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nome}} </td>
            <td>{{$user->email}} </td>
            <td><a href=""> Ver usuario </a>
                <form action="" method="post">
                    <input type="hidden" name="user" value="">
                </form>
             </td>
        </tr>
        @endforeach
    </table>
</body>
</html>