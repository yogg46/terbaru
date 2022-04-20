<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kc extends Model
{
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'kcs';

    public function klien()
    {
        return $this->hasMany(client::class);
    }
}
