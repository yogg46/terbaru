<div>
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bolder">Edit Client</div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Form-->
        <form wire:submit.prevent="update">
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->

                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Nama Client</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input type="text" wire:model="nama" class="form-control form-control-solid"
                            placeholder="Nama Client">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Email Client</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input type="text" wire:model="email" class="form-control form-control-solid" name="type"
                            placeholder="Email Client">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">No Telpon Client</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input type="text" wire:model="cp" class="form-control form-control-solid" name="type"
                            placeholder="No Telpon Client">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Alamat Client</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <textarea name="description" wire:model="alamat" class="form-control form-control-solid h-100px"></textarea>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--begin::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->

                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Notifications</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <div class="d-flex fw-bold h-100">
                            <div class="form-check form-check-custom form-check-solid me-9">
                                <input class="form-check-input" type="radio" wire:model='no_kc' name="category"
                                    value="1" id="email">
                                <label class="form-check-label ms-3" for="email">Instansi </label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid me-9">
                                <input class="form-check-input" type="radio" wire:model='no_kc' name="category"
                                    value="2" id="phone">
                                <label class="form-check-label ms-3" for="phone">Perusahaan</label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" wire:model='no_kc' name="category"
                                    value="3" id="phone">
                                <label class="form-check-label ms-3" for="phone">Kesehatan</label>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Status</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <div class="form-check form-switch form-check-custom form-check-solid">

                            <input class="form-check-input" wire:model="status" type="checkbox" value=""
                                id="status" name="status">
                            <label class="form-check-label fw-bold text-gray-400 ms-3"
                                for="status">{{ $status == 1 ? 'Active' : 'Deactive' }}
                            </label>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                {{-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> --}}
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            <!--end::Card footer-->
            <input type="hidden">
            <div></div>
        </form>
        <!--end:Form-->
    </div>

</div>
