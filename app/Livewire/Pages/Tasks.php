<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Tasks extends Component
{
    public function render()
    {
        return view('livewire.pages.tasks')->extends('layouts.master');
    }
}
