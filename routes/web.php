<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SubjectController;
use App\Livewire\Examples\Example1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/alumnos', [\App\Http\Controllers\Student\StudentController::class, 'index'])->name('alumnos');  
    Route::post('/alumnos', [\App\Http\Controllers\Student\StudentController::class, 'store'])->name('alumnos.store');
    Route::resource('estudiantes', StudentController::class);
    Route::resource('asignaturas', SubjectController::class);

    Route::get('reportes/{estudiantes}', [ReportsController::class, 'print_cardex'])->name('imprimir.cardex');
    Route::get('livewire', Example1::class);



});
Route::get('/noregistrado', function () {
    return view('noregistrado');
})->name('noregistrado');




require __DIR__.'/auth.php';
