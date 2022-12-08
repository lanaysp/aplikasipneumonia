<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DeteksiPneumoniaComponent extends Component
{
    public $data;

    protected $rules = [
        'data.user_id' => '',
        'data.batuk' => '',
        'data.kejang' => '',
        'data.asi_ya' => '',
        'data.asi_tidak' => '',
        'data.kesadaran' => '',
        'data.demam' => '',
        'data.pilek' => '',
        'data.sesak' => '',
        'data.bab_cair' => '',
        'data.mendengkur' => '',
    ];

    public function render()
    {
        return view('livewire.user.deteksi-pneumonia-component');
    }
}
