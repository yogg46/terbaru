<?php

namespace App\Http\Livewire\Modul;

use App\Models\Modul;
use Livewire\Component;

class Show extends Component
{
    public $moduls;
    public $cek = 0;

    public function mount($slug)
    {
        $this->moduls= Modul::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.modul.show')
            ->extends(
                'layout.main',
                [
                    'tittle' => 'modul',
                    'slug' => $this->moduls->nama,
                ]
            )
            ->section('isi_page');
    }
}