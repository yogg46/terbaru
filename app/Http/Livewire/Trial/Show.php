<?php

namespace App\Http\Livewire\Trial;

use App\Models\Bug;
use App\Models\Modul;
use App\Models\project;
use App\Models\Trial;
use App\Models\User;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Show extends Component
{
    use LivewireAlert;

    public $project, $trial, $catatan;
    public $nama, $deadline, $programer, $deskripsi, $status, $modul_id;

    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();
        $this->trial = Trial::where('project_id', $this->project->id)->first();
        // $this->programer = Modul::where('id', 1)->pluck('programer');
        // @dd($this->programer);

        // $this->programer =  Modul::where('id', $this->modul_id)->pluck('programer')->first();
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
                'modul' => Modul::where('no_project', $this->project->id)->get(),
                'programmer' =>  Modul::where('no_project', $this->project->id)->pluck('programer'),
                'buger' =>  Bug::where('project_id', $this->project->id)->pluck('programer')->toArray(),


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
        // $this->validate([
        //     'nama' => 'required',
        //     // 'programer' => 'required',
        //     'deadline' => 'required',
        //     'modul_id' => 'required',
        //     'programer' => 'required'
        // ]);

        $this->programer = implode("", Modul::where('id', $this->modul_id)->pluck('programer')->toArray());

        $bug = new Bug;
        $bug->nama = $this->nama;
        $bug->deskripsi = $this->deskripsi;
        $bug->deadline = $this->deadline;
        $bug->modul_id = $this->modul_id;
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

    public function simKet()
    {
        $modul = project::find($this->project->id);
        $modul->update(['catatan' => $this->catatan]);

        $this->alert('success', 'Catatan Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function release($id)
    {
        $project = project::where('id', $id)->first();
        $project->update(['status' => 6, 'tgl_release' => Carbon::now()->format('d-m-Y')]);
        $this->emit('release');
        $this->alert('success', 'Project Berhasil Direlease', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/bug-report/' . $this->project->slug));
    }
}