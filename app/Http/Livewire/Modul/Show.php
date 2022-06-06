<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use App\Models\project;
use Livewire\Component;

class Show extends Component
{
    public $moduls;
    public $progres;
    // public $cek = 0;

    public function mount($slug)
    {
        $this->moduls = Modul::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.modul.show')
            ->extends(
                'layout.main',
                [
                    'tittle' => 'modul',
                    'slug' => $this->moduls->nama,
                    'slug2' => $this->moduls->ModulToProject->slug,
                ]
            )
            ->section('isi_page');
    }

    public function cek($tes)
    {
        $project = project::where('id', $tes)->first();
        $project->update([
            'total_progres' => $this->total_progres = round(Modul::where('no_project', $tes)->sum('progres') / Modul::where('no_project', $tes)->count())
        ]);
    }

    public function prog($id, $sum)
    {
        $modul = Modul::find($id);
        $modul->update([
            'progres' => $this->progres,
        ]);
        $this->cek($sum);

        return redirect()->back();
    }
}