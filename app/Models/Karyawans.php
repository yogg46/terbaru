<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawans extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'karyawan';

    public function r_kk()
    {
        return $this->belongsTo(Kategori_karyawan::class,'kategori');
    }
}
