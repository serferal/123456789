<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Detalles de la Tarea</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Título:</h2>
                <p>{{ $task->title }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Descripción:</h2>
                <p>{{ $task->description }}</p>
            </div>
        </div>
        <div class="row">
           
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit"><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a></button>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
