<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'NIK',
        'no_telepon',
        'status',
        'hitam',
        'deleted_at'
    ];
    // protected $guarded  = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'users';

    public function utk()
    {
        return $this->belongsTo(Kategori_karyawan::class, 'role')->withTrashed();
    }
    public function leaderKeprojek()
    {
        return $this->hasMany(project::class, 'leader')->withTrashed();
    }
    public function marketingKeprojek()
    {
        return $this->hasMany(project::class, 'marketing')->withTrashed();
    }
    public function ProgramerKeModul()
    {
        return $this->hasMany(Modul::class, 'programer')->withTrashed();
    }
    public function ProgramerKeBug()
    {
        return $this->hasMany(Bug::class, 'programer')->withTrashed();
    }
    public function Log()
    {
        return $this->hasMany(LoginActicity::class, 'user_id')->withTrashed();
    }
    // public function UserToKaryawan()
    // {
    //     return $this->belongsTo(Karyawans::class,'kategori');
    // }

}