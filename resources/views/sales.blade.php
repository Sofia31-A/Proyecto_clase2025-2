<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{$sale->id}}</td>
                <td>{{$sale->name}}</td>
                <td>
                    <a href="{{route('sales.edit', $sale->id)}}">Editar</a>
                    <form action="{{route('sales.destroy', $sale->id)}}" method="post">
                    @method('DELETE')
                    @csrf 
                    <button type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{route('sales.store')}}" method="post">
        @csrf 
        <input type="text" name="test" id="">
        <button type="submit">Guardar</button>
    </form>

</body>
</html>