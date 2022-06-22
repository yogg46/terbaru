<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'trials';

    public function TrialProject()
    {
        return $this->belongsTo(project::class, 'project_id');
    }
}