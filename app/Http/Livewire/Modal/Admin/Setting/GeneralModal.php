<?php

namespace App\Http\Livewire\Modal\Admin\Setting;

use App\Models\Admin\Setting\General;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class GeneralModal extends Component
{
    use WithFileUploads;

    public $data;

    protected $rules = [
        'data.favicon' => '',
        'data.icon_user' => '',
        'data.icon_admin' => '',
        'data.title' => '',
        'data.footer_name' => '',
    ];

    public function mount()
    {
        $data = General::firstOrCreate();
        $this->data = $data;
    }

    public function submit()
    {
        $this->validate();

        try {
            $this->data->save();
            $this->emit('hideModal');
        } catch (\Throwable $th) {
            dd($th);
        }

    }
    public function render()
    {
        return view('livewire.modal.admin.setting.general-modal');
    }
}
