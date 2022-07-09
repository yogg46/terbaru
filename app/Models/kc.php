<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kc extends Model
{
    use SoftDeletes;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'kcs';

    public function klien()
    {
        return $this->hasMany(client::class)->withTrashed();
    }
}