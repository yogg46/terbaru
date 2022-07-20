<?php

namespace App\Http\Livewire\Client;

use App\Models\client;
use App\Models\project;
use Livewire\Component;

class Show extends Component
{
    public $client;
    public $total_project;
    public $sdh_project;
    public $baru_project;

    public function mount($slug)
    {
        $this->client = client::where('slug', $slug)->first();
        $this->total_project = project::where('no_client', $this->client->id)->get();
        $this->sdh_project = project::where('no_client', $this->client->id)->where('status', 6)->get();
        $this->baru_project = project::where('no_client', $this->client->id)->where('status', 1)->get();
    }

    public function render()
    {
        // $slug = $this->slug;
        return view('livewire.client.show', ['project' => project::all(),])
            ->extends(
                'layout.main',
                [
                    'tittle' => 'client',
                    'slug' => $this->client->nama,
                ]
            )
            ->section('isi_page');
    }
}