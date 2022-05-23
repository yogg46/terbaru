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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->total_progres > 50) {
                $model->status = 1;
            }
        });
    }



    public function ClientToProject()
    {
        return $this->belongsTo(client::class, 'no_client');
    }
    public function LeaderToProject()
    {
        return $this->belongsTo(User::class, 'leader');
    }
    public function MarketingToProject()
    {
        return $this->belongsTo(User::class, 'marketing');
    }
}