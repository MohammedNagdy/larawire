<?php

namespace App\Livewire\Pages;

use App\Http\Controllers\TasksController;
use Livewire\Attributes\On;
use Livewire\Component;

class Tasks extends Component
{
    public string $task = 'Hi';

    public array $tasks = [
      [
          'id' => '22',
          'title' => 'Special title treatment',
          'description' => 'With supporting text below as a natural lead-in to additional content.'
      ],
    ];

    public function mount()
    {
        $tasks = TasksController::getAll();
        if (isset($tasks)) {
            foreach ($tasks as $task) {
                array_unshift($this->tasks, $task);
            }
        }

    }

    #[On('task-added')]
    public function addTask($task)
    {
        $this->task = $task['title'];
        array_unshift($this->tasks, $task);
    }

    public function render()
    {
        return view('livewire.pages.tasks',
            ['tasks' => $this->tasks])
            ->extends('layouts.master');
    }
}
