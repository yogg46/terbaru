<div>

{{-- {{ $marketing }}

    <form action="" method="get">

        <select wire:model='marketing' class="form-control" data-prompt-position="topLeft" >
            <option value="">Pilih Jabatan</option>
            @foreach ($nama_market as $k)
            <option value="{{ $k->id }}"> {{ $k->name }}</option>
            @endforeach
            </select>


    </form>


@foreach ($projek as $p )
{{ $p->nama_project }} <br>
{{ $p->LeaderToProject->name }} <br>
{{ $p->MarketingToProject->name }} <br>
{{ $p->ClientToProject->nama }} <br>
{{ $p->ClientToProject->r_kc->nama }} <br>
{{ $p->tgl_deadline }} <br>
{{ ($p->tgl_deadline) }} <br>
 <br>
{{ $p->name }} <br>


@endforeach --}}


@foreach ($projek as $item )
@php
    $diff = abs(strtotime($item->tgl_deadline) - strtotime($item->tgl_buat));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $totalDaysDiff    = $diff/60/60/24;
@endphp
{{ $item->tgl_buat }} <br>
{{ $item->tgl_deadline}} <br>
{{ $totalDaysDiff.' hari'}} <br>
{{ $years . ' tahun ' .  $months.  ' bulan '.  $days .' hari ' }} <br> <br>
@endforeach



<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button data-toggle="modal" data-target="#createmodal" type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i class="di di-plus"></i></span>Input Data Karyawan Baru </button>

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
                            <th>time</th>
                            <th>marketing</th>
                            <th>status</th>
                            <th>progres</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no=1
                        @endphp
                        @foreach ($projek as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            {{-- <td>{{ $item->no_project}}</td> --}}
                            {{-- <td>{{ $item->no_client}}</td> --}}
                            <td>{{ $item->nama_project}}</td>
                            <td>{{ $item->tgl_buat}} <br> {{ $item->tgl_trial}} </td>
                            <td>{{ $item->MarketingToProject->name}}</td>
                            <td><span class="label
                                {{ $item->status == '1'  ? 'label-programer' : ''}}
                                {{ $item->status == '2'  ? 'label-secondary' : ''}}
                                {{ $item->status == '3'  ? 'label-success' : ''}} "
                                >
                                {{ $item->status == '1'  ? 'Mulai' :
                                ($item->status == '2'  ? 'Pending' :
                                ($item->status == '3'  ? 'Selesai' : '')) }}

                            </span></td>
                            <td>
                                <label >{{$item->total_progres}}%</label>
                                <div class="progress progress-sm progress-striped active">
                                    <div  class="progress-bar progress-bar-{{ $item->total_progres == '100' ? 'success' : 'info' }}" style="width: {{ $item->total_progres }}%;">
                                       </div>
                                </div>

                            </td>
                            {{-- <td>
                                <div class="btn-group" role="group">
                                    <button  data-toggle="modal" data-target="#editmodal" class="btn btn-default-outline btn-sm" wire:click.prevent="edit({{$item->id}})" >Edit</button>
                                    <button wire:click.prevent="destroy({{$item->id}})"class="btn btn-danger-outline btn-sm">Delete</button>
                                </div>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>
