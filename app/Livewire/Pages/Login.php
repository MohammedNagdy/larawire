<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.pages.login')->extends('layouts.master');
    }
}