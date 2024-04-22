<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEstudianteRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Opcional: Agregar lógica de autorización
    }

    public function rules()
    {
        return [
            'name_student' => 'bail|required|string|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u',
            'last_name_student' => 'required|string|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u', // Agregada la regla de validación para el apellido
            'matricula_student' => 'required|numeric', // Agregada regla de validación para la matrícula
            'birthday_student' => 'required|date', // Agregada la regla de validación para la fecha de cumpleaños
            'comment_student' => 'nullable|string' // La regla de validación para el comentario está bien
        ];
    }

    public function messages()
    {
        return [
            'name_student.required' => 'El campo Nombre es obligatorio.',
            'last_name_student.required' => 'El campo Apellidos es obligatorio.',
            'matricula_student.required' => 'El campo Matrícula es obligatorio.',
            'birthday_student.required' => 'El campo Fecha de Cumpleaños es obligatorio.',
        ];
    }
}
