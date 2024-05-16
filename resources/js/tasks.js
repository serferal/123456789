// tasks.js

document.addEventListener('DOMContentLoaded', function() {
    var tasks = document.querySelectorAll('.card');
    tasks.forEach(function(task) {
        task.addEventListener('click', function() {
            var taskId = this.getAttribute('id').replace('task_', '');
            window.location.href = "{{ route('tasks.show', 'TASK_ID') }}".replace('TASK_ID', taskId);
        });
    });
});
