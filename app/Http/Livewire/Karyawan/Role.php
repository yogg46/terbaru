<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\Kategori_karyawan;
use Livewire\Component;

class Role extends Component
{
    public function render()
    {
        $kategori_karyawan = Kategori_karyawan::all();
        return view('livewire.karyawan.role',['kategori_karyawan' => $kategori_karyawan])
        ->extends('layout.main',['tittle' => 'Karyawan'])
        ->section('isi_page');
    }
}
