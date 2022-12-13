<form wire:submit.prevent="submit">
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
                <input type="text" class="form-control" id="skor" wire:model.debounce="data.skor" hidden>
            </div>
            <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#KalkulasiModal" type="button">Kalkulasi</button>
            {{-- <button class="btn btn-warning mt-2 w-100" type="reset">Reset</button> --}}
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="KalkulasiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hasil Skrining</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if ($this->data->skor >= 5)
              Lanjut Ke Fasilitas Terdekat
          @else
             Tidak Beresiko
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
</form>
