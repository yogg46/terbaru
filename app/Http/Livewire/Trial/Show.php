<?php

namespace App\Http\Livewire\Trial;

use App\Models\Bug;
use App\Models\Modul;
use App\Models\project;
use App\Models\Trial;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Show extends Component
{
    use LivewireAlert;

    public $project, $trial;
    public $nama, $deadline, $programer, $deskripsi, $status;
    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();
        $this->trial = Trial::where('project_id', $this->project->id)->first();
        // @dd($this->trial);
    }

    public function render()
    {
        $cek =  Modul::where('no_project', $this->project->id)->get();

        return view(
            'livewire.trial.show',
            [
                'bug' => Bug::where('project_id', $this->project->id)->get(),
                'pro1' => $cek->groupBy('programer'),
                'pro' => User::where('role', 5)->get(),
                'programmer' =>  Modul::where('no_project', $this->project->id)->pluck('programer'),

            ]
        )->extends(
            'layout.main',
            [
                'tittle' => 'Trial eror',
                'slug' => $this->project->nama_project,
            ]
        )
            ->section('isi_page');
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->programer = null;
        $this->deskripsi = null;
        $this->deadline = null;
        // $this->nama = null;

    }

    public function save()
    {
        $bug = new Bug;
        $bug->nama = $this->nama;
        $bug->deskripsi = $this->deskripsi;
        $bug->deadline = $this->deadline;
        $bug->programer = $this->programer;
        $bug->project_id = $this->project->id;
        $bug->status = 0;
        $bug->save();
        $this->emit('addbug');
        $this->resetInput();
        $this->alert('success', 'Data Berhasil Ditambahkan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);

        $project =  project::where('id', $this->project->id)->first();
        $project->update(['status' => 3]);
        // $project->update(['status' => 3, 'total_progres' => 111,]);
    }
}