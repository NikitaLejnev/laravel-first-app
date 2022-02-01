<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    // // Example 3-22. Simple controller

    // public function index()
    // {
    //     return 'Hello, World!';
    // }
    //
    // Example 3-24. Common controller method example
    public function index()
    {
        return view('tasks.index')
            ->with('tasks', Task::all());
    }

    // Example 3-26. Common form input controller method
    public function store()
    {
        Task::create(request()->only(['title', 'description']));

        return redirect('tasks');
    }
}
