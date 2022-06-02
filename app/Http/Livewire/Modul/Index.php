<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use App\Models\project;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $switch = 0;

    public function render()
    {
        return view(
            'livewire.modul.index',
            [
                'project' => project::paginate(2),
                'project2' => project::where('status', 3)->paginate(2),
                // 'project3' => project::where('status', 1)->paginate(2),
                'modul_all' => Modul::where('programer',auth()->user()->id)->paginate(5),
                // 'modul_all' => Modul::paginate(5),
            ]
        )
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Modul',
                    'slug' => ''
                ]
            )
            ->section('isi_page');
    }

    public function sw($s)
    {
        $this->switch = $s;
        return redirect()->back();
    }
}
