<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Editar Curriculo </title>
</head>
<body>
<form action="{{ route('curriculos.edit'), ['curriculo' => $curriculo =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Nome de Usuaro: </label>
        <input type="text" name="name" value="{{ $curriculo->name}}">

        <label for=""> Foto: </label>
        <input type="text" name="photo" value="{{ $curriculo->photo}}">

        <label for=""> Estado Civil: </label>
        <input type="text" name="statu" value="{{ $curriculo->statu}}">

        <label for=""> Genero: </label>
        <input type="text" name="gender" value="{{ $curriculo->gender}}">

        <label for=""> Naturalidade: </label>
        <input type="text" name="naturalness" value="{{ $curriculo->naturalness}}">
    </form>
    <form action="{{ route('telefones.edit'), ['telefone' => $telefone =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> telefone: </label>
        <input type="text" name="phone" value="{{ $telefone->language}}">
    </form>
    <form action="{{ route('enderecos.edit'), ['endereco' => $endereco =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Rua: </label>
        <input type="text" name="rua" value="{{ $endereco->rua}}">

        <label for=""> Numero: </label>
        <input type="text" name="number" value="{{ $endereco->number}}">

        <label for=""> CEP: </label>
        <input type="text" name="cep" value="{{ $endereco->cep}}">

        <label for=""> Cidade: </label>
        <input type="text" name="city" value="{{ $endereco->city}}">

        <label for=""> Estado: </label>
        <input type="text" name="state" value="{{ $endereco->state}}">
    </form>
    <form action="{{ route('experiencias.edit'), ['experiencia' => $experiencia =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Nome: </label>
        <input type="text" name="occupatio" value="{{ $experiencia->occupatio}}">

        <label for=""> Empresa: </label>
        <input type="text" name="company" value="{{ $experiencia->company}}">

        <label for=""> NIvel: </label>
        <input type="text" name="level" value="{{ $experiencia->level}}">

        <label for=""> Area: </label>
        <input type="text" name="area" value="{{ $experiencia->area}}">

        <label for=""> Inicio: </label>
        <input type="text" name="start" value="{{ $experiencia->start}}">

        <label for=""> Fim: </label>
        <input type="text" name="end" value="{{ $experiencia->end}}">

        <label for=""> Descrição: </label>
        <input type="text" name="description" value="{{ $experiencia->description}}">
    </form>
    <form action="{{ route('cursos.edit'), ['curso' => $curso =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Curso: </label>
        <input type="text" name="course" value="{{ $curso->course}}">

        <label for=""> Instituição: </label>
        <input type="text" name="company" value="{{ $curso->company}}">

        <label for=""> Graduação: </label>
        <input type="text" name="level" value="{{ $curso->level}}">

        <label for=""> Situação: </label>
        <input type="text" name="situation" value="{{ $curso->situation}}">

        <label for=""> Inicio: </label>
        <input type="text" name="start" value="{{ $curso->start}}">

        <label for=""> Inicio: </label>
        <input type="text" name="end" value="{{ $curso->end}}">
    </form>
    <form action="{{ route('idiomas.edit'), ['idioma' => $idioma =>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Idioma: </label>
        <input type="text" name="language" value="{{ $idioma->language}}">

        <label for=""> Nivel:  </label>
        <input type="text" name="lvl" value="{{ $idioma->lvl}}">

        <input type="submit" value="Cadastrar">
    </form>
    <form action="{{ route('deficiencias.edit'), ['deficiencia' => $deficiencia=>id]}}" method="post">
        @csrf       
        @method('PUT')
        <label for=""> Deficiencias: </label>
        <input type="text" name="def" value="{{ $deficiencia>language}}">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</body>
</html>