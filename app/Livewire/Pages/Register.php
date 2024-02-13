<?php

namespace App\Livewire\Pages;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Livewire\Component;
use Nette\Schema\ValidationException;

class Register extends Component
{

    public array $form = [
        'email' => '',
        'name' => '',
        'password' => ''
    ];

    public function register()
    {
        $request = new Request($this->form);

        try {
            UserController::store($request);
        } catch (ValidationException $e) {
            $message = $e->getMessage();
            Log::error('Error during registration: ', $message);
        }
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.register')->extends('layouts.master');
    }
}
