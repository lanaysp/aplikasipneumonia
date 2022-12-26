<?php

namespace App\Http\Livewire\User;

use App\Models\DataAnak;
use App\Models\DeteksiPneumonia;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DeteksiPneumoniaComponent extends Component
{
    public $data;
    public $data_anak;

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

        'data_anak.nama' => 'required',
        'data_anak.tanggal_lahir' => 'required',
        'data_anak.nama_orang_tua' => 'required',
        'data_anak.no_hp' => 'required',
        'data_anak.alamat' => 'required',

    ];

    public function mount()
    {
        $data = DeteksiPneumonia::firstOrNew(["user_id" => Auth::user()->id]);

        $data_anak = DataAnak::firstOrNew(["user_id" => 1]);

        $this->data = $data;
        $this->data_anak = $data_anak;
    }

    public function submit()
    {
        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                    $this->emit('swal', ['Whooops!', $validator->errors()->first(), 'error']);
                }
            })->validate();
            try {
                dd($this->data);
                $this->data->save();
                redirect()->route('home');
            } catch (\Throwable $ex) {
                Log::error($ex);
                $this->emit('swal', ['', 'Terjadi kesalahan.', 'error']);
            }
    }

    public function submitDataAnak()
    {
        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                    $this->emit('swal', ['Whooops!', $validator->errors()->first(), 'error']);
                }
            })->validate();
            try {
                // dd($this->data_anak);
                $this->data_anak->save();
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
