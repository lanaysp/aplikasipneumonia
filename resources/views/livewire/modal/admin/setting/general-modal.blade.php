<form wire:submit.prevent="submit">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-700px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-between">
                <!--begin::Close-->
                <div class="text-center">
                    <h4 class="mb-3">Setting General</h4>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y">
                <div class="row row-cols-lg-2">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Favicon</span>
                        </label>
                        <!--end::Label-->
                        <input type="file" wire:model="data.favicon" class="form-control form-control-sm form-control-solid"/>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Icon User</span>
                        </label>
                        <!--end::Label-->
                        <input type="file" wire:model.defer="data.icon_user" class="form-control form-control-sm form-control-solid"/>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Icon Admin</span>
                        </label>
                        <!--end::Label-->
                        <input type="file" wire:model.defer="data.icon_admin" class="form-control form-control-sm form-control-solid"/>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" wire:model.defer="data.title" class="form-control form-control-sm form-control-solid"/>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Footer Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" wire:model.defer="data.footer_name" class="form-control form-control-sm form-control-solid"/>
                    </div>
                </div>


            </div>
            <div class="modal-footer text-end">
                <button type="reset" data-bs-dismiss="modal" class="btn btn-sm btn-danger me-1">Close</button>
                <button type="submit" class="btn btn-sm btn-primary">
                    <span class="indicator-label">Save</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</form>
