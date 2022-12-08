<?php

namespace App\Http\Livewire\Modal\Faskes;

use App\Models\Faskes\Blog;
use App\Models\Faskes\Categori;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class BlogModal extends Component
{
    use WithFileUploads;

    public $data;
    public $is_tambah = true;
    public $is_edit = false;
    public $_id;

    protected $rules = [
        'data.nama' => '',
        'data.categori_id' => '',
        'data.thumbnail' => '',
        'data.video' => '',
        'data.deskripsi' => '',
    ];

    public function mount($_id)
    {
        $this->_id = $_id;
        if ($this->_id) {
            $this->editBlog($this->_id);
        }
    }


    public function submit()
    {
        $this->validate();

        if (isset($this->data['thumbnail'])) {
            $url_thumbnail = $this->data['thumbnail']->store('berkas', 'public');
            $this->data['thumbnail'] = $url_thumbnail;
        }

        $this->data['slug'] = Str::slug($this->data['nama']);
        $x = collect($this->data)->all();
        try {
            if ($this->is_edit) {
                $row = Blog::find($this->_id);
                $row->update($x);
                $row->save();
            } else if ($this->is_tambah) {
                $row = Blog::create($this->data);
                $row->save();
            }
            $this->emit('hideModal');
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        $this->is_tambah = false;
        $this->is_edit = true;
        $this->_id = $id;
        $n = collect($blog)->except('thumbnail')->all();
        $this->data = $n;

    }
    public function render()
    {
        return view('livewire.modal.faskes.blog-modal', [
            'kategori' => Categori::get(),
        ])->layout('layouts.admin');
    }
}
