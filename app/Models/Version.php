<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Version extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'versions';

    public function VersiRelease()
    {
        return $this->hasMany(Release::class, 'versi')->withTrashed();
    }
    public function VersiProject()
    {
        return $this->belongsTo(project::class, 'project_id')->withTrashed();
    }
}