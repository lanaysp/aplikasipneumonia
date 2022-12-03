<?php

namespace App\Http\Livewire\Modal\Faskes;

use App\Models\Faskes\Categori;
use Livewire\Component;

class CategoryModal extends Component
{
    public $data;
    public $is_tambah = true;
    public $is_edit = false;
    public $_id;


    protected $rules = [
        'data.nama' => '',
    ];

    public function mount($_id)
    {
        $this->_id = $_id;
        if ($this->_id) {
            $this->editCategory($this->_id);
        }
    }


    public function submit()
    {
        $this->validate();

        try {
            $x = collect($this->data)->all();
            if ($this->is_edit) {
                $row = Categori::find($this->_id);
                $row->update($x);
                $row->save();
            } else if ($this->is_tambah) {
                $row = Categori::create($this->data);
                $row->save();
            }
            $this->emit('hideModal');
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function editCategory($id)
    {
        $category = Categori::find($id);
        $this->is_tambah = false;
        $this->is_edit = true;
        $this->_id = $id;
        $n = collect($category)->except('photo')->all();

        $this->data = $n;

    }

    public function render()
    {
        return view('livewire.modal.faskes.category-modal');
    }
}
