<x-app-layout title="Tasks">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Update Tasks</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="d-flex gap-2">
                            @method('put')
                            @csrf
                            <input type="text" class="form-control" name="list" id=""
                                placeholder="The name of task" value="{{ $task->list }}">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
