<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        // dd($task);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
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
