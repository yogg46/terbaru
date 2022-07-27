<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use App\Models\project;
use App\Models\Trial;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Show extends Component
{
    use LivewireAlert;
    public $moduls, $keterangan;
    public $progres;
    public $project;

    // public $cek = 0;

    public function mount($slug)
    {
        $this->moduls = Modul::where('slug', $slug)->first();
        $this->progres = $this->moduls->progres;
        // $this->project = project::where('id', $this->moduls->ModulToProject->project_id)->first();
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
        $tri = Trial::where('project_id', $this->moduls->no_project)->count();
        // @dd($tri);
        $project = project::where('id', $tes)->first();
        $project->update([
            'total_progres' => $this->total_progres = round(Modul::where('no_project', $tes)->sum('progres') / Modul::where('no_project', $tes)->count())
        ]);
        if ($project->total_progres == 100) {
            $project->update(['status' => 4]);
            if ($tri == 0) {
                $trial = new Trial;
                $trial->nama = $this->moduls->ModulToProject->nama_project;
                $trial->project_id = $this->moduls->ModulToProject->id;
                $trial->status = 0;
                $trial->save();
            };
        };
        $this->alert('success', 'Progres Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function prog($id, $sum)
    {
        $modul = Modul::find($id);
        $modul->update([
            'progres' => $this->progres,
        ]);
        $this->cek($sum);

        // return redirect()->back();
    }
    public function simKet()
    {
        $modul = Modul::find($this->moduls->id);
        $modul->update(['keterangan' => $this->keterangan]);

        $this->alert('success', 'Keterangan Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}