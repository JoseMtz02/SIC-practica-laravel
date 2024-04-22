<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostrar lista de registros o pagina principal
        /*   $students = Student::all(); */

        $students = Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formulario de crear


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // Crear una nueva instancia del modelo Student

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //para mostrar el detalle del estudiante
        //consulta Eloquet
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //monstrar formulario editar con datos precargados
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstudianteRequest $request, $id)
    {
        // Obtener el estudiante a actualizar
        $student = Student::findOrFail($id);
        
        // Validar los datos de entrada del formulario utilizando la clase de solicitud
        $validatedData = $request->validated();
        
        // Actualizar los atributos del estudiante con los datos validados del formulario
        $student->update($validatedData);
    
        // Redireccionar a la vista de estudiantes index con un mensaje de notificación
        return redirect()->route('estudiantes.index')->with('notification', 'Estudiante modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar registros
    }
}
