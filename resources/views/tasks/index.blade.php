<x-app-layout title="Tasks">
    <h1>Tasks</h1>

    <ol>
        @foreach ($tasks as $index => $task)
            <li>{{ $task->list }}</li>
        @endforeach
    </ol>
</x-app-layout>
