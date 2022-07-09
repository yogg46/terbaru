<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori_karyawan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'kategori_karyawans';

    public function kar()
    {
        return $this->hasMany(Karyawans::class)->withTrashed();
    }
    public function KategoriToUser()
    {
        return $this->hasMany(User::class)->withTrashed();
    }
}