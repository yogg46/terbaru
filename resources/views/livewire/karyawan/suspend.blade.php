<div>
    <div>

        <div wire:ignore.self class="modal modal-primary fade" id="kt_modal_46" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Delete</h4>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" wire:click.prevent="resetInput()">
                            <span class="svg-icon svg-icon-1 svg-icon-light-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                    </div>
                    <div class="modal-body">
                        <form action="" wire:submit.prevent="deleteCountries()">
                            <span class=" form-label fs-6 mb-2">

                                Apakah anda yakin ?
                            </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-light-danger" data-bs-dismiss="modal"
                            wire:click.prevent="resetInput()">Close</button>
                        <button type=" button" class="btn btn-primary" type="submit"
                            wire:click.prevent="deleteCountries()">Delete</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





</div>
