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
            @foreach ($materiais as $material)
                <tr>
                    <td>{{ $material->nome }}</td>
                    <td>{{ $material->created_at }}</td>
                    <td><a href="{{ route('material.show', ['material' => $material]) }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>