<?php

namespace App\Http\Livewire\Karyawan;


use App\Models\User;
use App\Models\Kategori_karyawan;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;


class Index extends Component
{
    use WithPagination;
    // use LivewireAlert;

    public $name;
    public $ids;
    public $selectAll = false;
    public $NIK;
    public $email;
    public $no_telepon;
    public $role;
    public $status;
    public $hitam;
    public $search = '';
    public $ceklis = [];
    protected $listeners = ['delete', 'deleteCheckedCountries'];
    public $sortBy = 'created_at';
    public $sortDirection = 'asc';



    public function render()
    {
        // sleep(0.2);
        // $karyawan = User::orderBy('id','desc')->get();
        // $karyawan = User::orderBy('id','desc')->first();
        $karyawan = User::search('name', $this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);
        $kk = Kategori_karyawan::all();
        return view('livewire.karyawan.index', ['karyawan' => $karyawan, 'k_k' => $kk])
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Karyawan',
                    'slug' => 'All'
                ]
            )
            ->section('isi_page');
    }


    protected $rules = [
        'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email|unique:karyawan',
        'NIK' => 'required|min:16',
        'no_telepon' => 'required|min:10|max:12 ',
        'role' => 'required',
    ];


    public function save()
    {
        $this->validate();

        $simpan = new User;

        $simpan->name = $this->name;
        $simpan->NIK = $this->NIK;
        $simpan->no_telepon = $this->no_telepon;
        $simpan->role = $this->role;
        $simpan->email = $this->email;

        $simpan->save();
        session()->flash('message', 'Data Berhasil Disimpan.');
        $this->resetInput();;
        $this->emit('save');
        $this->ceklis = [];
        //redirect
        return redirect()->route('karyawan.index');
    }



    public function resetInput()
    {
        $this->name = null;
        $this->NIK = null;
        $this->email = null;
        $this->no_telepon = null;
        $this->role = null;
        // return redirect()->route('karyawan.index');
    }



    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'NIK' => 'required|min:16',
            'no_telepon' => 'required|min:10|max:12 ',
            'role' => 'required',
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
        $this->role = $User->role;
        $this->status = $User->status;
    }

    public function presus($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        $this->status = $User->status;
        if ($User->status == 1) {
            $User = User::find($this->ids);
            $User->update([
                'status' => $this->status = 0
            ]);
        } else {
            $User = User::find($this->ids);
            $User->update([
                'status' => $this->status = 1
            ]);
        }
    }

    public function dark($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        $this->hitam = $User->hitam;
        if ($User->hitam == 1) {
            $User = User::find($this->ids);
            $User->update([
                'hitam' => $this->hitam = 0
            ]);
        } else {
            $User = User::find($this->ids);
            $User->update([
                'hitam' => $this->hitam = 1
            ]);
        }

        return redirect()->route('karyawan.index');
    }

    public function suspend()
    {
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'status' => $this->status,
            ]);
            $this->ceklis = [];
            return redirect()->route('karyawan.index');
        }
        # code...
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'NIK' => 'required|min:16',
            'no_telepon' => 'required|min:10|max:12 ',
            'role' => 'required',
        ]);
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'name' => $this->name,
                'email' => $this->email,
                'NIK' => $this->NIK,
                'no_telepon' => $this->no_telepon,
                'role' => $this->role,
                'status' => $this->status,
            ]);

            //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->emit('edit');
            $this->alret()->warning('Title', 'Lorem Lorem Lorem');
            $this->resetInput();
            $this->ceklis = [];

            //redirect
            // return redirect()->route('karyawan.index');

        }
    }

    public function destroy($id)
    {


        if ($id) {
            User::where('id', $id)->delete();
        }
        $this->emit('delete');
        $this->ceklis = [];

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('karyawan.index');
    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete()
    {
        User::find($this->id)->delete();

        $this->emit('delete');
        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');
        $this->ceklis = [];
        //redirect
        return redirect()->route('karyawan.index');
    }


    public function deleteCountries()
    {



        User::query()
            ->whereIn('id', $this->ceklis)
            ->delete();
        if ($this->selectAll = true) {
            return redirect()->route('karyawan.index');
            $this->selectAll = false;
        };
        $this->ceklis = [];
        $this->selectAll = false;
        session()->flash('message', 'Data Berhasil Dihapus.');
    }

    public function updatedselectAll($value)
    {

        if ($value) {
            $this->ceklis = User::pluck('id');
        } else {
            $this->ceklis = [];
        }
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function resetPass($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        // $this->status = $User->status;
        $User = User::find($this->ids);
        $User->update([
            'password' => $this->password = bcrypt('password')
        ]);
        session()->flash('message', 'Data Berhasil Direset.');
        return redirect()->route('karyawan.index');
    }
}