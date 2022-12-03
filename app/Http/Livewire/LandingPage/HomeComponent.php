<?php

namespace App\Http\Livewire\LandingPage;

use App\Models\Admin\Setting\Slider;
use App\Models\Faskes\Blog;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.landing-page.home-component',[
            'blog' => Blog::first()->limit(6)->get(),
            'slider' => Slider::get(),
        ]);
    }
}
