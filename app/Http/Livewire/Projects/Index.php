<?php

namespace App\Http\Livewire\Projects;

use App\Models\project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    public $marketing;
    public $coba;
    public $select;
    public $liat = 'leader';
    public $baru = null;
    // public $id;


    public function render()
    {

        $nama_marketing = User::all();





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


        $data_marketing = User::where('role', '3')->get();
        return view(
            'livewire.projects.index',
            [
                'project' => $project,
                'projek' => $project,
                'data_market' => $data_marketing,
                'nama_market' => $nama_marketing,
                'aktif' => project::where('status', '1')->count(),
                'selesai' => project::where('status', '2')->count(),
                'due' => project::where('status', '3')->count(),

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



    public $step;

    public $projects;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
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
        $this->validate([
            'nama' => 'required|min:4',
            'no_kc' => 'required',
        ]);

        if ($this->projects) {
            $this->projects = tap($this->projects)->update(['nama' => $this->nama, 'no_kc' => $this->no_kc]);
            session()->flash('message1', 'successfully updated.');
        } else {
            $this->projects = client::create(['nama' => $this->nama, 'no_kc' => $this->no_kc]);
            session()->flash('message1', 'successfully created.');
        }


        $this->step++;
    }

    public function submit2()
    {
        // $this->validate([]);

        $this->projects = tap($this->projects)->update(['email' => $this->email, 'cp' => $this->cp, 'alamat' => $this->alamat]);

        $this->step++;
    }
    public function submit3()
    {
        // $this->validate([]);

        $this->projects = tap($this->projects)->update(['cp' => $this->cp]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        // $this->step = 0;
        $this->resetInput();
        $this->emit('save');
    }
}