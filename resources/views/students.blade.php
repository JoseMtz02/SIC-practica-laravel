@extends('plantilla')
@section('titulo')
    Estudiantes
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
                        <h1>Lista de estudiantes</h1>
                    </div>
                    <div class="card-body" style="background-color: #7AC6A9;">
                        @if (session()->has('notification'))
                            <div style="color: green">
                                {{ session('notification') }}
                            </div>
                        @endif
                        <div class="row w-25 mb-3">
                            <a href="/alumnos" style="background-color: #00705E; color:white;" class="btn flex-end">Agregar Estudiante</a>
                        </div>
                        <table class="table">
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id_student }}</td>
                                    <td>{{ $student->name_student }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->birthday }}</td>
                                    <td>
                                        <a href="{{ route('estudiantes.show', $student->id) }}" style="background-color: #00705E; color:white;" class="btn">Detalles</a>
                                        <a href="{{ route('estudiantes.edit', $student->id) }}" style="background-color: #002d70; color:white;" class="btn">Editar</a>
                                        <a  href="{{route('imprimir.cardex', $student->id)}}"  target="_blank" style="background-color: #881717; color:white;" class="editar btn">PDF</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
