<div x-data="Blog">
    <!--begin::Section-->
        <div class="mb-17">
            <!--begin::Content-->
            <div class="d-flex flex-stack mb-5">
                <!--begin::Title-->
                <h3 class="text-black">Artikel</h3>
                <!--end::Title-->
                <!--begin::Link-->
                <button type="button" wire:click="addBlog" class="btn btn-sm btn-primary"> <span class="fa fa-plus me-2"></span>Tambah Artikel</button>
                <!--end::Link-->
            </div>
            <!--end::Content-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mb-9"></div>
            <!--end::Separator-->
            <!--begin::Row-->
            <div class="row g-10">
                <!--begin::Col-->
                @foreach ($data as $item)
                    <div class="col-md-3">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ Storage::url($item->thumbnail) }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ Storage::url($item->thumbnail) }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $item->nama }}</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-bold fs-5 text-gray-600 text-dark mt-3"> {{ Str::limit($item->deskripsi, 100) }}</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bolder mt-5 text-end">
                                    <!--begin::Label-->
                                    <button type="button" wire:click="editBlog({{ $item->id }})" class="btn btn-sm btn-warning"> <span class="fa fa-edit me-2"></span> Edit</button>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <button type="button" x-on:click="deleteBlog({{ $item->id }})" class="btn btn-sm btn-danger"> <span class="fa fa-times me-2"></span> Hapus</button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                @endforeach
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
    <!--end::Section-->
</div>

@push('scripts')
    <script>
        function Blog(){
            return{
                deleteBlog(id) {
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

