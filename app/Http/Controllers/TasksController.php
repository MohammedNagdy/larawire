<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;

class TasksController extends Controller
{
    public static function getAll()
    {
        $items = Task::all();
        if (!empty($items))
            return $items->toArray();
        Log::warning('Could not retrieve all tasks data. Please check if table has any.');
        return [];
    }

//    public static function getTask(int $id)
//    {
//        return Task::findOrFail($id);
//    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5'
        ]);

        Task::create([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);

//        return redirect()
//            ->intended('/tasks')
//            ->with('flash_notification.message', 'Saved task successfully')
//            ->with('flash_notification.level', 'success');

    }

    public static function delete(int $id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
