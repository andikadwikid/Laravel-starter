<x-app-layout title="Tasks">

    <div class="container">
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">{{ $index + 1 }} -
                    {{ $task->list }}
                    <div class="d-flex gap-2">
                        <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
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
