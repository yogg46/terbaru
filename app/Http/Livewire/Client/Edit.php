<?php

namespace App\Http\Livewire\Client;

use App\Models\client;
use App\Models\project;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    public $nama, $status, $no_kc, $alamat, $cp, $email, $ids;

    public function mount($slug)
    {
        $clients = client::where('slug', $slug)->first();
        $this->client = client::where('slug', $slug)->first();
        $this->total_project = project::where('no_client', $this->client->id)->get();
        $this->sdh_project = project::where('no_client', $this->client->id)->where('status', 3)->get();
        $this->baru_project = project::where('no_client', $this->client->id)->where('status', 1)->get();
        if ($clients) {
            $this->ids   = $clients->id;
            $this->nama   = $clients->nama;
            $this->alamat   = $clients->alamat;
            $this->email   = $clients->email;
            $this->cp   = $clients->cp;
            $this->no_kc   = $clients->no_kc;
            $this->status   = boolval($clients->status);
        }
    }
    public function render()
    {

        return view('livewire.client.edit')->extends(
            'layout.main',
            [
                'tittle' => 'Client',
                'slug' => $this->client->nama,
            ]
        )
            ->section('isi_page');
    }

    public function update()
    {


        $client = client::find($this->ids);

        if ($client) {
            $client->update([
                'nama'     => $this->nama,
                'alamat'   => $this->alamat,
                'cp'   => $this->cp,
                'email'   => $this->email,
                'no_kc'   => $this->no_kc,
                'status'   => $this->status,
            ]);
        }


        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}