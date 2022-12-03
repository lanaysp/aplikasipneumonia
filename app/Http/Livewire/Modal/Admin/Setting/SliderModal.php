<?php

namespace App\Http\Livewire\Modal\Admin\Setting;

use App\Models\Admin\Setting\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderModal extends Component
{
    use WithFileUploads;

    public $data;
    public $is_tambah = true;
    public $is_edit = false;
    public $_id;


    protected $rules = [
        'data.photo' => '',
        'data.judul' => '',
        'data.deskripsi' => '',
        'data.tombol' => '',
        'data.url' => '',
    ];

    public function mount($_id)
    {
        $this->_id = $_id;
        if ($this->_id) {
            $this->editSlider($this->_id);
        }
    }


    public function submit()
    {
        $this->validate();

        if (isset($this->data['photo'])) {
            $url_photo = $this->data['photo']->store('berkas', 'public');
            $this->data['photo'] = $url_photo;
        }

        try {
            $x = collect($this->data)->all();
            if ($this->is_edit) {
                $row = Slider::find($this->_id);
                $row->update($x);
                $row->save();
            } else if ($this->is_tambah) {
                $row = Slider::create($this->data);
                $row->save();
            }
            $this->emit('hideModal');
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);
        $this->is_tambah = false;
        $this->is_edit = true;
        $this->_id = $id;
        $n = collect($slider)->except('photo')->all();

        $this->data = $n;

    }

    public function render()
    {
        return view('livewire.modal.admin.setting.slider-modal')->layout('layouts.admin');
    }
}
