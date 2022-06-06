<div>
    {{$moduls->ModulToProject->slug}}
    {{ $moduls->progres }}
    <form action="" wire:submit="prog({{ $moduls->id }},{{$moduls->ModulToProject->id}})">

        <input type="text" value="{{ $moduls->id }}">
        <input wire:model="progres" value="" type="range" class="form-range" min="0" max="100" name="" id="">
        <input type="number" wire:model='progres'>
        <button type="submit"> sub </button>
    </form>

</div>
