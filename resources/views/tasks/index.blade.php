<x-app-layout title="Tasks">
    <h1>Tasks</h1>

    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="list" id="" placeholder="The name of task">
        <button type="submit">Add</button>
    </form>

    <ul style="list-style-type: none">
        @foreach ($tasks as $index => $task)
            <li>{{ $index + 1 }} - {{ $task->list }}
                <div style="display: inline; margin-left: 10px">
                    <a style="color:skyblue; margin-right: 10px" href="/tasks/{{ $task->id }}/edit">Edit</a>
                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
            </div>
        @endforeach
    </ul>
</x-app-layout>
