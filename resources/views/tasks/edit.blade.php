<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <br>
        <label for="completed">Completada:</label>
        <input type="checkbox" name="completed" id="completed" {{ $task->completed ? 'checked' : '' }}>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
