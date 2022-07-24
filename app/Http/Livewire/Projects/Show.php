<?php

namespace App\Http\Livewire\Projects;

use App\Models\client;
use App\Models\Modul;
use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Show extends Component
{
    use LivewireAlert;

    public $project;
    public $pro;
    public $pro2;
    public $ds;
    public $level, $tgl_deadline;

    // public $total_project;
    public $total_progres;
    public $sit = '';
    public $coba;

    public $nama, $programer2, $no_project;

    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();

        $this->level = $this->project->level;
        $this->tgl_deadline = $this->project->tgl_deadline;


        // @dd($this->project);
    }
    public function render()
    {
        $cek =  Modul::where('no_project', $this->project->id)->get();
        return view('livewire.projects.show', [
            'programer' =>  User::where('role', 5)->get(),
            'pro1' => $cek->groupBy('programer'),
            'modul' => $cek,
        ])
            ->extends(
                'layout.main',
                [
                    'tittle' => 'projects',
                    'slug' => $this->project->nama_project,
                ]
            )
            ->section('isi_page');
    }

    public function cek($tes)
    {
        $project = project::where('id', $tes)->first();

        $project->update([
            'total_progres' => $this->total_progres = round(Modul::where('no_project', $tes)->sum('progres') / Modul::where('no_project', $tes)->count())
        ]);
    }
    public function ambil($id)
    {
        // $slug1 = $this->project->slug;
        $project1 = project::where('id', $id)->first();
        // $project1->update(['leader' => Auth::user()->id, 'status' => 2]);
        $this->ids = $project1->id;
        $project1 = project::find($this->ids);
        $project1->update(['leader' => Auth::user()->id, 'status' => 2]);
        // $project1->update(['status' => 2]);
        if ($this->project->leader == Auth::user()->id) {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Project Berhasil Diambil']
            );
        }

        // return redirect(url('/projects' . '/' . $slug1));
    }
    public function resetInput()
    {
        $this->nama = null;
        $this->programer2 = null;
        // $this->nama = null;

    }
    public function save()
    {
        // $slug1 = $this->project->slug;

        $modul = new Modul;

        $modul->nama = $this->nama;
        $modul->programer = $this->programer2;
        $modul->no_project = $this->project->id;
        $modul->progres = 0;
        $modul->save();
        $this->emit('add_modul');
        $this->resetInput();
        $this->alert('success', 'Data Berhasil Ditambahkan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        // return redirect(url('/projects' . '/' . $slug1));
    }
    public function update($id)
    {
        $slug1 = $this->project->slug;

        $project1 = project::where('id', $id)->first();
        $this->ids = $project1->id;
        $project1 = project::find($this->ids);
        $project1->update(['tgl_deadline' => $this->tgl_deadline, 'level' => $this->level]);
        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emit('edit_pro');
        return redirect(url('/projects' . '/' . $slug1));
    }
}