<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', [
            'submit' => 'Create',
            'task' => new Task(),
            'tasks' => $tasks
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        // dd($task);
        return view('tasks.edit', [
            'submit' => 'Update',
            'task' => $task
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::findOrFail($id)->update([
            'list' => $request->list
        ]);
        return redirect('/tasks');
    }

    public function destroy($id)
    {
        Task::whereRaw('id = ?', [$id])->delete();
        return back();
    }
}
