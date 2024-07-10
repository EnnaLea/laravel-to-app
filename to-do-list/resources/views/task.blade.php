<div class="d-flex justify-content-space-between container mr-4 flex-row">

    @foreach ($tasks as $task)
        <div class="card mx-3 mt-5" style="width: 12rem;">
            <div class="d-flex justify-content-between">
                <form action="/delete-task" method="post" id="delete">
                    @csrf
                    @method('DELETE')
                    <div class="form-check mx-2">
                        <?php $taskId = $task->id; ?>
                        <input class="form-check-input" type="checkbox" id="checkbox" name="ids[]"
                            value="{{ $task->id }}">
                    </div>
                </form>
                <div>
                    <button id="edit">Edit</button>
                </div>
            </div>

            <div class="card-body">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
            </div>
            <x-edit-modal :$task />
        </div>
    @endforeach

</div>
<div>
    <button class="mt-4" type="submit" style="width: 12rem; margin-left: 45%" form="delete">Delete</button>
</div>

<script>
    $(document).ready(function() {
        $('#edit').on('click', () => {
            $('#exampleModal').modal('show');
        })
    })
</script>
