<?php

namespace App\Http\Livewire\Report;

use App\Models\client;
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
        return view('livewire.report.show')->extends(
            'layout.main',
            [
                'tittle' => 'report',
                'slug' => $this->project->nama_project,
            ]
        )
            ->section('isi_page');
    }
}