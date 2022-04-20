<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Darkmode extends Component
{

    // public $dark=null;
    public $ids;
    public $hitam;

    public function render()
    {
        $user = User::all();
        return view('layout.main',['dark'=>$user]);
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
    }

}
