<?php

namespace App\Http\Livewire\Projects;

use App\Models\client;
use App\Models\project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    use LivewireAlert;

    public $nama_project, $deskripsi_project, $no_client, $level, $kategori, $status, $tgl_buat, $tgl_deadline, $leader, $total_progres;
    public $marketing;
    public $select;
    public $liat = 'leader';
    public $baru = null;
    // protected $listeners = ['save'];
    // public $id;


    public function render()
    {
        if (Auth::user()->role == 1 || Auth::user()->role == 3) {
            $project = project::search('status', $this->select)->paginate(9);
        } elseif (Auth::user()->role == 4) {
            if ($this->select == 1 || is_null($this->select)) {
                $project = project::search('status', $this->select)
                    ->Where('leader', Auth::user()->id)
                    ->orWhere($this->liat, $this->baru)
                    ->paginate(9);
            } else {
                $project = project::search('status', $this->select)
                    ->Where('leader', Auth::user()->id)
                    ->paginate(9);
            };
        } elseif (Auth::user()->role == 5) {
            $project = project::whereHas('projectModul', function ($q) {
                $q->where('programer', 'LIKE', Auth::user()->id);
            })->search('status', $this->select)
                ->paginate(9);
        };

        $client = client::all();

        return view(
            'livewire.projects.index',
            [
                'project' => $project,
                'client' => $client,


            ]
        )
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Projects',
                    'slug' => 'projects'
                ]
            )
            ->section('isi_page');
    }

    protected $rule = [
        'nama_project' => 'required',
        'no_client' => 'required',

    ];

    public $step;

    public $projects;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
        'submit4',
    ];

    public function mount()
    {
        $this->step = 0;
    }


    public function decreaseStep()
    {
        $this->step--;
    }

    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }

    public function submit1()
    {
        $this->marketing  = Auth::user()->id;
        $this->validate([
            'nama_project' => 'required',
            'no_client' => 'required',
            'deskripsi_project' => 'required',
        ]);

        if ($this->projects) {
            $this->projects = tap($this->projects)->update(
                [
                    'nama_project' => $this->nama_project,
                    'no_client' => $this->no_client,
                    'marketing' => $this->marketing,
                    'deskripsi_project' => $this->deskripsi_project,
                ]
            );
            $this->alert('success', 'Data Berhasil Diupdate', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {
            $this->projects = project::create(
                [
                    'nama_project' => $this->nama_project,
                    'no_client' => $this->no_client,
                    'marketing' => $this->marketing,
                    'deskripsi_project' => $this->deskripsi_project,

                ]
            );
            $this->alert('success', 'Data Berhasil Dibuat', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
        }


        $this->step++;
    }

    public function submit2()
    {
        $this->validate([
            'kategori' => 'required',
            'level' => 'required',

        ]);
        $this->projects = tap($this->projects)->update([
            'kategori' => $this->kategori,
            'level' => $this->level
        ]);
        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->step++;
    }
    public function submit3()
    {
        $this->tgl_buat = now();
        $this->validate([
            'tgl_buat' => 'required',
            'tgl_deadline' => 'required',

        ]);

        $this->projects = tap($this->projects)->update([
            'tgl_buat' => $this->tgl_buat,
            'tgl_deadline' => $this->tgl_deadline,
        ]);

        $this->alert('success', 'Data Berhasil Disimpan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);

        $this->step++;
        // $this->step = 0;
        // return redirect('/projects');
    }
    public function submit4()
    {

        $this->emit('save2');
        $this->resetInput();
    }
    public function resetInput()
    {

        $this->nama_project = null;
        $this->marketing = null;
        $this->no_client = null;
        $this->deskripsi_project = null;
        $this->level = null;
        $this->kategori = null;
        $this->tgl_buat = null;
        $this->tgl_deadline = null;
        $this->step = 0;
    }
}