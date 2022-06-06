<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use Livewire\Component;

class Project extends Component
{
    public function mount($slug2)
    {
        $this->moduls = Modul::where('slug', $slug2)->first();
    }

    public function render()
    {
        return view('livewire.modul.project')->extends(
            'layout.main',
            [
                'tittle' => 'project',
                'slug' => $this->moduls->ModulToProject->nama_project,
                'slug2' => $this->moduls->nama,
                'sluk3' => $this->moduls->ModulToProject->slug,

            ]
        )
            ->section('isi_page');;
    }
}