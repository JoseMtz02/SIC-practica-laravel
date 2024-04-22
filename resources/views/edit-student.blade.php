@extends('plantilla')

@section('titulo')
    Editar estudiante
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
            <div class="card">
                <div class="card-header" style="background-color: #00705E; color:white">
                    <h2>Editar Estudiante</h2>
                </div>
                <div class="card-body" style="background-color: #7AC6A9">
                    <form action="{{ route('estudiantes.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name_student">Nombre:</label>
                            <input type="text" class="form-control" name="name_student" id="name_student" placeholder="Nombre" value="{{ $student->name_student }}">
                            @error('name_student')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name_student">Apellidos:</label>
                            <input type="text" class="form-control" name="last_name_student" id="last_name_student" placeholder="Apellidos" value="{{ $student->lastname_student }}">
                            @error('last_name_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="matricula_student">Matrícula:</label>
                            <input type="number" class="form-control" name="matricula_student" id="matricula_student" placeholder="Matrícula" value="{{ $student->matricula }}">
                            @error('matricula_student')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="birthday_student">Fecha de Cumpleaños:</label>
                            <input type="date" class="form-control" name="birthday_student" id="birthday_student" value="{{ $student->birthday }}">
                            @error('birthday_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="comment_student">Comentario:</label>
                            <textarea class="form-control" name="comment_student" id="comment_student" rows="3">{{ $student->comments }}</textarea>
                            @error('comment_student')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <br>
                        <button type="submit" style="background-color: #00705E; color:white;" class="btn">Actualizar</button>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver Atrás</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
