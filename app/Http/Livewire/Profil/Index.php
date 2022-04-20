<?php

namespace App\Http\Livewire\Profil;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.profil.index',['profil'=>User::all()])
        ->extends('layout.main',
        ['tittle' => 'Profil',
        'slug'=> 'All'])
        ->section('isi_page');
    }
}
