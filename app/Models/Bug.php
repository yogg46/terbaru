<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'bugs';

    public function BugProject()
    {
        return $this->belongsTo(project::class, 'project_id');
    }
}