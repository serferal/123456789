<!DOCTYPE html>
<html>

<head>
    <title>Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
</head>

<body>
    <h1>Notas</h1>
    <p lass="create"><a style="color: green;" href="{{ route('tasks.create') }}">Crear Nueva Tarea</a></p>

    <ul>
        @foreach ($tasks as $task)

        <div class="card" style="width: 18rem;">
            <div id="task_{{ $task->id }}" style="cursor: pointer;" class="card-body">
                <h5 class="card-title">
                    <p href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</p>
                </h5>
                <p class="card-text" >{{ $task->description }}</p>

            </div>
        </div>
        @endforeach

    </ul>

    <script>
        // Agregar un event listener a cada elemento de tarea
        @foreach ($tasks as $task)
            document.getElementById('task_{{ $task->id }}').addEventListener('click', function() {
                window.location.href = "{{ route('tasks.show', $task->id) }}";
            });
        @endforeach
    </script>


</body>

</html>