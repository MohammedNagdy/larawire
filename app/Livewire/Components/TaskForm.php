<?php

namespace App\Livewire\Components;

use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Livewire\Component;
use Nette\Schema\ValidationException;
use Illuminate\Support\Facades\Log;

class TaskForm extends Component
{
    private TasksController $tasksController;
    public function __construct()
    {
        $this->tasksController = new TasksController();
    }

    public array $form = [
        'title' => '',
        'description' => ''
    ];

    public function save()
    {
        $request = new Request($this->form);

        try {
            $this->tasksController->store($request);
        } catch (ValidationException $e) {
            $message = $e->getMessage();
            Log::warning('Error happened while saving a task: '. $message);
        }
        // Dispatch an event to add in the tasks array
        $this->dispatch('task-added', task: $this->form);

        $this->reset();

    }
    public function render()
    {
        return view('livewire.components.task-form');
    }
}
