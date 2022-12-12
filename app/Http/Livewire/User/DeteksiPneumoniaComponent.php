<?php

namespace App\Http\Livewire\User;

use App\Models\DeteksiPneumonia;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        'data.skor' => '',
        'data.keterangan' => '',
    ];

    public function mount()
    {
        $data = DeteksiPneumonia::firstOrNew(["user_id" => Auth::user()->id]);
        $this->data = $data;
    }

    public function submit()
    {
        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                    $this->emit('swal', ['Whooops!', $validator->errors()->first(), 'error']);
                }
            })->validate();
            try {
                $this->data->save();
                redirect()->route('home');
            } catch (\Throwable $ex) {
                Log::error($ex);
                $this->emit('swal', ['', 'Terjadi kesalahan.', 'error']);
            }
    }

    public function updatedData()
    {
        $this->data->skor = (int) $this->data->batuk + (int) $this->data->kejang + (int) $this->data->asi_ya +
                            (int) $this->data->asi_tidak + (int) $this->data->kesadaran + (int) $this->data->demam +
                            (int) $this->data->pilek + (int) $this->data->sesak + (int) $this->data->bab_cair +
                            (int) $this->data->mendengkur ;
    }

    public function render()
    {
        return view('livewire.user.deteksi-pneumonia-component');
    }
}
