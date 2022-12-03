<?php

namespace App\Http\Livewire\Faskes;

use App\Models\Faskes\Categori;
use Livewire\Component;

class CategoryComponen extends Component
{
    public $_id;
    protected $listeners = ['hideModal' => 'refresh'];

    public function refresh()
    {
        $this->emit('alert', ['success', 'Berhasil ditambah!']);
    }

    public function addCategory()
    {
        // dd('fufufu');
        $this->emit('showModal', 'modal.faskes.category-modal', $this->_id);
    }

    public function delete(Categori $data)
    {
        $data->delete();
        $this->emit('alert', ['success', 'Berhasil dihapus!']);
    }

    public function editCategory($id)
    {
        $this->emit('showModal', 'modal.faskes.category-modal', $id);
    }

    public function render()
    {
        return view('livewire.faskes.category-componen',[
            'data' => Categori::latest()->get(),
        ])->layout('layouts.admin');
    }
}
