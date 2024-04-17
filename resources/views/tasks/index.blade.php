<x-app-layout title="Tasks">

    <div class="container">
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                            @csrf
                            <input type="text" class="form-control me-2" name="list" id=""
                                placeholder="The name of task">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">{{ $index + 1 }} -
                    {{ $task->list }}
                    <div class="d-flex gap-2">
                        <a class="btn btn-primary" href="/tasks/{{ $task->id }}/edit">Edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</x-app-layout>
