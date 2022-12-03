<?php

namespace App\Http\Livewire\Edukasi;

use App\Models\Faskes\Blog;
use Livewire\Component;

class EdukasiDetailComponent extends Component
{
    public $blogDetail;

    public function mount($id)
    {
        $blogDetail = Blog::find($id);
        $this->blogDetail = $blogDetail;
    }
    public function render()
    {
        return view('livewire.edukasi.edukasi-detail-component',[
            'blog' => Blog::get()
        ]);
    }
}
