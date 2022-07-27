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
    public $listeners = ['revisi', 'selesai'];
    public $catatan;
    public $bug, $project;


    public function mount($slug)
    {
        $this->project = project::where('slug', $slug)->first();
        // $this->bug2 = Bug::where('project_id', $this->project->id)->first();
    }

    public function render()
    {
        $cek =  Modul::where('no_project', $this->project->id)->get();

        return view('livewire.bug.show', [
            'bug2' => Bug::where('project_id', $this->project->id)->get(),
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

    public function konfimasiSelesai($ids)
    {
        $nama = Bug::where('id', $ids)->first();
        $this->dispatchBrowserEvent('swal:K_selesai', [
            'type' => 'warning',
            'title' => 'Anda Sudah Memperbaiki Bug ' . $nama->nama . '?',
            'text' => '',
            'id' => $ids,
        ]);
    }

    public function konfimasiRevisi($id)
    {
        $nama = Bug::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:K_revisi', [
            'type' => 'warning',
            'title' => 'Anda Sudah Memperbaiki Bug ' . $nama[0]->nama . '?',
            'text' => '',
            'id' => $id,
        ]);
    }


    public function selesai($ids)
    {
        // @dd($ids);
        $bug = Bug::where('id', $ids)->first();
        $bug->update(['status' => 2]);
        $this->alert('success', 'Bug Berhasil DiSelesaikan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function revisi($ids)
    {

        $bug = Bug::where('id', $ids)->first();
        $bug->update(['status' => 1]);
        $this->alert('success', 'Bug Dimulai Revisi', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);


        return redirect(url('/bug-report/' . $this->project->slug));
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

    public function baca($id)
    {
        $project = project::where('id', $id)->first();

        $bugg = Bug::find($id);
        $bugg->update(['status' => 1,]);
        // $this->emit('revisi');

        $this->alert('success', 'Bug Dimulai Revisi', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/bug-report/' . $this->project->slug));
    }

    public function sim($id)
    {
        $project = project::where('id', $id)->first();

        $buggs = Bug::find($id);
        $buggs->update(['status' => 2]);
        // $this->emit('selesai');
        $this->alert('success', 'Bug Berhasil DiSelesaikan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/bug-report/' . $this->project->slug));
    }
}