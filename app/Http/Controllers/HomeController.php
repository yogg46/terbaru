<?php

namespace App\Http\Controllers;

use App\Models\Karyawans;
use App\Http\Livewire\Karyawan\Index as KaryawanIndex;
use App\Models\Kategori_karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $coba = User::where('role', auth()->user()->id)->first();
        $coba3 = User::where('role','3')->get();
        // $coba2 = Kategori_karyawan::where('no_kategori', auth()->user()->role)->first()->role;
        // $kar = Karyawans::all();
         return redirect()->route('index',compact('coba3'));
        //  return Redirect::back()->with('message','Operation Successful !');

    }
}
