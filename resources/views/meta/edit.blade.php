<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('meta.update', ['meta' => $meta]) }}">
        @csrf
        @method('PUT')
        <input type="text" name="nome" id="nome" value="{{ $meta->nome }}">
        <input type="number" name="prioridade" id="prioridade" value="{{ $meta->prioridade }}">
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