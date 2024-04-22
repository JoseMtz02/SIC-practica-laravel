<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...

    <title> @yield('titulo') </title>
</head>
<body>
   

    <header>
        
        <h1>Bienvenidos</h1>
        
    </header>
    <main>

        @yield('contenido')
        
    </main>
    <footer style="background-color: #00705E; color: #fff; text-align: center; padding: 20px 0; position: absolute; bottom: 0; width: 100%;">
        Todos los derechos reservados SIC
    </footer>
    
</body>
</html>