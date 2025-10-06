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
            <th>CREATE AT</th>
            <th>UPDATE AT</th>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{$sale->id}}</td>
                <td>{{$sale->name}}</td>
                <td>{{$sale->created_at}}</td>
                <td>{{$sale->updated_at}}</td>
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