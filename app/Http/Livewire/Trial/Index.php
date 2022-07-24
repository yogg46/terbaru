<?php

namespace App\Http\Livewire\Trial;

use App\Models\Trial;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.trial.index', [
            'trial' => Trial::paginate(9),
            // 'trial' => Trial::with('TrialProject')->whereHas('TrialProject',function(Builder $query)
            // {
            //     $query->where('status',4);
            // })->paginate(9),
        ])
            ->extends(
                'layout.main',
                [
                    'tittle' => 'Trial Error',
                    'slug' => ''
                ]
            )
            ->section('isi_page');
    }
}