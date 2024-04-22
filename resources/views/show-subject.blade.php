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
      
        
        <!-- Mostrar lista de unidades -->
        <div class="row justify-content-center align-items-center" style="padding-top: 50px">
            <div class="col-md-6">
                <div class="card" style="max-height: 500px; max-width: 840px; overflow-y: auto;">
                    <div class="card-header" style="background-color: #00705E; color:white">
                        <h1>Lista de Unidades</h1>
                    </div>
                    <div class="card-body" style="background-color: #7AC6A9;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de la Unidad</th>
                                    <th>Objetivo</th>
                                    <th>ID de la Asignatura</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $unit)
                                    <tr>
                                        <td>{{$unit->id}}</td>
                                        <td>{{$unit->unit_name}}</td>
                                        <td>{{$unit->objetive}}</td>
                                        <td>{{$unit->subject_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mostrar nombre de la asignatura -->
        <div class="row justify-content-center align-items-center" style="padding-top: 50px">
            <div class="col-md-6">
                <div class="card" style="max-height: 500px; max-width: 840px; overflow-y: auto;">
                    <div class="card-header" style="background-color: #00705E; color:white">
                        <h1>Nombre de la Asignatura</h1>
                    </div>
                    <div class="card-body" style="background-color: #7AC6A9;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de la Asignatura</th>
                                    <th>Horas Totales</th>
                                    <th>Objetivo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subject as $subj)
                                    <tr>
                                        <td>{{$subj->id}}</td>
                                        <td>{{$subj->subject_name}}</td>
                                        <td>{{$subj->total_hours}}</td>
                                        <td>{{$subj->objective}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
