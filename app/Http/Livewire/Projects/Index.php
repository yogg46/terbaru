<?php

namespace App\Http\Livewire\Projects;

use App\Models\project;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    public $marketing;
    public $coba;
    // public $id;


    public function render()
    {

        $nama_marketing = User::all();
        $project = project::all();
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

    public function coba()
    {
        $this->dispatchBrowserEvent('swal', ['title' => 'hello from Livewire']);
    }
}