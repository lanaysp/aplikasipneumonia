<div x-data="General">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">General Web</span>
            </h3>
            <div class="card-toolbar">
                <button wire:click="addGeneral" class="btn btn-sm btn-light-primary">
                    Ubah Data
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted bg-light-primary">
                            <th class="text-center">No</th>
                            <th class="ps-4 rounded-start">Favicon</th>
                            <th class="ps-4 rounded-start">Icon User</th>
                            <th class="ps-4 rounded-start">Icon Admin</th>
                            <th>Title</th>
                            <th>Footer Name</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ Storage::url($item->favicon) }}">
                                            <img src="{{ Storage::url($item->favicon) }}" class="mw-50px" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ Storage::url($item->icon_user) }}">
                                            <img src="{{ Storage::url($item->icon_user) }}" class="mw-50px" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="me-5">
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ Storage::url($item->icon_admin) }}">
                                            <img src="{{ Storage::url($item->icon_admin) }}" class="mw-50px" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {{ $item->footer_name }}
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    Tidak ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
</div>

@push('scripts')
    <script>
        function General(){
            return{
                deletePemantauan(id) {
                    Swal.fire({
                            title: 'Yakin akan dihapus?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya, hapus!',
                            cancelButtonText: 'Tidak',
                            buttonsStyling: false,
                            customClass: {
                                confirmButton: 'btn btn-danger btn-sm',
                                cancelButton: 'btn btn-secondary btn-sm'
                            }
                        }).then(async (result) => {
                            if (result.isConfirmed) {
                                this.$wire.delete(id);
                            }
                        });
                },
            }
        }
    </script>
@endpush
