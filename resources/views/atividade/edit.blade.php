<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('atividade.update', ['atividade' => $atividade]) }}">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" id="titulo" value="{{ $atividade->titulo }}">
        <input type="text" name="descricao" id="descricao" value="{{ $atividade->descricao }}">
        <input type="number" name="prioridade" id="prioridade" value="{{ $atividade->prioridade }}">
        <input type="number" name="marcador" id="marcador" value="{{ $atividade->marcador }}">
        <input type="text" name="cor" id="cor" value="{{ $atividade->cor }}">
        <input type="date" name="data_inicio" id="data_inicio" value="{{ $atividade->data_inicio }}">
        <input type="date" name="data_fim" id="data_fim" value="{{ $atividade->data_fim }}">
        <select name="alarme" id="alarme" value="{{ $atividade->alarme }}">
            <option value="0" @if (!$atividade->alarme) selected @endif>Não</option>
            <option value="1" @if ($atividade->alarme) selected @endif>Sim</option>
        </select>
        <button type="submit">Editar</button>
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