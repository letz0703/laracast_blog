<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller {

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        // $task = DB::table('tasks')->find($id);
//        $task = Task::find($id);

        return view('tasks.task', compact('task'));
    }
}
