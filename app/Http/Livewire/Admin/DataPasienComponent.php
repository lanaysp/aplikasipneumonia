<?php

namespace App\Http\Livewire\Admin;

use App\Models\DeteksiPneumonia;
use Livewire\Component;

class DataPasienComponent extends Component
{
    public $data;

    public function mount()
    {
        $data = DeteksiPneumonia::where('skor', '>' , 5)->get();
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.admin.data-pasien-component')->layout('layouts.admin');
    }
}
