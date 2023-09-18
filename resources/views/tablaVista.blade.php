<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid;
            padding: 1em;
        } 
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>F publicacion</th>
        <th>Autor/th>
    </tr>
    @foreach ($libros as $libro)
    <tr>
        <td>{{$libro->id}}</td>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->f_publicacion}}</td>
        <td>{{$libro->id_autor}}</td>
    </tr>
    @endforeach
    </table>

</body>
</html>