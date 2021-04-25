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
        <li>{{ $material->nome }}</li>
        <li><a href="{{ route('material.download', ['material' => $material]) }}">Baixar arquivo</a></li>
        <li><a href="{{ route('material.edit', ['material' => $material]) }}">Editar</a></li>
        <li>
            <form method="POST" action="{{ route('material.destroy', ['material' => $material]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </li>
    </ul>
</body>
</html>