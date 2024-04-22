<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      return [
        'name_student' => 'bail|required|string|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u',
        'last_name_student' => 'required|string|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u', // Agregada la regla de validación para el apellido
        'matricula_student' => 'required|numeric', // Agregada regla de validación para la matrícula
        'birthday_student' => 'required|date', // Agregada la regla de validación para la fecha de cumpleaños
        'comment_student' => 'nullable|string' // La regla de validación para el comentario está bien
    ];
    }
}
