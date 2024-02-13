<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5'
        ]);

        Task::create([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
    }

    public function delete(int $id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
