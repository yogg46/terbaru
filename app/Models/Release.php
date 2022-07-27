<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Release extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'releases';

    public function ReleaseProject()
    {
        return $this->belongsTo(project::class, 'project_id')->withTrashed();
    }
    public function ReleaseModul()
    {
        return $this->belongsTo(Modul::class, 'modul_id')->withTrashed();
    }
    public function ReleaseVersi()
    {
        return $this->belongsTo(Modul::class, 'versi')->withTrashed();
    }
    public function ReleaseProgramer()
    {
        return $this->belongsTo(User::class, 'programer')->withTrashed();
    }
}