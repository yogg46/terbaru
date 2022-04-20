<?php

namespace App\Http\Livewire\Modul;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.modul.index')
        ->extends('layout.main',
        ['tittle' => 'Modul',
        'slug'=>'modul'])
        ->section('isi_page');
    }
}
