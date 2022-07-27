<?php

namespace App\Http\Livewire\Bug;

use App\Models\Bug;
use Livewire\Component;
use App\Models\project;
use App\Models\Version;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    // public $project;
    public $status;
    public $level;
    public $pilih = 3;
    public $total_progres;
    public $cek = 'ProjectBug';
    // public $ids;

    public function render()
    {


        if ($this->pilih == 3) {
            $this->cek = 'ProjectBug';
        } elseif ($this->pilih == 5) {
            $this->cek = 'ProjectRelease';
        };

        if (Auth::user()->role == 5) {
            $bb = project::with($this->cek)
                ->where('status', $this->pilih)
                ->whereHas($this->cek, function (Builder $query) {
                    $query->where('programer', auth()->user()->id)->orderBy('created_at', 'desc');
                })
                ->withCount([
                    $this->cek,
                    $this->cek . ' as bug_baru' => function (Builder $query) {
                        $query->where('status', 0);
                    }
                ])
                ->withCount([
                    $this->cek,
                    $this->cek . ' as bug_on' => function (Builder $query) {
                        $query->where('status', 1);
                    }
                ])
                ->withCount([
                    $this->cek,
                    $this->cek . ' as bug_com' => function (Builder $query) {
                        $query->where('status', 2);
                    }
                ])
                ->orWhere('leader', auth()->user()->id)
                ->paginate(9);
        } elseif (Auth::user()->role == 4) {
            $bb = project::with($this->cek)->where('status', $this->pilih)->where('leader', auth()->user()->id)->withCount([
                $this->cek,
                $this->cek . ' as bug_baru' => function (Builder $query) {
                    $query->where('status', 0);
                }
            ])
                ->withCount([
                    $this->cek,
                    $this->cek . ' as bug_on' => function (Builder $query) {
                        $query->where('status', 1);
                    }
                ])
                ->withCount([
                    $this->cek,
                    $this->cek . ' as bug_com' => function (Builder $query) {
                        $query->where('status', 2);
                    }
                ])->orderBy('created_at', 'desc')->paginate(9);
        }


        return view(
            'livewire.bug.index',
            [
                'bug1' => $bb,
                'bug' => project::where('status', 2)->orWhere('leader', auth()->user()->id)->paginate(5),
                'bug3' => Bug::all(),
                // 'versi' => Version::where('project_id', $this->project->id)->get(),


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