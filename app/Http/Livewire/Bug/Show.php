<?php

namespace App\Http\Livewire\Bug;

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
    public $listeners = ['revisi'];


    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();
        $this->bug2 = Bug::where('project_id', $this->project->id)->first();
    }
    public function render()
    {
        $cek =  Modul::where('no_project', $this->project->id)->get();

        return view('livewire.bug.show', [
            'bug' => Bug::where('project_id', $this->project->id)->get(),
            'pro' => User::where('role', 5)->get(),
            'buger' =>  Bug::where('project_id', $this->project->id)->pluck('programer')->toArray(),


            'pro1' => $cek->groupBy('programer'),

        ])->extends(
            'layout.main',
            [
                'tittle' => 'Bug report',
                'slug' => $this->project->nama_project,
            ]
        )
            ->section('isi_page');
    }
    public function konfimasiRevisi($id)
    {
        $nama = Bug::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:revisi', [
            'type' => 'warning',
            'title' => 'Anda Sudah Memperbaiki Bug ' . $nama[0]->nama . '?',
            'text' => '',
            'id' => $id,
        ]);
    }
    public function revisi($id)
    {

        $this->emit('revisi');
        $bug = Bug::where('id', $id)->first();
        $bug->update(['status' => 1]);
        $this->alert('success', 'Bug Berhasil Direvisi', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);

        return redirect(url('/bug-report/' . $this->project->slug));
    }
    public function release($id)
    {
        $project = project::where('id', $id)->first();
        $project->update(['status' => 6, 'tgl_release' => Carbon::now()]);
        $this->emit('release');
        $this->alert('success', 'Project Berhasil Direlease', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/bug-report/' . $this->project->slug));
    }
}