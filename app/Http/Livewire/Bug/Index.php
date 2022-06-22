<?php

namespace App\Http\Livewire\Bug;

use App\Models\Bug;
use Livewire\Component;
use App\Models\project;
use Illuminate\Database\Eloquent\Builder;

class Index extends Component
{
    // public $project;
    public $status;
    public $level;
    public $total_progres;
    // public $ids;

    public function render()
    {
        return view(
            'livewire.bug.index',
            [
                'bug1' => project::with('projectModul')->where('status', 2)->whereHas('projectModul', function (Builder $query) {
                    $query->where('programer', auth()->user()->id);
                })->orWhere('leader', auth()->user()->id)->get(),
                'bug' => project::where('status', 2)->orWhere('leader', auth()->user()->id)->paginate(5),
                'bug3' => Bug::all(),
            ]
        )->extends(
            'layout.main',
            [
                'tittle' => 'Bug Report',
                'slug' => ''
            ]
        )->section('isi_page');
    }


    public function coba2($id)
    {
        $project = project::where('id', $id)->first();
        $project->update([
            'total_progres' => $this->total_progres = 111,

        ]);
        return redirect('/bug-report');
    }
}