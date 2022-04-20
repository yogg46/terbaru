<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'projects';


    public function ClientToProject()
    {
        return $this->belongsTo(client::class,'no_client');
    }
    public function LeaderToProject()
    {
        return $this->belongsTo(User::class,'leader');
    }
    public function MarketingToProject()
    {
        return $this->belongsTo(User::class,'marketing');
    }
}
