<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <div class="col-md-6">
                <h2>Estado:</h2>
                <p>{{ $task->completed ? 'Completada' : 'Pendiente' }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a>
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
