<div class="d-flex justify-content-space-between container mr-4 flex-row">

    @foreach ($tasks as $task)
        <div class="card mx-3 mt-5" style="width: 12rem;">
            <div class="card-body">
                <h5>Task title: {{ $task->title }}</h5>
                <p>Task Description: {{ $task->description }}</p>
            </div>

        </div>
    @endforeach
</div>
