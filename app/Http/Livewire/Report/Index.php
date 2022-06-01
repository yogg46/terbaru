<?php

namespace App\Http\Livewire\Report;

use App\Models\project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view(
            'livewire.report.index',
            ['project' => project::all(),]
        )
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Report',
                    'slug' => ''
                ]
            )
            ->section('isi_page');
    }
}