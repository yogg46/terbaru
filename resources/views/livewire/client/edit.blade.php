<div>

    <div wire:ignore.self class="modal  modal-primary fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInput()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Client</h4>
                </div>
                <div class="modal-body">
                    <form action=""  wire:submit.prevent="update">

                        <input type="hidden" wire:model="ids">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Client</label>
                            <input type="text" wire:model='client_id' class="form-control validate[required]"  placeholder="Nomor Client">
                            @error('client_id') <span class="error">{{ $message }}</span> @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" wire:model='nama' class="form-control"  placeholder="Nama">
                            @error('nama') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact Person</label>
                            <input type="text" wire:model='cp' class="form-control"  placeholder="Contact Person">
                            @error('cp') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" wire:model='alamat' class="form-control" placeholder="Alamat">
                            @error('alamat') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">

                            <label>Kategori</label>
                            <select wire:model='no_kc' class="form-control" data-prompt-position="topLeft" >
                                <option value="">Pilih Kategori</option>
                                @foreach ($kc as $c )

                                <option value="{{ $c->kc_id }}">{{ $c->nama}}</option>

                                @endforeach


                            </select>
                            @error('no_kc') <span class="error">{{ $message }}</span> @enderror
                        </div>





                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" wire:click.prevent="resetInput()">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
