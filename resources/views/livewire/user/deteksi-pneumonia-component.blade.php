<div>
    <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
        <!-- User Information-->
        <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
            <div class="user-profile me-3"><img src="" alt="">
            </div>
            <div class="user-info">
                <p class="mb-0 text-dark"></p>
                <h5 class="mb-0"></h5>
            </div>
            </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.batuk" value="1" id="batuk">
                            <label class="form-check-label" for="batuk">
                                Mengalami Batuk
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.kejang" value="1" id="kejang">
                            <label class="form-check-label" for="kejang">
                                Mengalami Kejang
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.asi_ya" value="1" id="asi_ya">
                            <label class="form-check-label" for="asi_ya">
                                Masih Meminum Asi
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.asi_tidak" value="1" id="asi_tidak">
                            <label class="form-check-label" for="asi_tidak">
                                Tidak Mau Minum Asi
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.kesadaran" value="1" id="kesadaran">
                            <label class="form-check-label" for="kesadaran">
                                Kesadaran Menurun
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.demam" value="1" id="demam">
                            <label class="form-check-label" for="demam">
                                Mengalami Demam
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.pilek" value="1" id="pilek">
                            <label class="form-check-label" for="pilek">
                                Mengalami Pilek
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.sesak" value="1" id="sesak">
                            <label class="form-check-label" for="sesak">
                                Mengalami Sesak Nafas
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.bab_cair" value="1" id="bab_cair">
                            <label class="form-check-label" for="bab_cair">
                                Mengalami BAB Cair
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.mendengkur" value="1" id="mendengkur">
                            <label class="form-check-label" for="mendengkur">
                                Tidur Mendengkur
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.lemas" value="1" id="lemas">
                            <label class="form-check-label" for="lemas">
                                Lemas Kurang Aktif
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model.debounce="data.nafsu_makan" value="1" id="nafsu_makan">
                            <label class="form-check-label" for="nafsu_makan">
                                Kehilangan Nafsu Makan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="skor" wire:model.debounce="data.skor" hidden>
                    </div>
                    <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#KalkulasiModal" type="button">Kalkulasi</button>
                    {{-- <button class="btn btn-warning mt-2 w-100" type="reset">Reset</button> --}}
                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="KalkulasiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Skrining</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            @if ($this->data->skor >= 5)
                <h3 class="text-bold">Beresiko Pneumonia</h3>
                <p>Lanjut Ke Fasilitas Terdekat</p>
                <div class="text-center">
                    <img src="{{ url('assets/img/icons/ambulance.png') }}" style="max-width: 50%; align-items: center;" alt="">
                </div>
            @else
            <div class="text-center">
                <img src="{{ url('assets/img/icons/medical-test.png') }}" style="max-width: 50%; align-items: center;" alt="">
                <h4 class="text-bold">
                    Tidak Beresiko Pnemonia
                </h4>
            </div>
            @endif
            </div>
            @if ($this->data->skor >= 5)
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="submit">Ya</button>
            </div>
            @endif
        </div>
        </div>
    </div>
    {{-- <div wire:ignore.self class="modal fade" id="autoShow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="autoShowLabel" aria-hidden="false">
        <div class="modal-dialog show">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="autoShowLabel">Biodata</h1>
            </div>
            <form wire:submit.prevent="submitDataAnak">
            <div class="modal-body">
                <div class="mb-3">
                    <input class="form-control form-control-sm" wire:model.defer="data_anak.nama_orang_tua" type="text" placeholder="Nama Orang Tua">
                    <div id="emailHelp" class="form-text text-warning" :messages="$errors->get('data_anak.nama_orang_tua')"></div>
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-sm" wire:model.defer="data_anak.nama" type="text" placeholder="Nama Anak">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-sm" wire:model.defer="data_anak.tanggal_lahir" type="date" placeholder="Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <input class="form-control form-control-sm" wire:model.defer="data_anak.no_hp" type="text" placeholder="No Hp">
                </div>
                <div class="mb-3">
                    <textarea class="form-control form-control-sm" wire:model.defer="data_anak.alamat" cols="30" rows="10" placeholder="Alamat "></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>

            <div class="modal-footer">
                @if ($this->data_anak->id == auth()->user()->id)
                    <button type="button" class="btn btn-sm btn-success" class="btn-close" data-bs-dismiss="modal">Lanjut Skrining</button>
                @else
                    <button type="submit" wire:click="submitDataAnak" class="btn btn-sm btn-primary">Save changes</button>
                @endif
            </div>
            </form>
        </div>
        </div>
    </div> --}}
</div>

  @push('scripts')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#autoShow').modal('show');
        });
    </script>

  @endpush
