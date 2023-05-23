@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear nueva tarea</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Fecha de vencimiento</label>
                <input type="date" name="due_date" id="due_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="category">Categoría</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="trabajo">Trabajo</option>
                    <option value="estudios">Estudios</option>
                    <option value="personal">Personal</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection
