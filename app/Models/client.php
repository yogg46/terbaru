<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class client extends Model
{
    use HasFactory;
    use Sluggable;
    use AutoNumberTrait;
    use SoftDeletes;



    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'clients';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function getAutoNumberOptions()
    {
        return [
            'client_id' => [
                'format' => 'NMN-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5, // The number of digits in an autonumber
            ],
        ];
    }
    public function r_kc()
    {
        return $this->belongsTo(kc::class, 'no_kc')->withTrashed();
    }

    public function projectClient()
    {
        return $this->hasMany(project::class, 'no_client')->withTrashed();
    }
}