<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public string $title = '';
    public string $description = '';

    public function render()
    {
        return view('livewire.components.card');
    }
}
