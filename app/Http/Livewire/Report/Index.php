<?php

namespace App\Http\Livewire\Report;

use App\Models\project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view(
            'livewire.report.index',
            ['project' => project::paginate(9),]
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