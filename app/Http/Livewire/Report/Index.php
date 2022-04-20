<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.report.index')
        ->extends('layout.main',
        ['tittle' => 'Report',
        'slug'=>'report'])
        ->section('isi_page');
    }
}
