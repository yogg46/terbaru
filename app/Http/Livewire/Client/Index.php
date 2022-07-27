<?php

namespace App\Http\Livewire\Client;

use App\Models\client;
use App\Models\kc;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $client_id;
    public $nama;
    public $email;
    public $cp;
    public $alamat;
    public $no_kc;
    public $ids;
    public $search = '';
    public $ceklis = [];
    public $selectAll = false;
    public $sortBy = 'created_at';
    public $sortDirection = 'asc';
    public $satu;
    public $switch = 0;
    protected $listeners = ['delete', 'deleteCountries', 'resetpass', 'presus'];



    public function render()
    {
        $search = $this->search;
        return view(
            'livewire.client.index',
            [
                'client' => client::search('nama', $this->search)
                    ->whereLike(['nama', 'alamat', 'cp', 'no_kc', 'client_id'], $this->search)
                    ->orWhereHas('r_kc', static function ($query) use ($search) {
                        $query->where('nama', 'LIKE', "%{$search}%");
                    })
                    ->orderBy($this->sortBy, $this->sortDirection)->get(),
                'kc' => kc::all(),
                'client2' => client::search('nama', $this->search)
                    ->orderBy($this->sortBy, $this->sortDirection)
                    ->whereLike(['nama', 'alamat', 'cp', 'no_kc', 'client_id'], $this->search)
                    ->orWhereHas('r_kc', static function ($query) use ($search) {
                        $query->where('nama', 'LIKE', "%{$search}%");
                    })
                    ->paginate(9),

            ]
        )
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Client',
                    'slug' => ''
                ]
            )
            ->section('isi_page');
    }

    protected $rules = [
        // 'client_id' => 'required',
        'nama' => 'required|min:6',
        // 'alamat' => 'required|min:16',
        // 'cp' => 'required|min:12',
        // 'no_kc' => 'required',

    ];

    public function save()
    {
        $this->validate();

        $simpan = new client;

        $simpan->client_id = $this->client_id;
        $simpan->nama = $this->nama;
        $simpan->email = $this->email;
        $simpan->alamat = $this->alamat;
        $simpan->cp = $this->cp;
        $simpan->no_kc = $this->no_kc;

        $simpan->save();
        session()->flash('message', 'Data Berhasil Disimpan.');
        $this->resetInput();
        $this->step = 0;
        $this->emit('save');

        //redirect
        return redirect()->route('clients.index');
    }

    public function resetInput()
    {
        $this->client_id = null;
        $this->nama = null;
        $this->email = null;
        $this->alamat = null;
        $this->cp = null;
        $this->no_kc = null;
        $this->step = 0;
        // return redirect()->route('clients.index');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'client_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'cp' => 'required|min:12',
            'no_kc' => 'required',

        ]);
    }

    public function edit($id)
    {
        $client = client::where('id', $id)->first();
        $this->ids = $client->id;
        $this->client_id = $client->client_id;
        $this->nama = $client->nama;
        $this->email = $client->email;
        $this->alamat = $client->alamat;
        $this->cp = $client->cp;
        $this->no_kc = $client->no_kc;
    }

    public function update()
    {
        $this->validate([
            'client_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'cp' => 'required|min:12',
            'no_kc' => 'required',

        ]);
        if ($this->ids) {
            $client = client::find($this->ids);
            $client->update([
                'client_id' => $this->client_id,
                'nama' => $this->nama,
                'email' => $this->email,
                'alamat' => $this->alamat,
                'cp' => $this->cp,
                'no_kc' => $this->no_kc,
            ]);

            //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->resetInput();
            $this->emit('edit');

            //redirect
            return redirect()->route('clients.index');
        }
    }

    public function delete($id)
    {


        if ($id) {
            client::where('id', $id)->delete();
        }
        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');


        //redirect
        // $this->switch = 1;
        // return redirect()->route('clients.index');
    }



    public function deleteCountries()
    {
        client::query()
            ->whereIn('id', $this->ceklis)
            ->delete();
        if ($this->selectAll = true) {

            $this->selectAll = false;
        };
        $this->emit('deleteall');
        $this->ceklis = [];
        $this->selectAll = false;
        $this->switch = 1;

        session()->flash('message', 'Data Berhasil Dihapus.');
    }

    public function updatedselectAll($value)
    {

        if ($value) {
            $this->ceklis = client::pluck('id');
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




    public function sw()
    {

        // if ($this->switch == 0) {
        //     $this->switch = 1;
        // } elseif ($this->switch == 1) {
        //     $this->switch = 0;
        // }
        $this->switch = 1;
    }
    public function sw2()
    {

        // if ($this->switch == '1') {
        //     $this->switch = '0';
        // } else {
        //     $this->switch = '1';
        // }
        $this->switch = 0;
    }

    public function cobaa($ces)
    {
        // if (is_null($this->search)) {
        //     $this->search = $ces;
        // }
        if ($this->search == $ces) {
            $this->search = '';
        } else {
            $this->search = $ces;
        }
    }


    public function confrimDel1($id)
    {
        $nama = client::where('id', $id)->first();
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan menghapus ' . $nama->nama . '?',
            'text' => '',
            'id' => $id,
        ]);
    }
    public $step;

    public $clients;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
    ];

    public function mount()
    {
        $this->step = 0;
    }


    public function decreaseStep()
    {
        $this->step--;
    }

    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }

    public function submit1()
    {
        $this->validate([
            'nama' => 'required|min:4',
            'no_kc' => 'required',
        ]);

        if ($this->clients) {
            $this->clients = tap($this->clients)->update(['nama' => $this->nama, 'no_kc' => $this->no_kc]);
            session()->flash('message1', 'successfully updated.');
        } else {
            $this->clients = client::create(['nama' => $this->nama, 'no_kc' => $this->no_kc]);
            session()->flash('message1', 'successfully created.');
        }


        $this->step++;
    }

    public function submit2()
    {
        // $this->validate([]);

        $this->clients = tap($this->clients)->update(['email' => $this->email, 'cp' => $this->cp, 'alamat' => $this->alamat]);

        $this->step++;
    }
    public function submit3()
    {
        // $this->validate([]);

        // $this->clients = tap($this->clients)->update(['cp' => $this->cp]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        // $this->step = 0;
        $this->resetInput();
        $this->emit('save');
    }
}