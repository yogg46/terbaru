<?php

namespace App\Http\Livewire\Bug;

use App\Models\Bug;
use Livewire\Component;
use App\Models\project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    // public $project;
    public $status;
    public $level;
    public $total_progres;
    // public $ids;

    public function render()
    {
        if (Auth::user()->role == 5) {
            $bb = project::with('ProjectBug')->where('status', 3)->whereHas('ProjectBug', function (Builder $query) {
                $query->where('programer', auth()->user()->id);
            })->orWhere('leader', auth()->user()->id)->paginate(9);
        } elseif (Auth::user()->role == 4) {
            $bb = project::with('ProjectBug')->where('status', 3)->where('leader', auth()->user()->id)->paginate(9);
        }


        return view(
            'livewire.bug.index',
            [
                'bug1' => $bb,
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