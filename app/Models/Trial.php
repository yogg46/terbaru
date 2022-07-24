<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trial extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'trials';
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function TrialProject()
    {
        return $this->belongsTo(project::class, 'project_id')->withTrashed();
    }
}