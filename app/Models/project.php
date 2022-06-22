<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class project extends Model
{
    use HasFactory;
    use Sluggable;
    use AutoNumberTrait;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'projects';

    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($model) {

        //     if ($model->total_progres == 100) {
        //         $model->status = 3;
        //     } elseif ($model->total_progres > 50) {
        //         $model->status = 2;
        //     } elseif ($model->total_progres > 0) {
        //         $model->status = 1;
        //     }
        // });
        static::updating(function ($model) {

            if ($model->total_progres > 120) {
                $model->status = 5;
            } elseif ($model->total_progres > 110) {
                $model->status = 4;
            } elseif ($model->total_progres > 99) {
                $model->status = 3;
            } elseif ($model->total_progres > 50) {
                $model->status = 2;
            } elseif ($model->total_progres >= 0) {
                $model->status = 1;
            }
        });
    }
    public function getAutoNumberOptions()
    {
        return [
            'no_project' => [
                'format' => 'NMN-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5, // The number of digits in an autonumber
            ],
        ];
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_project'
            ]
        ];
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
    public function projectModul()
    {
        return $this->hasMany(Modul::class, 'no_project');
    }
    public function ProjectBug()
    {
        return $this->hasMany(Bug::class, 'project_id');
    }
    public function ProjectTrial()
    {
        return $this->hasMany(Trial::class, 'project_id');
    }
}