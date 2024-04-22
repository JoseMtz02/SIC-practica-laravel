<div class="container">
    <h1 class="title">Mi primera chamba con Livewire</h1>
    <p>{{ $title }}</p>
    
    <div class="input-group">
        <input wire:model='idstudent' type="text" placeholder="ID del Estudiante">
        <button wire:click='showStudent'>Mostrar Estudiante</button>
    </div>
    
    <button class="button" wire:click='mostrartodos'>Mostrar Todos los Estudiantes</button>
    
    @if($student)
        <div class="mt-4">
            <h2>Estudiante Seleccionado:</h2>
            <p>{{ $student->name_student }}</p>
        </div>
    @endif
    
    @if($students)
        <div class="list mt-4">
            <h2>Todos los Estudiantes:</h2>
            <ul>
                @foreach ($students as $student)
                    <li>{{ $student->name_student }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
<style>
    /* styles.css */
    :root{
        font-family: Arial, Helvetica, sans-serif
    }

.container {
    max-width: 650px;
    margin: 0 auto;
    padding: 40px;
    background-color: #f7fafc;
    border: 1px solid #1b232d;
    border-radius: 8px;
    text-align: center
}

.title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.input-group {
    display: flex;
    margin-bottom: 20px;
}

.input-group input[type="text"] {
    flex: 1;
    border: 1px solid #cbd5e0;
    border-radius: 4px 0 0 4px;
    padding: 10px;
    font-size: 1rem;
    outline: none;
}

.input-group button {
    background-color: #b74ae2;
    color: #fff;
    border: none;
    border-radius: 0 4px 4px 0;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.input-group button:hover {
    background-color: #2c0c2d;
}

.button {
    background-color: #ff6f00;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #343434;
}

.list {
    margin-top: 20px;
}

.list li {
    margin-bottom: 8px;
    list-style-type: none;
}

.list li::before {
    content: "•";
    color: #2200ff;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

</style>
</div>
