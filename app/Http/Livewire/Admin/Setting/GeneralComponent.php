<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\Admin\Setting\General;
use Livewire\Component;

class GeneralComponent extends Component
{
    public $_id;
    protected $listeners = ['sendData' => 'refresh'];

    public function refresh()
    {
        $this->emit('alert', ['success', 'Berhasil ditambah!']);
    }

    public function addGeneral()
    {
        // dd('fufufu');
        $this->emit('showModal', 'modal.admin.setting.general-modal');
    }

    public function render()
    {
        return view('livewire.admin.setting.general-component',[
            'data' => General::query()->get()
        ])->layout('layouts.admin');
    }
}
