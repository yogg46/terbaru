<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\Use
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.karyawan.edit');
    }
    /**
    * define public variable
    */
    public $name, $karyawan_id;
    public $NIK;
    public $email;
    public $no_telepon;
    public $kategori;

    /**
     * mount or construct function
     */
    public function mount(User $User)
    {
        if($User) {
            $this-> karyawan_id = $User->id;
            $this-> name = $User->name;
            $this-> NIK = $User->NIK;
            $this-> email = $User->email;
            $this-> no_telepon = $User->no_telepon;
            $this-> kategori = $User->kategori;
        }
    }

    /**
     * Real-time Validation
     */

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required',
            'no_telepon'=>'required',
            'kategori'=>'required',
        ]);
    }

    /**
     * update function
     */
    public function update()
    {
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required',
            'no_telepon'=>'required',
            'kategori'=>'required',
        ]);

        if($this->karyawan_id) {

            $karyawan = User::find($this->karyawan_id);

            if($karyawan) {
                $karyawan->update([
                    'name' => $this->name,
                    'email' => $this->email,
                    'NIK'=>$this->NIK,
                    'no_telepon'=>$this->no_telepon,
                    'kategori'=>$this->kategori,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('karyawan.index');

    }



}
