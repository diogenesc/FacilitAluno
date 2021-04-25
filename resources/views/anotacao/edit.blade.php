<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('anotacao.update', ['anotacao' => $anotacao]) }}">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" id="titulo" value="{{ $anotacao->titulo }}">
        <input type="text" name="conteudo" id="conteudo" value="{{ $anotacao->conteudo }}">
        <input type="text" name="cor" id="cor" value="{{ $anotacao->cor }}">
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