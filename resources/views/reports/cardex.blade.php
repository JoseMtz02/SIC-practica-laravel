<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardex</title>
    <link rel="stylesheet" href="css/app.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            max-width: 200px;
            height: auto;
        }
        h1, h3 {
            margin: 0;
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #555;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('images/logo.jpg') }}" alt="Logo">
        </div>
        <h1>{{ $title }}</h1>
        <h3>{{ $student->name_student }}</h3> <!-- Mostrando el nombre del estudiante -->
        <table>
            <thead>
                <tr>
                    <th>Nombre del alumno</th>
                    <th>Apellidos</th>
                    <th>Matrícula</th>
                    <th>Cumpleaños</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$student->name_student}}</td>
                    <td>{{$student->lastname_student}}</td>
                    <td>{{$student->id_student}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->comments}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
