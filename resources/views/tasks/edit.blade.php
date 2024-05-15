<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Editar Tarea</h1>
        <hr>
        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="completed" name="completed" {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Completada</label>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
