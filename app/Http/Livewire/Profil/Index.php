<?php

namespace App\Http\Livewire\Profil;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $Enama = 0;
    public $name;
    public $ids;
    public $NIK;
    public $email;
    public $no_telepon;
    public $password, $password_confirmation;

    public function render()
    {
        return view('livewire.profil.index', ['profil' => User::all()])
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Profil',
                    'slug' => 'All'
                ]
            )
            ->section('isi_page');
    }
    public function resetInput()
    {
        $this->name = null;
        $this->NIK = null;
        $this->email = null;
        $this->no_telepon = null;
        // $this->role = null;
        // return redirect()->route('karyawan.index');
    }


    protected $rules = [
        'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email|unique:karyawan',
        'NIK' => 'required|min:16',
        'no_telepon' => 'required|min:10|max:12 |numeric',
        'password' => 'required|min:6',
        // 'role' => 'required',
    ];
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'NIK' => 'required|min:16',
            'no_telepon' => 'required|min:10|max:12|numeric ',
            // 'role' => 'required',
        ]);
    }
    /**
     * update function
     */
    public function edit($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        $this->name = $User->name;
        $this->NIK = $User->NIK;
        $this->email = $User->email;
        $this->no_telepon = $User->no_telepon;
        // $this->role = $User->role;
        // $this->status = $User->status;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'NIK' => 'required|min:16',
            'no_telepon' => 'required|min:10|max:12 ',
            // 'role' => 'required',
        ]);
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'name' => $this->name,
                'email' => $this->email,
                'NIK' => $this->NIK,
                'no_telepon' => $this->no_telepon,
                // 'role' => $this->role,
                // 'status' => $this->status,
            ]);

            //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->emit('edit');
            // $this->alret()->warning('Title', 'Lorem Lorem Lorem');
            $this->resetInput();
            // $this->ceklis = [];

            //redirect
            return redirect()->route('profil.index');
        }
    }
    public function gantiPass()
    {
        $this->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'password' => bcrypt($this->password),
            ]);

            //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->emit('edit');
            // $this->alret()->warning('Title', 'Lorem Lorem Lorem');
            $this->resetInput();
            // $this->ceklis = [];

            //redirect
            return redirect()->route('profil.index');
        }
    }
}