<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            'list' => $request->list
        ]);
        return back();
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->whereRaw('id = ?', [$id])->first();
        // dd($task);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        DB::table('tasks')->whereRaw('id = ?', [$id])->update([
            'list' => $request->list
        ]);
        return redirect('/tasks');
    }

    public function destroy($id)
    {
        DB::table('tasks')->whereRaw('id = ?', [$id])->delete();
        return back();
    }
}
