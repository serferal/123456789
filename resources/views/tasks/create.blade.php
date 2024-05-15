<!DOCTYPE html>
<html>
<head>
    <title>Crear Tarea</title>
</head>
<body>
    <h1>Crear Tarea</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
