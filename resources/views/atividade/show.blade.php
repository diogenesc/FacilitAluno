<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>{{ $atividade->titulo }}</li>
        <li>{{ $atividade->descricao }}</li>
        <li>{{ $atividade->prioridade }}</li>
        <li>{{ $atividade->marcador }}</li>
        <li>{{ $atividade->cor }}</li>
        <li>{{ $atividade->data_inicio }}</li>
        <li>{{ $atividade->data_fim }}</li>
        <li>{{ $atividade->alarme }}</li>
        <li><a href="{{ route('atividade.edit', ['atividade' => $atividade]) }}">Editar</a></li>
        <li>
            <form method="POST" action="{{ route('atividade.destroy', ['atividade' => $atividade]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>            
        </li>
    </ul>
</body>
</html>