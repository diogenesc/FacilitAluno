<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('atividade.store') }}">
        @csrf
        <input type="text" name="titulo" id="titulo">
        <input type="text" name="descricao" id="descricao">
        <input type="number" name="prioridade" id="prioridade">
        <input type="number" name="marcador" id="marcador">
        <input type="text" name="cor" id="cor">
        <input type="date" name="data_inicio" id="data_inicio">
        <input type="date" name="data_fim" id="data_fim">
        <select name="alarme" id="alarme">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        <button type="submit">Criar</button>
    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>