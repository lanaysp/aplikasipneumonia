<?php

namespace App\Http\Livewire\Faskes;

use App\Models\Faskes\Blog;
use Livewire\Component;

class BlogComponen extends Component
{

    public $_id;
    protected $listeners = ['hideModal' => 'lemparData'];

    public function lemparData()
    {
        $this->emit('alert', ['success', 'Berhasil ditambah!']);
    }

    public function addBlog()
    {
        $this->emit('showModal', 'modal.faskes.blog-modal', $this->_id);
    }

    public function delete(Blog $data)
    {
        $data->delete();
        $this->emit('alert', ['success', 'Berhasil dihapus!']);
    }

    public function editBlog($id)
    {
        $this->emit('showModal', 'modal.faskes.blog-modal', $id);
    }

    public function render()
    {
        return view('livewire.faskes.blog-componen',[
            'data' => Blog::all(),
        ])->layout('layouts.admin');
    }
}
