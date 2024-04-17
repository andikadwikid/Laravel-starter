@if ($errors->any())
    <div class="alert alert-danger">
        Your data was invalid
    </div>
@endif
<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex justify-content-between gap-2">
            @csrf
            <div class="flex-fill">
                <input type="text" class="form-control @error('list') is-invalid @enderror" name="list"
                    id="" placeholder="The name of task">
                @error('list')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary align-self-start" type="submit">Add</button>
        </form>
    </div>
</div>
