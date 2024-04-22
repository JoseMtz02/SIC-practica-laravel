@extends('plantilla')
@section('titulo')
    Detalles del Estudiante
@endsection
@section('contenido')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg" style="background-color: #00705E;">
            <div class="container-fluid">
                <a class="navbar-brand" style="color:white" href="/dashboard">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" style="color:white" href="/estudiantes">Estudiantes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" style="color:white" href="/asignaturas">Asignaturas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                
            </div>
        </nav>
        <div class="row justify-content-center align-items-center" style="padding-top: 50px">
            <div class="col-md-6">
                <div class="card" style="max-height: 500px; max-width: 840px; overflow-y: auto;">
                    <div class="card-header" style="background-color: #00705E; color:white">
                        <h1>Detalles del Estudiante</h1>
                    </div>
                    <div class="card-body" style="background-color: #7AC6A9;">
                        <p>
                            Nombre del estudiante: <b>{{ $student->name_student }}</b>
                        </p>
                        <p>
                            Apellido: <b>{{ $student->lastname_student }}</b>
                        </p>
                        <p>
                            Matrícula: <b>{{ $student->matricula }}</b>
                        </p>
                        <p>
                            Fecha de cumpleaños: <b>{{ $student->birthday }}</b>
                        </p>
                        <p>
                            Comentarios: <b>{{ $student->comments }}</b>
                        </p>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
