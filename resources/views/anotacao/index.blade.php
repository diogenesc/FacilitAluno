<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <td>Nome</td>
            <td>Criado em</td>
            <td>Ação</td>
        </thead>
        <tbody>
            @foreach ($anotacoes as $anotacao)
                <tr>
                    <td>{{ $anotacao->titulo }}</td>
                    <td>{{ $anotacao->created_at }}</td>
                    <td><a href="{{ route('anotacao.show', ['anotacao' => $anotacao]) }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>