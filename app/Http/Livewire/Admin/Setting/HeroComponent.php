<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\Admin\Setting\Slider;
use Livewire\Component;

class HeroComponent extends Component
{
    public $_id;
    protected $listeners = ['hideModal' => 'refresh'];

    public function refresh()
    {
        $this->emit('alert', ['success', 'Berhasil ditambah!']);
    }

    public function addSlider()
    {
        // dd('fufufu');
        $this->emit('showModal', 'modal.admin.setting.slider-modal', $this->_id);
    }

    public function delete(Slider $data)
    {
        $data->delete();
        $this->emit('alert', ['success', 'Berhasil dihapus!']);
    }

    public function editSlider($id)
    {
        $this->emit('showModal', 'modal.admin.setting.slider-modal', $id);
    }


    public function render()
    {
        return view('livewire.admin.setting.hero-component',[
        'data' => Slider::get()
        ])->layout('layouts.admin');
    }
}
