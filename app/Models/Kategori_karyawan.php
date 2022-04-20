<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_karyawan extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'kategori_karyawans';

    public function kar()
    {
        return $this->hasMany(Karyawans::class);
    }
    public function KategoriToUser()
    {
        return $this->hasMany(User::class);
    }
}
