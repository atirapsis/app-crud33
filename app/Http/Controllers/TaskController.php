<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index',['task' => $task]);
    }
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required',
            'due_date' => 'required',
            'priority' => 'required',
        ]);

        $newTask = Task::create($data);

        return redirect(route('task.index'));

    }

    public function edit(Task $task){
        return view('task.edit', ['task' => $task]);

    }

    public function update (Task $task, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required',
            'due_date' => 'required',
            'priority' => 'required',
        ]);

        $task->update($data);

        return redirect(route('task.index'))->with('success', 'Task Updated Successfully');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect(route('task.index'))->with('success', 'Task Deleted Successfully');
    }

}
