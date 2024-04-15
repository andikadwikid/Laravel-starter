<x-app-layout title="Tasks">
    <h1>Update Tasks</h1>

    <form action="/tasks/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="list" id="" placeholder="The name of task" value="{{ $task->list }}">
        <button type="submit">Update</button>
    </form>
</x-app-layout>
