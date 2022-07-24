<?php

namespace App\Http\Livewire\Report;

use App\Models\client;
use App\Models\Modul;
use App\Models\project;
use Livewire\Component;

class Show extends Component
{
    public $project;
    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();
    }
    public function render()
    {
        $cek =  Modul::where('no_project', $this->project->id)->get();

        return view('livewire.report.show', [
            'pro1' => $cek->groupBy('programer'),
        ])->extends(
            'layout.main',
            [
                'tittle' => 'report',
                'slug' => $this->project->nama_project,
            ]
        )
            ->section('isi_page');
    }
}