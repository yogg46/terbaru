<div>

    <div wire:ignore.self class="modal modal-danger fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInput()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete User</h4>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <strong style="color:rgb(255, 0, 153);">
                            Apakah anda ingin menghapus user {{ $name }}
                        </strong>

                    <form action=""  wire:submit.prevent="destroy">
                        <input type="hidden" wire:model="ids">
                    </form>


                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" wire:click.prevent="resetInput()">Close</button>
                    <button type="sumbit" class="btn btn-danger"  wire:click.prevent="delete()">hapus</button>
                </div>
            </div>
        </div>
    </div>

</div>
