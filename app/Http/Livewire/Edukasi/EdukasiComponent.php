<?php

namespace App\Http\Livewire\Edukasi;

use App\Models\Faskes\Blog;
use Livewire\Component;

class EdukasiComponent extends Component
{
    public function render()
    {
        return view('livewire.edukasi.edukasi-component',[
            'blog' => Blog::first()->limit(6)->get(),
        ]);
    }
}
