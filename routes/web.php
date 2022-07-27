<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Bug\Index as BugIndex;
use App\Http\Livewire\Bug\Show as BugShow;
use App\Http\Livewire\Client\Edit as ClientEdit;
use App\Http\Livewire\Trial\Index as TrialIndex;
use App\Http\Livewire\Karyawan\Index as KaryawanIndex;
use App\Http\Livewire\Projects\Index as ProjectsIndex;
use App\Http\Livewire\Client\Index as ClientIndex;
use App\Http\Livewire\Client\Show as ClientShow;
use App\Http\Livewire\Profil\Index as Profilindex;
use App\Http\Livewire\Report\Index as reportIndex;
use App\Http\Livewire\Modul\Index as ModulIndex;
use App\Http\Livewire\Karyawan\Role as KaryawanRole;
use App\Http\Livewire\Karyawan\Edit;
use App\Http\Livewire\Modul\Project as ProjectModulShow;
use App\Http\Livewire\Modul\Show as ModulShow;
use App\Http\Livewire\Projects\Show as ProjectsShow;
use App\Http\Livewire\Report\Show as ReportShow;
use App\Http\Livewire\Trial\Show as TrialShow;
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
    return redirect('/login');
});
// Route::get('/login',LoginController::class)->name('login');
// Route::get('/karyawan',KaryawanIndex::class)->name('karyawan.index');

// Route::get('/karyawan/{h_kategori}',KaryawanRole::class);
// // Route::get('/{id}',Edit::class )->name('edit');
// Route::get('/edit',Edit::class,'liveware.karyawan.edit' );

// Route::get('/detail/{id}', 'ArtikelController@detail');

// Route::get('/coba', function () {
//     return view('livewire.coba');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'cekbanned');
Route::get('/dashboard', Index::class)->name('index')->middleware('auth');

Route::get('/projects', ProjectsIndex::class)->name('projects.index')->middleware('auth', 'checkRole:2,4,3,5');
Route::get('/projects/{slug}', ProjectsShow::class)->name('projects')->middleware('auth', 'checkRole:2,4,3,5');
Route::get('/projects/{slug}/{slug2}', ProjectModulShow::class)->name('projects2')->middleware('auth', 'checkRole:2,4,3,5');

Route::get('/report', reportIndex::class)->name('report.index')->middleware('auth', 'checkRole:2,5,4,3');
Route::get('/report/{slug}', ReportShow::class)->middleware('auth', 'checkRole:2,5,4,3');

Route::get('/client', ClientIndex::class)->name('clients.index')->middleware('auth', 'checkRole:3');
Route::get('/client/edit/{slug}', ClientEdit::class)->middleware('auth', 'checkRole:3');
Route::get('/client/{slug}', ClientShow::class)->middleware('auth', 'checkRole:3');

Route::get('/modul', ModulIndex::class)->name('modul.index')->middleware('auth', 'checkRole:5');
Route::get('/modul/{slug}', ModulShow::class)->middleware('auth', 'checkRole:5');
// Route::get('/modul/{slug}/{slug2}', ModulShow::class)->middleware('auth');

Route::get('/bug-report', BugIndex::class)->middleware('auth', 'checkRole:5,4');
Route::get('/bug-report/{slug}', BugShow::class)->middleware('auth', 'checkRole:5,4');

Route::get('/trial-error', TrialIndex::class)->middleware('auth', 'checkRole:4');
Route::get('/trial-error/{slug}', TrialShow::class)->middleware('auth', 'checkRole:4');

// Route::get('/admin', KaryawanIndex::class)->middleware('checkRole:1');

Route::get('/profil', Profilindex::class)->middleware('auth')->name('profil.index');



// Admin
// Route::group();
Route::get('/karyawan', KaryawanIndex::class)->name('karyawan.index')->middleware('auth', 'checkRole:1');
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
