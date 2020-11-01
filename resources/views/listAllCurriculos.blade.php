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
            <td>ACÕES: </td>
        </tr>
        @foreach($curriculos as $curriculo)
        <tr>
            <td>{{$curriculo->id}}</td>
            <td>{{$curriculo->nome}} </td>
            <td>{{$curriculo->photo}} </td>
            <td><a href=""> Ver usuario </a>
                <form action="" method="post">
                    <input type="hidden" name="curriculo" value="">
                </form>
             </td>
        </tr>
        @endforeach
    </table>
</body>
</html>