<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Region extends Model
{
    public function province()
    {
        return $this->hasMany(Province::class);
    }

    protected $fillable =[
        'id',
        'name',
       
    ];
}
