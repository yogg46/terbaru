<div>
    @include('livewire.karyawan.edit')
    @include('livewire.karyawan.create')
    @include('livewire.karyawan.suspend')


    <div class="col-md-12">

        @if (session()->has('message'))
        <div class="alert alert-success">{{session('message')}}</div>

        @endif

    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button data-toggle="modal" data-target="#createmodal" type="button"
                        class="btn btn-labeled btn-success"><span class="btn-label"><i
                                class="di di-plus"></i></span>Input Data Karyawan Baru </button>

                    <div class="tools">
                        <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                        <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-dataTable table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>Nomer telepon</th>
                                <th>Jabatan</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $no=1
                            @endphp

                            @foreach ($karyawan as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->NIK}}</td>
                                <td>{{ $item->no_telepon}}</td>
                                <td><span class="label
                                    {{ $item->utk->kategori == 'Programer'  ? 'label-programer' : ''}}
                                    {{ $item->utk->kategori == 'Leader'  ? 'label-secondary' : ''}}
                                    {{ $item->utk->kategori == 'Management'  ? 'label-manager' : ''}}
                                    {{ $item->utk->kategori == 'Marketing'  ? 'label-marketing' : ''}}
                                    {{ $item->utk->kategori == 'Administator'  ? 'label-danger' : ''}}">{{
                                        $item->utk->kategori}}</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        {{-- <a data-target="#editmodal " data-toggle="modal"
                                            wire:click.prevent="edit({{$item->id}})"> <span><i
                                                    class="di di-trash"></i></a> --}}

                                        <button data-toggle="modal" data-target="#editmodal"
                                            class="btn btn-default-outline btn-sm"
                                            wire:click.prevent="edit({{$item->id}})">Edit</button>
                                        {{-- <button wire:click.prevent="destroy({{$item->id}})"
                                            class="btn btn-danger-outline btn-sm">Delete</button> --}}
                                        <button data-toggle="modal" data-target="#deletemodal"
                                            wire:click="deleteId({{ $item->id }})"
                                            class="btn btn-danger-outline btn-sm">Delete</button>
                                    </div>
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                    <button class="btn btn-success btn-sm"
                                        wire:click.prevent="presus({{$item->id}})">Aktif</button>
                                    @else
                                    <button class="btn btn-danger btn-sm"
                                        wire:click.prevent="presus({{$item->id}})">Suspended</button>
                                    @endif



                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        window.livewire.on('edit',()=>{
            $('#editmodal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('delete',()=>{
            $('#deletemodal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('save',()=>{
            $('#createmodal').modal('hide');
        })
    </script>

</div>
