<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.success-component')->layout('layouts.blank');
    }
}
