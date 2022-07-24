<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class project extends Model
{
    use HasFactory;
    use Sluggable;
    use AutoNumberTrait;
    use SoftDeletes;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'projects';

    protected static function boot()
    {
        parent::boot();


        // static::updating(function ($model) {

        //     if ($model->total_progres > 130) {
        //         $model->status = 6;
        //     } elseif ($model->total_progres > 120) {
        //         $model->status = 5;
        //     } elseif ($model->total_progres > 110) {
        //         $model->status = 3;
        //     } elseif ($model->total_progres > 99) {
        //         $model->status = 4;
        //         $model->tgl_trial = Carbon::now();
        //     } elseif ($model->total_progres > 0) {
        //         $model->status = 2;
        //     } elseif ($model->total_progres == 0) {
        //         $model->status = 1;
        //     }
        // });
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
        return $this->belongsTo(client::class, 'no_client')->withTrashed();
    }
    public function LeaderToProject()
    {
        return $this->belongsTo(User::class, 'leader')->withTrashed();
    }
    public function MarketingToProject()
    {
        return $this->belongsTo(User::class, 'marketing')->withTrashed();
    }
    public function projectModul()
    {
        return $this->hasMany(Modul::class, 'no_project')->withTrashed();
    }
    public function ProjectBug()
    {
        return $this->hasMany(Bug::class, 'project_id')->withTrashed();
    }
    public function ProjectTrial()
    {
        return $this->hasMany(Trial::class, 'project_id')->withTrashed();
    }
}