<!DOCTYPE html>
<html>
<head>
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
