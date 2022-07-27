<?php

namespace App\Http\Livewire\Report;

use App\Models\project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {

        if (Auth::user()->role == 5) {
            $report = project::whereHas('projectModul', function ($q) {
                $q->where('programer', 'LIKE', Auth::user()->id);
            })->orderBy('created_at', 'desc')->orderBy('status', 'asc')->paginate(9);
        } elseif (Auth::user()->role == 4) {
            $report = project::where('leader', Auth::user()->id)
                ->orderBy('created_at', 'desc')->orderBy('status', 'asc')->paginate(9);
        } else {
            $report = project::orderBy('created_at', 'desc')->orderBy('status', 'asc')->paginate(9);
        }
        return view(
            'livewire.report.index',
            ['project' => $report,]
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