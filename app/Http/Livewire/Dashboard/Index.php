<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $progres="0";
    public $progres2="0";
    public $hitam;
    public $ids;




    public function render()
    {
        $dark = User::all();
        $sus = User::where('status','0')->count();
        $act = User::where('status','1')->count();
        $tot = User::count();
        return view('livewire.dashboard.dashboard_index',['tot'=>$tot,
        'act'=>$act,
        'sus'=>$sus,
        'dark'=>$dark,
        'coba3'=>User::where('role','3')->pluck('id'),
        ])
        ->extends('layout.main',
        ['tittle' => 'Dashboard',
        'slug'=>''])
        ->section('isi_page');
    }

    public function reset1()
    {
        $this->progres ="0";
        $this-> progres2 = "0";
    }

    public function dark($id)
    {
        $User= User::where('id',$id)->first();
        $this->ids = $User->id;
        $this->hitam = $User->hitam;
        if($User->hitam == 1)
        {
            $User= User::find($this->ids);
            $User->update([
                'hitam'=>$this->hitam=0]);
        }else{
            $User= User::find($this->ids);
            $User->update([
                'hitam'=>$this->hitam=1]);
         }
        return redirect()->route('index');
    }








}
