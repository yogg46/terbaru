<div>
    {{ auth()->user()->id }} <br>
    {{-- {{ var_dump($bug1) }} --}}
    @foreach ($bug1 as $item )
    id project {{ $item->id}} <br>
    nama project {{ $item->nama_project}} <br>
    status project {{ $item->status}} <br>
    level project {{ $item->level}} <br>
    level project {{ $item->total_progres}} <br>

    <button wire:click.prevent='coba2({{$item->id}})' class="btn btn-light-success"> x </button>

    {{-- @foreach ( $item->projectModul as $key)
    {{ $key->nama}}
    @if ($key->programer == auth()->user()->id)
    modul - programer {{ $key->ModulProgramer->name}} <br>
    @endif
    modul - programer {{ $key->ModulProgramer->name}} <br>
    @endforeach --}}
    <br> <br>
    @endforeach

    {{-- {{ $status}} --}}

</div>
