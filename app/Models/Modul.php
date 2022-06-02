<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class Modul extends Model
{
    use HasFactory;
    use Sluggable;
    // use AutoNumberTrait;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'moduls';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            if ($model->total_progres == 100) {
                $model->status = 1;
            } elseif ($model->total_progres > 0) {
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
        return $this->belongsTo(project::class, 'no_project');
    }
    public function ModulProgramer()
    {
        return $this->belongsTo(User::class, 'programer');
    }
}
