<!DOCTYPE html>
<html>

<head>
    <title>Notas</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
</head>

<body>
    
<h1><img src="img\lina.png" alt="">Notas</h1>
    <p class="create"><a style="color: green;" href="{{ route('tasks.create') }}">Crear Nueva Tarea</a></p>

    <div class="cards-container">
        @foreach ($tasks as $task)
        <div class="card" id="task_{{ $task->id }}" style="cursor: pointer;">
            <h5 class="card-title">
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
            </h5>
            <p class="card-text">{{ $task->description }}</p>
        </div>
        @endforeach
    </div>

    <!-- Incluir el archivo JavaScript -->
    <script src="{{ asset('js\tasks.js') }}"></script>
</body >

</html>
