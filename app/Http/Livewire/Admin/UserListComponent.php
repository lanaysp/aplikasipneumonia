<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserListComponent extends Component
{
    public function mount() {
        $this->user = User::query()->get();
    }
    public function render()
    {
        return view('livewire.admin.user-list-component')->layout('layouts.admin');
    }
}
