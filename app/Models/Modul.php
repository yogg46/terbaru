<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class Modul extends Model
{
    use HasFactory;
    use Sluggable;
    // use AutoNumberTrait;
    use SoftDeletes;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'moduls';

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {

            if ($model->progres > 99) {
                $model->status = 1;
            } elseif ($model->progres > 0) {
                $model->status = 0;
            }
        });
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function ModulToProject()
    {
        return $this->belongsTo(project::class, 'no_project')->withTrashed();
    }
    public function ModulProgramer()
    {
        return $this->belongsTo(User::class, 'programer')->withTrashed();
    }
}