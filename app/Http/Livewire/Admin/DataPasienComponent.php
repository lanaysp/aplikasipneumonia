<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DataPasienComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.data-pasien-component')->layout('layouts.admin');
    }
}
