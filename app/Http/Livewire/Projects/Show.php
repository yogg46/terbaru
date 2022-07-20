<?php

namespace App\Http\Livewire\Projects;

use App\Models\client;
use App\Models\Modul;
use App\Models\project;
use Illuminate\Http\Request;
use Livewire\Component;

class Show extends Component
{
    public $project;
    // public $total_project;
    public $total_progres;
    public $sit;

    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();

        // if ($projects->ClientToProject()->count()) {
        //     $this->project = project::where('slug', $slug)->first();
        // } else {
        //     $this->project = project::where('slug', $slug)->first();
        //     $this->client = client::onlyTrashed()->where('id', $projects->no_client)->first();
        // };
    }
    public function render()
    {
        return view('livewire.projects.show')
            ->extends(
                'layout.main',
                [
                    'tittle' => 'projects',
                    'slug' => $this->project->nama_project,
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
}