<!DOCTYPE html>
<html>
<head>
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">

</head>
<body class="container">

    <h1>Crear Tarea</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" rows="4"></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
