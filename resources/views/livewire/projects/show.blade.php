<div>
    {{ $project->nama_project }} <br>
    nama client
    {{ $project->ClientToProject->nama }}
    <br><br>
    {{-- {{ $project->projectModul->id }} --}}
    @foreach ($project->projectModul as $key )

    {{ $key->nama}} <a href="/modul/{{$key->slug}}"> --> </a> <br>
    {{ $key->progres}} <br>
    {{-- {{ count($project->projectModul)}} <br> <br> --}}
    {{-- {{ $key->sum('progres')/count($project->projectModul) }} --}}
    @endforeach
    <br>
    {{$project->total_progres }} <br>
    <br>
    {{ $sit}}

    <button wire:click='cek({{$project->id}})'> cek</button>

    <input type="text" wire:model='total_progres'>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>