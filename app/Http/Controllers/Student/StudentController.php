<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
    return view('formulario');
  }

  public function store(StudentRequest $request)
    {
        // Crear un nuevo registro de estudiante
        $student = new \App\Models\Student;
        $student->name_student = $request->input('name_student');
        $student->lastname_student = $request->input('last_name_student') ?? null;
        $student->matricula = $request->input('matricula_student');
        $student->birthday = $request->input('birthday_student');
        $student->comments = $request->input('comment_student');
        $student->save();

        // Redireccionar o devolver una respuesta según sea necesario
        return redirect()->route('estudiantes.index')->with('notification', 'Estudiante registrado correctamente');
    }
}
