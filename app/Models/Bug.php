<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bug extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'bugs';
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function BugProject()
    {
        return $this->belongsTo(project::class, 'project_id')->withTrashed();
    }
    public function BugModul()
    {
        return $this->belongsTo(Modul::class, 'modul_id')->withTrashed();
    }
    public function BugProgramer()
    {
        return $this->belongsTo(User::class, 'programer')->withTrashed();
    }
}