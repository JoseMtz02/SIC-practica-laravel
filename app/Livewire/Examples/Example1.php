<?php

namespace App\Livewire\Examples;

use App\Models\Student;
use Livewire\Component;

class Example1 extends Component
{
    public $title="Bienvenidos";
    public $idstudent;
    public $students; 
    public $student;


    
    
    public function render()
    {
        return view('livewire.examples.example1')->layout('layouts.ejemplolayout');
    }

    public function showStudent(){
       $this-> student= Student::find($this->idstudent);
    }

    public function mostrartodos(){

        $this->students = Student::all(); // Obtener todos los estudiantes desde la base de datos

    }
}
