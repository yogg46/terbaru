<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'clients';

    public function r_kc()
    {
        return $this->belongsTo(kc::class,'no_kc');
    }

    public function projectClient()
    {
        return $this->hasMany(project::class,'no_client');
    }

}
