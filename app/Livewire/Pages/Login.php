<?php

namespace App\Livewire\Pages;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Log;

class Login extends Component
{

//    public string $email = '';
//    public string $password = '';
    public array $form = [
        'email' => '',
        'password' => ''
    ];

    public function login()
    {
        $req = new Request($this->form);
        try {
            AuthController::authenticate($req);
        } catch (ValidationException $e) {
            $message = $e->getMessage();
            Log::error('Error during login: ' .$message);
        }
    }
    public function render()
    {
        return view('livewire.pages.login')->extends('layouts.master');
    }
}
