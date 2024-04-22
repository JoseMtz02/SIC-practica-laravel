@extends('plantilla')

@section('titulo')
    Agregar estudiantes
@endsection

@section('contenido')

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg" style="background-color: #00705E;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:white" href="/dashboard">Inicio</a>
            <!-- Otros elementos del menú -->
        </div>
    </nav>

    <div class="row justify-content-center align-items-center" style="padding-top: 50px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #00705E; color:white">
                    <h2>Agregar Estudiantes</h2>
                </div>
                <div class="card-body" style="background-color: #7AC6A9">
                    <form action="{{ route('alumnos.store') }}" method="POST">
                        @csrf   
                        <div class="form-group">
                            <label for="name_student">Nombre:</label>
                            <input type="text" class="form-control" name="name_student" id="name_student" placeholder="Nombre" value="{{ old('name_student') }}">
                            @error('name_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <label for="last_name_student">Apellidos:</label>
                            <input type="text" class="form-control" name="last_name_student" id="last_name_student" placeholder="Apellidos" value="{{ old('last_name_student') }}">
                            @error('last_name_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="matricula_student">Matrícula:</label>
                            <input type="number" class="form-control" name="matricula_student" id="matricula_student" placeholder="Matrícula" value="{{ old('matricula_student') }}">
                            @error('matricula_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="birthday_student">Fecha de Cumpleaños:</label>
                            <input type="date" class="form-control" name="birthday_student" id="birthday_student" value="{{ old('birthday_student') }}">
                            @error('birthday_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="comment_student">Comentario:</label>
                            <textarea class="form-control" name="comment_student" id="comment_student" rows="3">{{ old('comment_student') }}</textarea>
                            @error('comment_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" style="background-color: #00705E; color:white;" class="btn">Registrar</button>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver Atrás</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
