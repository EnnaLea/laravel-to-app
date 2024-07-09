<div class="d-flex flex-column justify-content-center card-body align-items-center">
    <div class="mt-4">
        <h5 class="card-title">Write Your Task</h5>
    </div>

    <form class="d-flex flex-column justify-content-center align-items-center container mt-4" action="/create-task"
        method="post">
        @csrf
        @method('POST')
        <div class="input">
            <div class="mb-3">
                <label for="title" class="form-label">Task</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        </div>
        <button class="mt-4" type="submit">Add</button>
    </form>

</div>
