<div>

    <div wire:ignore.self class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Data Karyawan Baru</h4>
                    <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                        data-bs-dismiss="modal" wire:click.prevent="resetInput()">
                        <span class="svg-icon svg-icon-1 svg-icon-light-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black"></rect>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" wire:submit.prevent="update">

                        <input type="hidden" wire:model.lazy="ids">
                        <input type="hidden" wire:model.lazy="status">
                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"> <strong>Nama </strong> </label>
                            <input type="text" wire:model.lazy='name'
                                class="form-control form-control-lg form-control-solid" placeholder="Nama" readonly>
                            @error('name')
                                <span class="error text-danger">{{ $message }} </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"> <strong> NIK </strong> </label>
                            <input type="number" wire:model.lazy='NIK'
                                class="form-control form-control-lg form-control-solid" placeholder="NIK" readonly>
                            @error('NIK')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"><strong>Email </strong> </label>
                            <input type="email" wire:model.lazy='email'
                                class="form-control form-control-lg form-control-solid" placeholder="Email">
                            @error('email')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"> <strong>No Telepon</strong> </label>
                            <input type="text" wire:model.lazy='no_telepon'
                                class="form-control form-control-lg form-control-solid" placeholder="No Telepon">
                            @error('no_telepon')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label class=" form-label fs-6 mb-2"><strong> Jabatan </strong> </label>
                            <select wire:ignore.self wire:model.lazy='role' class="form-select form-select-solid"
                                data-prompt-position="topLeft">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($k_k as $k)
                                    <option value="{{ $k->no_kategori }}">{{ $k->kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        wire:click.prevent="resetInput()">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>
