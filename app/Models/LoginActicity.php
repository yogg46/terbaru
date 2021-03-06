<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoginActicity extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'login_acticities';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }
}