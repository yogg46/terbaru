<?php

namespace App\Http\Livewire\Trial;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.trial.index')
        ->extends('layout.main',
        ['tittle' => 'Trial Error',
        'slug'=>''])
        ->section('isi_page');
    }
}