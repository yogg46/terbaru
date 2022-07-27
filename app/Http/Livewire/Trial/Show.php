<?php

namespace App\Http\Livewire\Trial;

use App\Models\Bug;
use App\Models\Modul;
use App\Models\project;
use App\Models\Release;
use App\Models\Trial;
use App\Models\User;
use App\Models\Version;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Show extends Component
{
    use LivewireAlert;

    public $project, $trial, $catatan;
    public $swit = 0;
    public $nama, $deadline, $programer, $deskripsi, $status, $modul_id;
    public $butu = 0;
    public $sekar;

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
                'versi' => Version::where('project_id', $this->project->id)->get(),
                'bug_re' => Release::where('project_id', $this->project->id)->get(),


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
    public function swt()
    {
        return $this->swit = 1;
    }

    public function swt2()
    {
        return $this->swit = 0;
    }

    public function swt3()
    {
        return $this->swit = 2;
    }
    public function resetInput()
    {
        $this->nama = null;
        $this->programer = null;
        $this->deskripsi = null;
        $this->deadline = null;
        $this->modul_id = null;
        // $this->nama = null;

    }

    public function save2()
    {
        // $this->validate([
        //     'nama' => 'required',
        //     // 'programer' => 'required',
        //     'deadline' => 'required',
        //     'modul_id' => 'required',
        //     'programer' => 'required'
        // ]);

        $this->programer = implode("", Modul::where('id', $this->modul_id)->pluck('programer')->toArray());

        Bug::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'deadline' => date('d-m-Y', strtotime($this->deadline)),
            'modul_id' => $this->modul_id,
            'programer' => $this->programer,
            'project_id' => $this->project->id,
            'status' => 0,
        ]);

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



    public function store()
    {
        $this->programer = implode("", Modul::where('id', $this->modul_id)->pluck('programer')->toArray());

        $versi = Version::where('project_id', $this->project->id)->orderBy('id', 'desc')->first();

        Release::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'deadline' => date('d-m-Y', strtotime($this->deadline)),
            'modul_id' => $this->modul_id,
            'versi' => $versi->id,
            'programer' => $this->programer,
            'project_id' => $this->project->id,
            'status' => 0,
        ]);

        $this->emit('revisi');
        $this->resetInput();
        $this->alert('success', 'Data Berhasil Ditambahkan', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
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
        // Version::create([
        //     'project_id' => $id,
        //     'tgl' => Carbon::now()->format('d-m-Y')
        // ]);
        $this->sekar =  Carbon::now()->format('d-m-Y');
        $version = new Version;
        $version->project_id = $id;
        $version->tgl = $this->sekar;
        $version->save();

        $this->emit('release');
        $this->alert('success', 'Project Berhasil Direlease', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/trial-error/' . $this->project->slug));
    }
    public function release2($id)
    {
        $project = project::where('id', $id)->first();
        $project->update(['status' => 5, 'tgl_release' => Carbon::now()->format('d-m-Y')]);

        $this->sekar =  Carbon::now()->format('d-m-Y');


        $version = new Version;
        $version->project_id = $id;
        $version->tgl = $this->sekar;
        $version->save();

        $this->emit('release');
        $this->alert('success', 'Project Berhasil Direlease', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        return redirect(url('/trial-error/' . $this->project->slug));
    }
}