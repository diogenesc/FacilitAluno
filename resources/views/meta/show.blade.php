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
        <li>{{ $meta->nome }}</li>
        <li>{{ $meta->prioridade }}</li>
        <li><a href="{{ route('meta.edit', ['meta' => $meta]) }}">Editar</a></li>
        <li>
            <form method="POST" action="{{ route('meta.destroy', ['meta' => $meta]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>            
        </li>
    </ul>
</body>
</html>