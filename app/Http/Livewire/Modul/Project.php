<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use App\Models\project as ModelsProject;
use App\Models\Trial;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Project extends Component
{
    use LivewireAlert;
    public $moduls, $tgl_trial, $keterangan;
    public $project;
    public $progres;
    public function mount($slug2)
    {
        $this->moduls = Modul::where('slug', $slug2)->first();
        // $this->project = ModelsProject::where('id', $this->moduls->ModulToProject->project_id)->first();
        $this->progres = $this->moduls->progres;
        // @dd($this->project->ProjectTrial);
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
    public function cek($tes)
    {
        $tri = Trial::where('project_id', $this->moduls->no_project)->count();

        $project = ModelsProject::where('id', $tes)->first();
        $project->update([
            'total_progres' => $this->total_progres = round(Modul::where('no_project', $tes)->sum('progres') / Modul::where('no_project', $tes)->count())
        ]);

        if ($project->total_progres == 100) {
            $this->tgl_trial = now()->format('d-m-Y');

            $project->update(['status' => 4, 'tgl_trial' => $this->tgl_trial]);
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