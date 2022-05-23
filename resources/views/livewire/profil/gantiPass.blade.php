<div>

    <div wire:ignore.self class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ganti Password</h4>
                    <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                        data-bs-dismiss="modal" wire:click.prevent="resetInput()">
                        <span class="svg-icon svg-icon-1 svg-icon-light-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black"></rect>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" wire:submit.prevent="resetPass">

                        <input type="hidden" wire:model="ids">
                        <input type="hidden" wire:model="status">
                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"> <strong>Password Baru </strong> </label>
                            <input type="password" wire:model='password'
                                class="form-control form-control-lg form-control-solid" placeholder="Password Baru">
                            @error('password') <span class="error text-danger">{{ $message }} </span> @enderror
                        </div>
                        <div class="form-group">
                            <label class=" form-label fs-6 mb-2"> <strong>Confirm Password </strong> </label>
                            <input type="password" wire:model='password_confirmation'
                                class="form-control form-control-lg form-control-solid" placeholder="Confirm Password">
                            @error('password') <span class="error text-danger">{{ $message }} </span>
                            @enderror
                        </div>



                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                        wire:click.prevent="resetInput()">Close</button>
                    <button type=" button" class="btn btn-primary" wire:click.prevent="gantiPass()">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
