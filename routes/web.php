<?php

use App\Http\Controllers\LoginController;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Karyawan\Index as KaryawanIndex;
use App\Http\Livewire\Projects\Index as ProjectsIndex;
use App\Http\Livewire\Client\Index as ClientIndex;
use App\Http\Livewire\Profil\Index as Profilindex;
use App\Http\Livewire\Report\Index as reportIndex;
use App\Http\Livewire\Modul\Index as ModulIndex;
use App\Http\Livewire\Karyawan\Role as KaryawanRole;
use App\Http\Livewire\Karyawan\Edit  ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// Route::get('/login',LoginController::class)->name('login');
// Route::get('/karyawan',KaryawanIndex::class)->name('karyawan.index');
Route::get('/dashboard',Index::class)->name('index')->middleware('auth');
Route::get('/projects',ProjectsIndex::class)->name('projects.index')->middleware('auth');
Route::get('/report',reportIndex::class)->name('report.index')->middleware('auth');
Route::get('/client',ClientIndex::class)->name('clients.index')->middleware('auth');
Route::get('/modul',ModulIndex::class)->name('modul.index')->middleware('auth');
// Route::get('/karyawan/{h_kategori}',KaryawanRole::class);
// // Route::get('/{id}',Edit::class )->name('edit');
// Route::get('/edit',Edit::class,'liveware.karyawan.edit' );

Route::get('/coba',function(){ return view('livewire.coba');});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','cekbanned');
Route::get('/admin', KaryawanIndex::class)->middleware('checkRole:1');
Route::get('/profil',Profilindex::class)->middleware('auth')->name('profil.index');

// Admin
// Route::group();
Route::get('/karyawan', KaryawanIndex::class)->name('karyawan.index')->middleware('auth','checkRole:1');
// Route::get('/karyawan/administator', KaryawanRole::class)->name('karyawan.index')->middleware('auth','checkRole:1');



// Management
// Route::group();
// Marketing
// Route::group();
// Leader
// Route::group();
// Programer
// Route::group();


// Auth::routes();
